<?php

include_once './init.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE `email`='$email' and `password`='$password'";
    $result = mysqli_query($conn, $sql);

    if($user = mysqli_fetch_assoc($result)) {
        $_SESSION['auth'] = [
            'name' => $user['name'],
            'email' => $user['email'],
        ];
        redirect('index.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <input type="email" name="email">
        <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
</body>
</html>