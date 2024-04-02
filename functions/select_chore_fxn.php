<?php
include '../settings/connection.php';

$query = "SELECT * FROM chores";
$result = mysqli_query($conn, $query);

if ($result) {
    $all_chores = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo '<select id="chores" name="chores">';
    foreach ($all_chores as $chore) {
        echo '<option value="' . $chore['cid'] . '">' . $chore['chorename'] . '</option>';
    }
    echo '</select>';
} else {
    echo "Query failed: " . mysqli_error($conn);
}


