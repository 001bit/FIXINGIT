<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="POST">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="Login">
    </form>


    <?php
        if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
            $email      = $_POST['email'];
            $password   = $_POST['password'];
        }
    ?>
</body>
</html>