<?php
  session_start();

  if($_SESSION['user']){
    header('Location: profile.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css">
  <title>Sign up</title>
</head>
<body>
  <form action="vendor/signup.php" method="post">
    <label>Имя</label>
    <input type="text" name='name' placeholder='Введите ваше имя'>
    <label>Логин</label>
    <input type="text" name='login' placeholder='Введите ваш логин'>
    <label>Почта</label>
    <input type="text" name='email' placeholder='Введите вашу почту'>
    <label>Пароль</label>
    <input type="password" name='password' placeholder='Введите ваш пароль'>
    <label>Подтвердите пароль</label>
    <input type="password" name='password_confirm' placeholder='Подтвердите пароль'>
    <button type="submit">Зарегистрироваться</button>
    <span> 
    У вас есть аккаунт? - 
    <a href="index.php">авторизуйтесь.</a>
    </span>
    <?php
      if($_SESSION['message']){
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message'])
    ?>
  </form>
</body>
</html>