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

$error = $error1 || $error2;

if (!$error) {
    $stmt = $db->prepare("SELECT * FROM `members` WHERE email=:email");
    $stmt->execute(['email' => $email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    $error = empty($user);

    if (!$error) {
        $hash = $user['password'];

        if (password_verify($password, $hash)) {
            setMessage('Логин выполнен', 'success');
            $_SESSION['user'] = $user;
            header("Location: /tasks/task_14_1.php");
            exit;
        }
    }

    setMessage('Неверный логин или пароль');
}
$_SESSION['email'] = $email;
$_SESSION['error'] = $error;

header("Location: /tasks/task_14.php");

function checkField($value){
    return empty($value);
}

function setMessage($message, $label = 'danger') {
    $_SESSION['messages'][] = [
      'text' => $message,
      'label' => $label
    ];
}