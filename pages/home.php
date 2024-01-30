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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Palestine</title>
</head>

<body>
    <header>
        <div>
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="home.php">Home</a>
                <?php
                if ($db->getUsernameById($id) == 'admin') {
                ?>
                    <a href="admin.php">Edit</a>
                <?php } ?>
                <a href="news.php">News</a>
                <a href="mailto:CsHelwanTeam@work.com">Contact</a>
                <a href="../includes/logout.php"> logout </a>
            </div>
            <div id="main">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
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
            <span class="logot" style="font-weight: 500; font-size: 1em;"><?php echo "Welcome : " . $name; ?></span>
        </nav>
    </header>
    <div class="container">
        <img src="../assets/images/bird.png" class="bird" alt="Bird">
        <div class="main">
            <div class="part1">
                <div class="design1">
                    <!-- <img src="palestine.svg" class="des2">
                    <div class="texts">
                        <span class="Palastine2">فِلَسْطِين </span>
                        
                        <span class="Palastine">Palestine</span>
                    </div> -->
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
        <span>Know more about Palestine</span>
        <br>
        <div class="cards">
            <div class="card">
                <a href="history.html">
                    <div class="icon">
                        <i class="fa-solid fa-book" style="color: #974b00;">
                        </i>
                    </div>
                    <div class="info">
                        <h3 class="History">History</h3>
                        <p class="h">Dive into the profound narratives encapsulated within the pages of history. Each chapter unfolds tales of triumphs, struggles, and the evolution of civilizations. Explore the past to illuminate the path forward, embracing the lessons engraved in the annals of time.</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="culture.html">
                    <div class="icon">
                        <i class="fa-solid fa-mosque" style="color: #203760;"></i>
                    </div>
                    <div class="info">
                        <h3 class="Culture">Culture</h3>
                        <p class="c">Embrace the essence of cultural richness symbolized by this mosque icon. Dive into the depths of heritage and traditions, where stories are woven into every fabric of life. Let's celebrate diversity and the mosaic of traditions that paint the vibrant canvas of our world.</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="map.html">
                    <div class="icon">
                        <i class="fa-regular fa-map" style="color: #58ff4d;"></i>
                    </div>
                    <div class="info">
                        <h3 class="Geography">Geography</h3>
                        <p class="g">Discover Palestine's rich tapestry etched on this map. From ancient cities to serene landscapes, explore its profound history and cultural vibrancy. Let this map unveil a story of resilience and beauty.</p>
                    </div>
            </div>
            </a>
        </div>
    </section>
    <footer class="footer">
        <p>&copy; 2023, made with &#128151; by Cs Helwan Team</p>
    </footer>
    </div>
    <!-- Donation.html Page -->
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <img src="../assets/images/Gaza.jpg" class="gaza">
            <p class="text">You Can Make A Difference Right Now <img src="../assets/images/El-Helal-El-Ahmer_icon.png" style="width: 20px; height: 20px;"></p>
            <p style="font-size: 12px;">This Donation will go to El-Helal El-Ahmer in Palestine to help <br>their pepole
                there.
                <br>Your donation can provide critical aid to families in Palestine, <br>offering food, shelter, and
                medical assistance to those in need.
                <br>Every donation, no matter the size, makes a meaningful impact.
                <br>Together, we can stand in solidarity with the people of Palestine <br>and provide vital support during
                times of crisis.
                <br>Join us in fostering peace and resilience in Palestine by contributing <br>to initiatives that promote
                <br>sustainable development, empowerment, and long-term solutions.
            </p>
            <!-- Donate Form -->
            <div class="form">
                <form action="../includes/donation.php" method="POST">
                    <label for="fname">Name:</label><br>
                    <input type="text" id="fname" name="username" autofocus required="required">
                    <input type="radio" id="one_Time" name="your_donate" value="One Time">
                    <label for="one_Time">One Time</label>
                    <input type="radio" id="monthly" name="your_donate" value="Monthly">
                    <label for="monthly">Monthly</label> <br>
                    <label for="Donation">Donation:</label><br>
                    <input type="text" id="Donation" name="donation" autofocus required="required">
                    Pound: <select name="pound" id="pound">
                        <option value="" selected="pound">USD$</option>
                        <option value="" selected="pound">Euro€</option>
                        <option value="" selected="pound">EGP</option>
                    </select>
                    <p></p><br>
                    <p class="credit">Add your Card</p>
                    <label for="CNum">Card Number</label><br>
                    <input type="text" id="CNum" name="cardnumber" autofocus required="required"><br>
                    <label for="Exdate">Expire date</label>
                    <span class="small-space"></span>
                    <label for="Scode">Security Code</label><br>
                    <input type="text" id="Exdate" name="expireDate" autofocus required="required">
                    <input type="text" id="Scode" name="securityCode" autofocus required="required"><br><br>
                    <div class="button-container">
                        <button type="submit" id="donateButton" name="donate">Donate</button>
                    </div>
                </form>
            </div>
        </div>
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
    // Donation.script page
    // Get the donation modal
    var modal = document.getElementById("myModal");
    var btn = document.getElementById("myBtn");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function() {
        modal.style.display = "block";
    }

    span.onclick = function() {
        modal.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    document.getElementById("donateButton").addEventListener("click", function() {
        var nameInput = document.getElementById("fname").value.trim();
        var donateInput = document.getElementById("Donation").value.trim();
        var cardnumberInput = document.getElementById("CNum").value.trim();
        var expiredateInput = document.getElementById("Exdate").value.trim();
        var securitynumberInput = document.getElementById("Scode").value.trim();
        
        if (nameInput === "" && donateInput === "" && cardnumberInput === "" && expiredateInput === "" && securitynumberInput === "") {
            alert('The Inputs is Not Fill');
        } else if (nameInput === "") {
            alert('Please enter your name before donating!');
        } else if (donateInput === "") {
            alert('Please enter your donation before donating!');
        } else if (cardnumberInput === "") {
            alert('Please enter your Card number before donating!');
        } else if (expiredateInput === "") {
            alert('Please enter your Expire Date before donating!');
        } else if (securitynumberInput === "") {
            alert('Please enter your Security number before donating!');
        } else {
            alert(`Thanks, ${nameInput} for your donation! \u{2764}`);
            window.location.href = 'index.html';
        }
    });
</script>