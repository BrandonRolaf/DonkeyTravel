<?php
include "../main-navbar.php";
?>
<!doctype html>
<html>
<body>
<link rel="stylesheet" href="../HitList2.css">
<div class="pageInfo">
    <div class="topnav" id="myTopNav">
        <h2><a href="../login/login.php" class="active">go back to login</a></h2>
    </div>
    <?php
    require "Users.php";
    $userId = $_POST["userIdField"];
    $user1 = new User();
    $user1->searchUser($userId);
    ?>
    <div class="topnav" id="myTopNav">
        <form action="userDelete3.php" method="post">
            <!-- $id cant be changed -->
            <input type="hidden" name="userIdField" value=" <?php echo $userId ?> ">
            <!-- 2x deleteBox  -->
            <input type="hidden" name="deleteBox" value="nee">
            <input type="checkbox" name="deleteBox" value="ja">
            <label for="deleteBox">Delete this user.</label><br/><br/>
            <input type="submit"><br/><br/>
        </form>
    </div>
</div>
<footer>  </footer>
</html>