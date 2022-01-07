<?php

session_start();

$error = false;
if (!empty($_FILES) && empty($_FILES['image']['name'])) {
    setMessage('Выберите файл');
    $error = true;
}

if ($error) {
    header("Location: /tasks/task_15_1.php");
    exit;
}

if(!empty($_FILES['image']['name'])) {
    $filename = uploadFile();

    if ($filename) {
        insertImageInDb($filename);
    }
}

if (!empty($_GET['image'])) {
    deleteFile($_GET['image']);
}

function uploadFile() {
    $name = $_FILES['image']['name'];
    $name = explode('.', $name);
    $extension = '.' . end($name);

    $tmp_name = $_FILES['image']['tmp_name'];
    $filename = uniqid() . $extension;
    $dir = getUploadsDir();

    if(move_uploaded_file($tmp_name, $dir . $filename)) {
        setMessage('Файл загружен', 'success');
        return $filename;
    }

    return false;
}

function deleteFile($filename) {
    $file = getUploadsDir() . $filename;

    $db = new PDO('mysql:host=localhost;dbname=marlin', 'root', '');
    $sql = "DELETE FROM images WHERE image = :image";
    $sql = $db->prepare($sql);
    $delete = $sql->execute(['image' => $filename]);

    if (file_exists($file) && $delete) {
        unlink($file);
    }
    setMessage("Файл {$filename} успешно удален", 'success');
    header("Location: /tasks/task_15_1.php");
}

function insertImageInDb($filename) {
    $db = new PDO('mysql:host=localhost;dbname=marlin', 'root', '');
    $sql = "INSERT images(image) VALUES(:image)";
    $sql = $db->prepare($sql);
    $sql->execute(['image' => $filename]);
    header("Location: /tasks/task_15_1.php");
}

function getImages() {
    $db = new PDO('mysql:host=localhost;dbname=marlin', 'root', '');
    $sql = "SELECT * FROM  images";
    $sql = $db->prepare($sql);
    $sql->execute();
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}

function getUploadsDir() {
    return $_SERVER['DOCUMENT_ROOT'] . '/uploads/';
}

function setMessage($message, $label = 'danger') {
    $_SESSION['message'] = [
        'text' => $message,
        'label' => $label
    ];
}