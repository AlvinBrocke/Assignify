<?php
//Start session
session_start();

// Include the connection file
include '../settings/connection.php';

// Check if login button was clicked
if (!($_SERVER['REQUEST_METHOD'] == 'POST')) {
    header("Location: ../login/login_view.php?error=login_button_not_clicked");
} else {

    // Collect data from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM People WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        header("Location: ../login/login_view.php?error=user_not_registered");
        exit();
    }

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if (!password_verify($password, $row['passwd'])) {
            header("Location: ../login/login_view.php?error=incorrect_password");
            exit();
        } else {
            // Create a session
            $_SESSION['user_id'] = $row['pid'];
            $_SESSION['role_id'] = $row['rid'];
            header("Location: ../view/home.php");
            exit();
        }
    } else {
        header("Location: ../login/login_view.php?error=user_not_registered");
        exit();
    }
}