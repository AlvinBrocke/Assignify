<?php
include "../action/get_all_chores_action.php";

$var_data = getAllChores();

// Using the variable $var_data, create the display table rows and elements
if (!empty($var_data)) {
    foreach ($var_data as $chore) {
        echo "<tr>";
        echo "<td>" . $chore['chorename'] . "</td>";
        echo "<td>";
        echo "<a href='../action/edit_chore_view.php?cid=" . $chore['cid'] . "'><button class='editBtn'><i class='fas fa-pen'></i></button></a>"; // Edit icon
        echo "<a href='../action/delete_chore_action.php?cid=" . $chore['cid'] . "'><button class='deleteBtn'><i class='fas fa-trash'></i></button></a>"; // Delete icon
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='2'>No chores found.</td></tr>";
}


