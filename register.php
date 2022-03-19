<?php

include_once './init.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if($result) {
        redirect('login.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="text" name="password">
        <button type="submit">Register</button>
    </form>
</body>
</html>