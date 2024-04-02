<?php
include '../settings/connection.php';

// Check if assignment ID is provided in the URL parameter
if (isset($_GET['assignmentid'])) {
    $assignmentId = $_GET['assignmentid'];

    // Write the DELETE query using the assignment ID
    $sql = "DELETE FROM Assignment WHERE assignmentid = $assignmentId";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Redirect to assignment display page if execution is successful
        header("Location: ../admin/admin-choreassignments.php?msg=assignment-delete-successful");
        exit;
    } else {
        header("Location: ../admin/admin-choreassignments.php?msg=assignment-delete-unsuccessful");
        exit;
    }
} else {
    // Redirect to assignment display page if assignment ID is not provided
    header("Location: ../admin/admin-choreassignments.php?msg=no-assignment-ID-provided");
    exit;
}