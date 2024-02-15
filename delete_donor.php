<?php
// Include connection.php to connect to the database and any other necessary files
include('connection.php');
session_start();

// Check if the 'id' parameter is set in the POST request
if(isset($_POST['id']) && !empty($_POST['id'])) {
    // Get the 'id' parameter value from the POST request
    $id = $_POST['id'];
    
    // Prepare a DELETE statement to remove the donor record with the specified ID
    $stmt = $db->prepare("DELETE FROM donor_registration WHERE id = ?");
    // Execute the DELETE statement
    $stmt->execute([$id]);

    // Redirect back to the page displaying the donor list after deletion
    header("Location:donor-list.php");
    exit;
} else {
    // If 'id' parameter is not provided in the POST request, redirect back to the donor list page
    header("Location:donor-list.php");
    exit;
}
?>
