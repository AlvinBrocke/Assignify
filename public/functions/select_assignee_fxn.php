<?php
include '../settings/connection.php';

$query = "SELECT * FROM people";
$result = mysqli_query($conn, $query);

if ($result) {
    $assignees = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo '<select id="assignee-list" name="assignee-list">';
    foreach ($assignees as $person) {
        echo '<option value="' . $person['pid'] . '">' . $person['fname'] . '</option>';
    }
    echo '</select>';
} else {
    echo "Query failed: " . mysqli_error($conn);
}

