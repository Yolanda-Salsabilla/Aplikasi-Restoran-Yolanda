<?php
// memulai session
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$users = [
    ["username" => "yolanda", "password" => 123, "nama" => "yolanda"],
    ["username" => 212525001, "password" => 111, "nama" => "ahmad"]
];

$canLogin = false;
foreach($users as $data){
    if($data['username'] == $username && $data['password'] == $password){
        $canLogin = true;
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];
        header('Location: dashboard.php');
    }
    else if($data['username'] != $username && $data['password'] == $password){
        $canLogin = false;
        $_SESSION['error'] = "Username Salah!!";
        header('Location: login.php');
    }
    else if($data['username'] == $username && $data['password'] != $password){
        $canLogin = false;
        $_SESSION['error'] = "Password Salah!!";
        header('Location: login.php');
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>