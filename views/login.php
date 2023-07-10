<?php

    require_once './src/auth.php';
    // require './utils/subscribe.php';
    if (isset($_POST['login']) && isset($_POST['password'])) {
        login($_POST['login'], $_POST['password']);
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/Stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body style="display: flex;justify-content:center;flex-direction:column;align-items:center;">
    <header class="header">
    <div class="nav-menu">
          <div id="burger"><span></span><span></span><span></span></div>
          <ul class="menu">
            <img class="icon" src="assets/img/coffee-cup.png" />
            <li><a class="boxmenu" href="index.html">Home Page</a></li>
            <li>
              <a class="boxmenu" href="AboutMe/AboutMe.html">About Valera</a>
            </li>
            <li><a class="boxmenu" href="login.php">Log in</a></li>
          </ul>
        </div>
    </header>
    <form method="post" style="width: 500px;">
        <div class="form-group">
            <label>Login</label>
            <input type="text" class="form-control" name="login">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1"  name="password">
        </div>
        <hr />
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>