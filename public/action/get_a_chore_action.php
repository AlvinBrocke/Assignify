<?php

include "../settings/connection.php";

//takes one parameter
function getAChore($id)
{
    global $conn;

    // query to select one chore based on id
    $query = "SELECT * FROM Chores WHERE cid = '$id'";
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);

    // Checking if execution worked
    if ($resultCheck > 0) {
        // Fetch a row from the result set
        $row = mysqli_fetch_assoc($result);

        // Return the row
        return $row;
    }
}