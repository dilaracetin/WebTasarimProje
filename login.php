<?php
    session_start();
    if (isset($_SESSION['message'])) {
      echo '<p>' . $_SESSION['message'] . '</p>';
      unset($_SESSION['message']);
    }
  ?>
  <?php
  session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];

  // Kullanıcı adı ve şifre kontrolü
  if ($username === 'admin@example.com' && $password === '12345') {
    $_SESSION['message'] = 'Hoşgeldiniz, giriş başarılı!';
    header('Location: welcome.php');
    exit;
  } else {
    $_SESSION['message'] = 'Kullanıcı adı veya şifre hatalı!';
    header('Location: login.html');
    exit;
  }
?>
