<?php
    $conn = new mysqli("localhost", "root", "", "Test1_Reg");
    $FName = $_POST['FName'];
    $LName = $_POST['LName'];
    $gender = $_POST['gender'] ?? null; // Use null coalescing to handle missing key
    $email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("INSERT INTO Users (FName, LName, gender, email, password) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $FName, $LName, $gender, $email, $password);
    $stmt->execute();
    $stmt->close();
    $conn->close();
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