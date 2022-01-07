<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=marlin', 'root', '');

$email = $_POST['email'];
$password = $_POST['password'];
$error = false;

if ($error1 = checkField($email)) {
    setMessage('Поле email обязательно для заполнения');
}

if ($error2 = checkField($password)) {
    setMessage('Поле password обязательно для заполнения');
}

if ($error3 = !checkEmail($email)) {
    setMessage('Неверный формат email');
}

$error = $error1 || $error2 || $error3;

if (!$error) {
    $stmt = $db->prepare("SELECT * FROM `members` WHERE email=:email");
    $stmt->execute(['email' => $email]);
    $exist = $stmt->fetch();

    $error = !empty($exist);

    if (!$error) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $db->prepare("INSERT INTO `members`(`email`, `password`) VALUES (:email, :password)");

        $stmt->execute(['email' => $email, 'password' => $password]);

        setMessage('Этот эл адрес добавлен в базу', 'success');

        header("Location: /tasks/task_11.php");
        exit;
    }

    setMessage('Этот эл адрес уже занят другим пользователем');
}
$_SESSION['email'] = $email;
$_SESSION['error'] = $error;

header("Location: /tasks/task_11.php");

function checkEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function checkField($value){
    return empty($value);
}

function setMessage($message, $label = 'danger') {
    $_SESSION['messages'][] = [
      'text' => $message,
      'label' => $label
    ];
}