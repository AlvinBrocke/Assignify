<?php

include '../settings/connection.php';

$query = "SELECT * FROM family_name";
$result = mysqli_query($conn, $query);

if ($result) {
    $family_roles = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo '<select name="family-role" id="family-role">';
    foreach ($family_roles as $role) {
        echo '<option value="' . $role['fid'] . '">' . $role['fam_name'] . '</option>';
    }
    echo '</select>';
} else {
    echo "Query failed: " . mysqli_error($conn);
}

