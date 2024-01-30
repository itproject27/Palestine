<?php

use Database as GlobalDatabase;

class Database
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "Palestine";


    public function connect()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->db_name);
        if ($conn->connect_error) {
            die("Connection failed" . $conn->connect_error);
        }
        return $conn;
    }

    function count()
    {
        $host = 'localhost';
        $db_name = 'Palestine';
        $username = 'root';
        $password = '';
        $conn = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
        $stmt = $conn->prepare("SELECT COUNT(*) FROM users");

        $stmt->execute();
        $result = $stmt->fetchColumn();

        $conn = null;

        return  $result;
    }

    public function getUsernameById($id)
    {
        $db = new Database;
        $conn = $db->connect();
        if ($id == null) {
            echo 'username';
        } else {
            $result = $conn->query("SELECT username FROM users WHERE id = $id");

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row['username'];
            } else {
                return 'Unknown';
            }
        }

        $conn->close();
    }
    public function getPassById($id)
    {
        $db = new Database;
        $conn = $db->connect();
        if ($id == null) {
            echo 'pass';
        } else {
            $result = $conn->query("SELECT pass FROM users WHERE id = $id");

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                return $row['pass'];
            } else {
                return 'Unknown';
            }
        }

        $conn->close();
    }

    public function news()
    {
        $db = new Database;
        $conn = $db->connect();
        $result = $conn->query("SELECT * FROM news  ORDER BY date DESC");

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
                    </a>
    <?php
            }
        }
    }
}
