<?php

include "../settings/connection.php";

function getAChore($cid)
{
    global $conn;

    $query = "SELECT * FROM chores WHERE cid = $cid";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if execution worked
    if ($result) {
        echo "Query executed successfully";

    } else {
        die("Query failed: " . mysqli_error($conn));
    }

    // Check if any record was returned
    if (mysqli_num_rows($result) > 0) {
        $chore = mysqli_fetch_assoc($result);

        return $chore;
    } else {
        // If no records were returned, return an empty array
        echo "No records found";
    }
}