<?php
session_start();
include('connection.php');
$user = $_POST['name'];
$password = $_POST['password'];

$sql = "SELECT * FROM userr WHERE name = '$user' AND password = '$password'";

$result = $conn->query($sql);

$num = $result->num_rows;
// echo $num;

if ($num > 0) {
    $_SESSION['login'] = $user;
    header('location:home.php');
} else {
    header('location:index.php');
}
