<?php
session_start();
include_once "../control/connection.php";
$db = new Database;

if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
require_once("../control/connection.php");
$id = $_SESSION['id'];

$name = $db->getUsernameById($id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/news.css">
    <title>Palastine</title>
</head>

<body>
    <header>
        <div class="dropdown">
            <button class="dropbtn">BackTo..</button>
            <div class="dropdown-content">
                <a href="home.php">Home</a>
                <a href="history.html">History</a>
                <a href="culture.html">Culture</a>
                <a href="map.html">Map</a>
            </div>
        </div>
    </header>
    <section class="news">
        <br>
        <div class="cards">

            <?php
            $db = $db->connect();
            $result = $db->query("SELECT * FROM news  ORDER BY date DESC");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <div class="card">
                        <a href="#">
                            <div class="image">
                                <img src="data:image/jpg;charset=utf8;base64, <?php echo base64_encode($row['image']); ?>" style="wigth:100%" />
                                <div class="info">
                                    <h3 class="add"><?php echo $row['title']; ?></h3>
                                    <p class="a"><?php echo $row['caption']; ?></p>

                                    <p class="time" style="color: #000; margin-left: -8rem; "><?php echo $row['date']; ?></p>
                                </div>
                            </div>
                    </div> </a>
            <?php
                }
            }


            ?>

            <!-- <div class="card">
                <a href="#">
                    <div class="image">
                        <img src="images.jpeg" alt="">

                    </div>
                    <div class="info">
                        <h3 class="add">ROH EL-ROH</h3>
                        <p class="a">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, facere.</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="#">
                    <div class="image">
                        <img src="images.jpeg" alt="">

                    </div>
                    <div class="info">
                        <h3 class="add">ROH EL-ROH</h3>
                        <p class="a">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis, facere.</p>
                    </div>
                </a>
            </div>


            </a>
        </div> -->
    </section>
</body>

</html>