<?php
include 'connection.php';

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $time_out =date("h:i:s"); // Current time
    $date_out = date("Y-m-d"); // Current date

    // Update query to set the time_out and date_out
    $query = "UPDATE records SET time_out = '$time_out', dcreated_out = '$date_out' WHERE id = '$id'";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Visitor signed out successfully');</script>";
        // Redirect back to the main page or visitor list
        header('Location: viewallvisitors.php');
    } else {
        echo "<script>alert('Error signing out visitor: " . mysqli_error($conn) . "');</script>";
    }
} else {
    echo "<script>alert('Invalid request');</script>";
}
?>
