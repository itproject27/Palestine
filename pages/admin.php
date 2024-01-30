<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
require_once("../control/connection.php");
$id = $_SESSION['id'];
$db = new Database;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

        <title>Palestine</title>

        <meta name="description" content="" />

        <!-- Favicon -->
        <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">

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
        <script src="../assets/js/config.js"></script>
    </head>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Palestine</title>
</head>

<body style="background-color: #fff;">
    <header>
        <div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="home.php">Home</a>
                <a href="admin.php">Edit</a>
                
                <a href="mailto:CsHelwanTeam@work.com">Contact</a>
                <a href="../includes/logout.php"> logout </a>
            </div>
            <div id="main">
                <span style="font-size:30px;cursor:pointer;color:black" onclick="openNav()">&#9776;</span>
            </div>
        </div>
        <a href="home.php" class="logo">
            <div class="logod">
                <img src="palestine.svg" class="logoP" width="50px" height="50px">
                <span class="logot">Palestine</span>
            </div>
        </a>
        <nav class="navigation">
            <a href="mailto:CsHelwanTeam@work.com"><i class="fa-solid fa-headset"></i></a>
            <a href="../includes/logout.php"> <i class="fa-solid fa-right-from-bracket"></i></a>
            <span class="logot" style="font-weight: 500; font-size: 1em;"><?php echo "Welcome : " . $db->getUsernameById($id); ?></span>
        </nav>
    </header>
    <div class="container">
        <img src="../assets/images/bird.png" class="bird" alt="Bird">
        <div class="main">
            <div class="part1">
                <div class="design1">
                    <img src="../assets/images/palestine-word.jpg" class="des2">
                    <div class="texts">
                        <span class="Palastine">To never forget..</span>
                    </div>
                </div>
                <div class="rate">
                    <span id="rateValue">14150</span>
                    <i class="fa-solid fa-droplet" style="color: #ff0000;"></i>
                </div>
                <div class="donation">
                    <a href="#" id="myBtn"><span>Donate</span></a>
                    <!-- <button id="myBtn">Donate</button> -->
                </div>
            </div>
        </div>
    </div>
    <section class="awarness">

        <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <h4 class="fw-bold py-3 mb-4"> <span class="logot"><?php echo 'Number of Users : ' .  $db->count(); ?></span></h4>

                <!-- Basic Bootstrap Table -->
                <div class="card1">
                    <div class="table-responsive text-nowrap">
                        <table class="table" style="font-size: 20px;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">

                                <?php
                                $c = $db->count();
                                for ($i = 1; $i < $c + 1; $i++) { ?>
                                    <tr>
                                        <td>
                                            <?php
                                            echo $i; ?> </td>
                                        <td>
                                            <?php
                                            echo $db->getUsernameById($i); ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $db->getPassById($i); ?>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"> <a href="edit-user.php"> Update </a>
                                                    </button>
                                                    <form method="post" action="../includes/delete.php" style="display: inline;">
                                                        <input type="hidden" name="id" value="<?php echo $i; ?>">
                                                        <button type="submit" class="btn p-0 dropdown-toggle hide-arrow" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                                    </form>
                                            </div>
                                        </td>
                                    <?php
                                }
                                    ?> </td>

                                    </tr>
                            </tbody>
                        </table>
                        <h4 class="fw-bold py-3 mb-4"> <a href="sign-up.php"> <span class="logot">Add Users</span></a></h4>
                    </div>
                </div>
                <!--/ Basic Bootstrap Table -->
    </section>
    <footer class="footer">
        <p>&copy; 2023, made with &#128151; by Cs Helwan Team</p>
    </footer>
    </div>

    </div>
    <!-- Donation.html Page -->
    <!-- The Modal -->

    </div>
</body>

</html>
<script>
    // Set the start date (October 7, 2023)
    const startDate = new Date('2023-10-07T00:00:00Z');

    // Get the current date and time
    const currentDate = new Date();

    // Calculate the time difference in minutes
    const timeDifferenceMinutes = Math.floor((currentDate - startDate) / (1000 * 60));

    // Set the rate increase per minute
    const rateIncreasePerMinute = 0.20595238095238095238095238095238;

    // Calculate the updated rate
    const updatedRate = rateIncreasePerMinute * timeDifferenceMinutes;

    // Update the rate value in the HTML
    document.getElementById('rateValue').textContent = Math.round(updatedRate);

    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main").style.marginLeft = "0";
    }
</script>