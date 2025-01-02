<?php
defined('CONTROL') or die('Access denied!');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <style>
        body {
            display: flex;
            flex-direction: column;
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

        h3 {
            font-size: 20px;
            font-weight: 800;
        }

        span a {
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body class="body-<?php
echo random_int(1, 7); ?>">
    <h3>Welcome!</h3>

    <span>User: <strong><?= $_SESSION['user'] ?></strong></span>
    <span>
        <a href="?route=logout">Logout</a>
    </span>
</body>
</html>
