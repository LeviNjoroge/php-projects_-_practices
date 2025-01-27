<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg page</title>
</head>
<body>
    <label for="FName">First Name: </label> <br>
    <input type="text" name="FName" id="FName"> <br>
    <label for="LName">Last Name: </label> <br>
    <input type="text" name="LName" id="LName"> <br>
    <label for="gender">Gender</label> <br>
    <div>
        <label for="male">Male</label> <input type="radio" name="male" id="male" value="M">
        <label for="female">Female</label> <input type="radio" name="female" id="female" value="F">
        <label for="other">Other</label> <input type="radio" name="other" id="other" value="O">
    </div>
    <label for="email">Email:</label> <br>
    <input type="email" name="email" id="email"> <br>
    <label for="password">Password:</label> <br>
    <input type="password" name="password" id="password" password> <br>
</body>
</html>