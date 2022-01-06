<?php
session_start();

$text = $_POST['text'];

if(empty($text)) {
    setMessage('Вы не добавили сообщение');
    header("Location: /tasks/task_12.php");
    exit;
}

setMessage('Ваше сообщение выводится тут: ' . $text, 'info');

header("Location: /tasks/task_12.php");

function setMessage($message, $label = 'danger') {
    $_SESSION['message'] = [
      'text' => $message,
      'label' => $label
    ];
}