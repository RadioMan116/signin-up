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
  <title>Sign in</title>
</head>
<body>
  <form action="vendor/signin.php" method="post">
    <label>Логин</label>
    <input type="text" name='login'>
    <label>Пароль</label>
    <input type="password" name='password'>
    <button type="submit">Войти</button>
    <span> У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь.</a></span>
    <?php
      if($_SESSION['message']){
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
      }
      unset($_SESSION['message'])
    ?>
  </form>
</body>
</html>