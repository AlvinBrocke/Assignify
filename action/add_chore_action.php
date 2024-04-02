<?php
include "../settings/core.php";


// Check if the user is logged in
checkLogin();

// Check if the chore name is provided and not empty
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get the chore name from the POST data
    $choreName = $_POST['chore-name'];

    // Prepare and execute the SQL query to insert the chore into the database
    $chore_sql = "INSERT INTO chores (chorename) VALUES (?)";
    $stmt = $conn->prepare($chore_sql);
    $stmt->bind_param("s", $choreName);

    if ($stmt->execute()) {
        // Redirect back to the admin home page after adding the chore
        header('Location: ../admin/admin-choremanagement.php');
        exit;
    } else {
        echo "Error with SQL query" . mysqli_error($conn);
        exit;
    }
}
