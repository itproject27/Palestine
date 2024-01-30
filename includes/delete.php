<?php
// Check if the form is submitted and the ID is provided
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $idToDelete = $_POST['id'];

    // Establish database connection
    include_once '../control/connection.php';
    $db = new Database;
    $conn = $db->connect();

    // Formulate the SQL query
    $sql = "DELETE FROM users WHERE id = $idToDelete";
    header("Location: ../pages/admin.php");

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully.";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
