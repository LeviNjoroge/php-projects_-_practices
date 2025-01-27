<?php
    $conn = new mysqli("localhost", "root", "", "Test1_Reg");

    $Fname = $_POST['FName'];
    $LName = $_POST['LName'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $conn->query("INSERT INTO Users(FName, LName, Gender, Email, Password) VALUES('$Fname', '$LName', '$gender', '$email', '$password')");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="RegForm">
        <div class="highlight"><H2>Registration Form</H2></div>
        <form action="" method="post">
            <div id="formElements">
                <label for="FName">First Name: </label> <br>
                <input type="text" name="FName" id="FName" placeholder="Joe" required style="width: 50%;"> <br>
            </div>
            <div id="formElements">
                <label for="LName">Last Name: </label> <br>
                <input type="text" name="LName" id="LName" placeholder="Doe" required style="width: 50%;"> <br>
            </div>
            <div id="formElements">
                <label for="gender">Gender:</label> <br>
                <div>
                    <input type="radio" name="gender" id="male" value="M"> Male
                    <input type="radio" name="gender" id="female" value="F"> Female
                    <input type="radio" name="gender" id="other" value="O"> Other
                </div>
            </div>
            <div id="formElements">
                <label for="email">Email:</label> <br>
                <input type="email" name="email" id="email" placeholder="joedoe@example.com" required style="width: 50%;"> <br>
            </div>
            <div id="formElements">
                <label for="password">Password:</label> <br>
                <input type="password" name="password" id="password" password placeholder="********" required style="width: 50%;"> <br> <br>
            </div>
            <input type="submit" value="Submit" class="submitButton">
            <footer style="margin-right: 10px; text-align: right;">
                <p>Copyright &copy; Levi Njoroge</p>
            </footer>
        </form>
    </div>
    
</body>
</html>