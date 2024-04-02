<?php
include "../settings/connection.php";

// Check if there is a GET request
if (isset($_GET['cid'])) {
    // Retrieve the id from the GET URL and store it in a variable
    $cid = $_GET['cid'];
    echo $cid;
    // // Delete query using the id variable
    $query = "DELETE FROM chores WHERE cid = $cid";
    $result = mysqli_query($conn, $query);

    // Execute the query using the connection
    if ($result) {
        // If execution is successful, redirect to chore display page
        echo "Chore deleted successfully";
        header("Location: ../admin/admin-choremanagement.php");
    } else {
        // If execution fails, display an error message
        echo "Error deleting chore: " . mysqli_error($conn);
    }
} else {
    // If there is no GET request, redirect to chore display page
    header("Location: ../admin/admin-choremanagement.php?msg=no");
    exit();
}


