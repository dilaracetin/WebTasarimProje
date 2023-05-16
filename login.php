<?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  // Kullanıcı adı ve şifre kontrolü
  if ($username === 'g221210039@sakarya.edu.tr' && $password === 'g221210039') {
    $_SESSION['message'] = 'Hoşgeldiniz, giriş başarılı!';
    header('Location: welcome.php');
    exit;
  } else {
    $_SESSION['message'] = 'Kullanıcı adı veya şifre hatalı!';
    header('Location: login.html');
    exit;
  }
?>
