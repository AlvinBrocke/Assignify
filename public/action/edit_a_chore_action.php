<?php

// Start session
session_start();

// Include connection file
include "../settings/connection.php";

if (isset($_POST['editBtn'])) {

    $chore_name = mysqli_real_escape_string($conn, $_POST['chorename']);
    $cid = $_POST['chore_id'];

    // Update query
    $update = "UPDATE chores SET chorename = '$chore_name' WHERE cid = $cid";

    // Perform the update
    $result = mysqli_query($conn, $update);

    // Check if update was successful
    if ($result) {
        // Redirect to admin chore management page
        header("Location: ../admin/admin-choremanagement.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
