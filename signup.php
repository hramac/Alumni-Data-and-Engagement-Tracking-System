<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "signup.db.php" method = "POST">
        <label>Username :</label><br>
        <input type = "text" name = "uid" required><br><br>
        <label>E-mail :</label><br>
        <input type = "email" name = "email" required><br><br>
        <label>Password :</label><br>
        <input type = "password" name = "pwd" required><br><br>
        <label>Repeat Password :</label><br>
        <input type = "password" name = "pwd-repeat" required><br><br>
        <button type = "submit" name = "signup-submit">Signup</button><br><br>
</form>

<form action= "login.php">
<button type = "submit" name = "login">Login</button>
</form>

</body>
</html>