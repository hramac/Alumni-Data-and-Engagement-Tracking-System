<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://unpkg.com/bamboo.css">
</head>
<body>

<h1>Sign In</h1>
<form action = "login.db.php" method = "POST">
        <table>
            <tr>
                <td> Username :</td>
                <td><input type = "text" name = "uid" required></td>
            </tr>

            <tr>
                <td> Password :</td>
                <td><input type = "password" name = "pwd" required></td>
            </tr>

            <tr>
                <td><button type = "submit" name = "login">Login</button></td>
            </tr>
                        
        </table>
</form>

</body>
</html>