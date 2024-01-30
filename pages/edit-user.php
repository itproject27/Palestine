<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
include_once '../control/connection.php';
$db = new Database;
$conn = $db->connect();

if (isset($_POST['submit'])) {

    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['pass'];

    $insert = $conn->query("UPDATE users SET  username ='$username' ,pass = '$password' where id like '$id' ");
    header("Location: ../pages/admin.php");

    if ($insert) {
        $status = 'success';
        $statusMsg = "File uploaded successfully.";
    } else {
        $statusMsg = "File upload failed, please try again.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palestine</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="description" content="" />
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
</head>

<body>


    <!-- / Navbar -->

    <div class="card mb-4">
        <h5 class="card-header">Update Users</h5>
        <!-- Account -->
        <div class="card-body">
        </div>
        <hr class="my-0" />
        <div class="card-body">
            <form action="edit-user.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="firstName" class="form-label">ID</label>
                        <input class="form-control" type="text" id="id" name="id" value="" autofocus />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="lastName" class="form-label">Username</label>
                        <input class="form-control" type="text" name="username" id="username" value="" />
                    </div>
                    <div class="mb-3 col-md-6">
                        <label for="email" class="form-label">Password</label>
                        <input class="form-control" type="text" id="pass" name="pass" value="" placeholder="" />
                    </div>
                </div>
                <div class="mt-2">
                    <button type="submit" name="submit" class="btn btn-primary me-2"> Save changes</button>
                    <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /Account -->
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/pages-account-settings-account.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>