<?php
session_start();
require_once '../control/connection.php';
$db = new Database;
$conn = $db->connect();
$user_id = $_SESSION['id'];

if (isset($_POST['donate'])) {

    $username = $_POST['username'];
    $donation = $_POST['donation'];

    $add_user_query = "INSERT INTO donations (username, donation , user_id) VALUES ('$username', '$donation' , '$user_id')";
    $add_user = mysqli_query($conn, $add_user_query);
    if ($add_user) {
        echo "donation succssfull";
        header("Location: ../pages/home.php");
    } else {
        echo "error";
    }
}
