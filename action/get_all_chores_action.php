<?php
// Include connection
include "../settings/connection.php";

function getAllChores()
{
    global $conn;

    $query = "SELECT * FROM chores";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if execution worked
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Check if any record was returned
    if (mysqli_num_rows($result) > 0) {
        $chores = mysqli_fetch_all($result, MYSQLI_ASSOC);

        return $chores;
    } else {
        // If no records were returned, return an empty array
        return [];
    }
}
