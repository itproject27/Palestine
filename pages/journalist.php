<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
require_once("../control/connection.php");
$id = $_SESSION['id'];
$db = new Database;
$name = $db->getUsernameById($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/jornalist.css">
    <title>Palastine</title>
</head>

<body>
    <header>
        <div></div>
        <a href="home.php" class="logo">
            <div class="logod">
                <img src="palestine.svg" class="logoP" width="50px" height="50px">
                <span class="logot">Palestine</span>
            </div>
        </a>
        <nav class="navigation">
            <a href="mailto:CsHelwanTeam@work.com"><i class="fa-solid fa-headset"></i></a>
            <a href="../includes/logout.php"> <i class="fa-solid fa-right-from-bracket"></i></a>
            <span class="logot" style="font-weight: 500; font-size: 1em;"><?php echo "Welcome : " . $name; ?></span>
        </nav>
    </header>
    <section class="awarness">
        <span>Know more about Palestine</span>
        <br>
        <div class="cards">
            <div class="card">
                <a href="add_news.php">
                    <div class="icon">
                        <i class="fa-solid fa-newspaper"></i>
                    </div>
                    <div class="info">
                        <h3 class="add">Add News</h3>
                        <!-- <p class="a">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, facere.</p> -->
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="news.php">
                    <div class="icon">
                        <i class="fa-solid fa-earth-americas"></i>
                    </div>
                    <div class="info">
                        <h3 class="news"> News</h3>
                        <!-- <p class="a">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, facere.</p> -->
                    </div>
                </a>
            </div>

            </a>
        </div>
    </section>
</body>

</html>