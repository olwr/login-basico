<?php

defined('CONTROL') or die('Access denied!');

// verify if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // verify if the user and password were posted
    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;
    $err = null;

    if (empty($username) || empty($password)) {
        $err = 'Please enter your username and password!';
    }

    // verify if the user and password are valid
    if (empty($err)) {
        $users = require __DIR__ . '/../inc/users.php';

        foreach ($users as $user) {
            if ($user['user'] === $username && password_verify($password, $user['password'])) {
              $_SESSION['user'] = $username;
              header('Location: index.php?rota=home');
            }
        }

        // invalid login
        $err = 'User and/or password invalid!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>

  <style>
      * {
          margin: 0;
      }

      body {
          display: flex;
          justify-content: center;
          align-items: center;
          width: 100%;
          height: 90vh;
          font-family: Verdana, Geneva, sans-serif;
          color: #191919;
      }

      .body-1 {
          background-color: moccasin;
      }

      .body-2 {
          background-color: navajowhite;
      }

      .body-3 {
          background-color: powderblue;
      }

      .body-4 {
          background-color: palegreen;
      }

      .body-5 {
          background-color: plum;
      }

      .body-6 {
          background-color: silver;
      }

      .body-7 {
          background-color: pink;
      }

      form {
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          gap: 12px;
          background: #5757570e;
          width: 85%;
          height: 50%;
          border-radius: 24px;
          box-shadow: 0 0 10px #1919193f;
      }

      h3 {
          font-size: 20px;
          font-weight: 800;
      }

      form div {
          display: flex;
          flex-direction: column;
          align-items: center;
          gap: 6px;
          width: 90%;
      }

      label {
          font-size: 14px;
          align-self: flex-start;
          margin-left: 10%;
      }

      input {
          width: 75%;
          height: 32px;
      }

      input[type="submit"] {
          width: 104px;
          font-family: Verdana, Geneva, sans-serif;
          font-weight: 700;
          margin-top: 12px;
          cursor: pointer;
      }

      p {
          font-size: 12px;
          color: firebrick;
          font-weight: bold;
      }

      @media only screen and (width >= 1020px) {
          form {
              width: 30%;
          }
      }

      @media only screen and (width >= 500px) and (width <= 699px) {
          form {
              width: 65%;
          }
      }

      @media only screen and (width >= 700px) and (width <= 1019px) {
          form {
              width: 50%;
          }
      }
  </style>
</head>
<body class="body-<?php
echo random_int(1, 7); ?>">
  <form action="index.php?route=login" method="post">
    <h3>Login</h3>
    <br/>

    <div>
      <label for="username">Username:</label>
      <input type="text" id="username" name="username" placeholder="your username here"/>
    </div>

    <div>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="your password here"/>
    </div>

    <input type="submit" value="Send">

      <?php
      if (!empty($err)) : ?>
        <p><?= $err ?></p>
      <?php
      endif; ?>
  </form>
</body>
</html>
