<!doctype html>
<html>
<head>
</head>
<body>
<link rel="stylesheet" href="">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="" class="active"> </a></h2>
    </div>
    <?php
    require "Users.php";
    $userName=$_POST["userNameField"];
    $password=$_POST["userPasswordField"];

    $gehashed = password_hash($password, null);
    $userPassword =$gehashed;

    // maken object -------------------------------
    $user1 = new User($userName, $userPassword);
    $user1->createUser();

    // afdrukken object ---------------------------

    ?>
</div>
</body>
<footer>  </footer>
</html>