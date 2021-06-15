<?php
  session_start();
  if(!$_SESSION['user']){
    header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <div class="profile">
        <h2><?= $_SESSION['user']['name'] ?></h2>
        <p><?= $_SESSION['user']['email'] ?></p>
        <a href="vendor/logout.php">EXIT</a>
    </div>
</body>
</html>