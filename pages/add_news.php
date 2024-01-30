<?php
session_start();
include_once "../control/connection.php";

if (isset($_POST["submit"]) && isset($_POST["title"]) && isset($_POST["caption"])) {
    $status = 'error';
    if (!empty($_FILES["image"]["name"]) && !empty($_POST["title"]) && !empty($_POST["caption"])) {
        $db = new Database;
        $conn = $db->connect();
        $title = $_POST["title"];
        $caption = $_POST["caption"];


        $fileName = basename($_FILES["image"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'webp');
        if (in_array($fileType, $allowTypes)) {
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));


            $insert = $conn->query("INSERT into news (image , caption , date , title   )
                                    VALUES ('$imgContent' , '$caption ', NOW(), '$title ' ) ");

            if ($insert) {
                $status = 'success';
                $statusMsg = "File uploaded successfully.";
                header("location:journalist.php");
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.';
        }
    } else {
        $statusMsg = 'Please select an image file to upload.';
    }
}
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
        <a href="index.html" class="logo">
            <div class="logod">
                <img src="palestine.svg" class="logoP" width="50px" height="50px">
                <span class="logot">Palastine</span>
            </div>
        </a>
        <nav class="navigation">
            <a href="#login"><i class="fa-solid fa-right-to-bracket"></i></a>
            <a href="#sign_up"><i class="fa-solid fa-user-plus"></i></a>
            <a href="#contact"><i class="fa-solid fa-headset"></i></a>
        </nav>
    </header>
    <section class="awarness">
        <br>
        <div class="cards">
            <div class="card">
                <a href="#">
                    <div class="image">
                        <img src="../assets/images/images.jpeg" alt="">

                    </div>
                    <div class="info">
                        <form action="add_news.php" method="post" enctype="multipart/form-data">
                            <div class="form_group">
                                <input type="file" name="image" class="form_control" placeholder="file.." required />
                            </div>
                            <div class="form_group">
                                <input type="text" class="form-control" name="title" placeholder="type title.." required />
                            </div>
                            <div class="form_group">
                                <input type="text" class="form-control" name="caption" placeholder="type caption.." required />
                            </div>

                            <button type="submit" name="submit">Add News
                            </button>
                        </form>
                    </div>
                </a>
            </div>

            <!-- <div class="card">
                <a href="add_news.php">
                    <div class="icon">
                        <i class="fa-solid fa-newspaper"></i>
                    </div>
                    <div class="info">
                        <form action="create_post.php" method="post" enctype="multipart/form-data" class="info">
                            <div class="form_group">
                                <input type="file" name="image" class="form_control" placeholder="file.." required />
                            </div>
                            <div class="form_group">
                                <input type="text" class="form-control" name="caption" placeholder="type caption.." required />
                            </div>

                            <div class="form_group">
                                <input type="submit" name="submit" value="Post" class="upload_btn">
                            </div>
                        </form>
                    </div>

            </div> -->

        </div>
    </section>
</body>

</html>