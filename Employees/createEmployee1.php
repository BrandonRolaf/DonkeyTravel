<?php
include "../main-navbar.php";
?>
<!doctype html>
<html>
<head>
    <title>create employee</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<div class="title">
    <h1>create employee 1</h1>
</div>
<form action="createEmployee2.php" method="post">
    <label for "namevak">name: </label>
    <input type = "text" name = "namevak"></input>
    <br/>
    <label for "emailvak">email: </label>
    <input type = "text" name = "emailvak"></input>
    <br/>
    <label for "bankdetailsvak">bankdetails: </label>
    <input type = "text" name = "bankdetailsvak"></input>
    <br/>
    <label for "addressvak">address: </label>
    <input type = "text" name = "addressvak"></input>
    <br/>
    <label for "postalcodevak">postalcode: </label>
    <input type = "text" name = "postalcodevak"></input>
    <br/>
    <label for "telnumber">telephone number: </label>
    <input type = "text" name = "telnumbervak"></input>
    <br/>
    <input type="submit">
</form>
</body>
</html>
