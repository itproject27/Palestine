<?php

session_start();
include_once "../control/connection.php";
$db = new Database;
if (isset($_POST['sub'])) {

  $username = $_POST['username'];

  $query = "SELECT * FROM users where username like  '$username' ";
  $result =  mysqli_query($db->connect(), $query);
  if ($result) {
    if (mysqli_num_rows($result) > 0) {
      while ($row =  mysqli_fetch_assoc($result)) {
        $_SESSION['id'] = $row['id'];
        header("location:../pages/home.php");
      }
      if ($username == 'admin') {
        header("location:../pages/admin.php");
      }
      if ($username == 'journalist') {
        header("location:../pages/journalist.php");
      }
    } else {
      echo "Invalid username";
    }
  }
}
