<?php
// require_once "./src/subscription.php";
require_once "./utils/subscribe.php";
$subscriptions = allSubscriptions();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/Stylesheet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
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
                <li><a class="boxmenu" href="logout.php">Logout</a></li>

            </ul>
        </div>
    </header>
    <!-- <button type="return">return</button> -->
    <h1>My subscribers</h1>
    <table class="table table-striped table-sm w-60">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($subscriptions as $index => $subscription) : ?>
                <tr>
                    <td>
                        <?= $index + 1 ?>
                    </td>
                    <td>
                        <?= $subscription->name ?>
                    </td>
                    <td>
                        <?= $subscription->email ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>