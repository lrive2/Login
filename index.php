<?php
  session_start();
  require 'conexion.php';
  
    if (isset($_SESSION['user_id'])) {
      
        $records = $pdo->prepare('SELECT id, email, password FROM user WHERE id = :id');
        $records->bindParam(':id', $_SESSION['user_id']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);


        $user = null;
      
    if (count($results) > 0) {
        $user = $results;
      }
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to you WebApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    
        <?php require 'header.php' ?>

              <?php if(!empty($user)): ?>
              <br> Welcome. <?= $user['email']; ?>
              <br>You are Successfully Logged In
              <a href="logout.php">
                  Logout
              </a>
              <?php else: ?>
              <h1>Please Login or SignUp</h1>

              <a href="login.php">Login</a> or
              <a href="signUp.php">SignUp</a>
          <?php endif; ?>

  </body>
</html>