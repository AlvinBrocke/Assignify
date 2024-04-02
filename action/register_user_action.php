<?php
include '../settings/connection.php';

// Handle Registering of users
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Collecting data from the form
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $familyRole = $_POST['family-role'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmPassword'];

    //Checks
    // if (empty($firstName) || empty($lastName) || empty($gender) || empty($dob) || empty($familyRole) || empty($phoneNumber) || empty($email) || empty($password) || empty($confirmpassword)) {
    //     header('Location: ../login/register_view.php?error=empty_fields');
    //     exit();
    // }

    // if ($password !== $confirmPassword) {
    //     header('Location: ../login/register_view.php?error=password_mismatch');
    //     exit();
    // }

    // Hash Password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $rid = 3;
    $people_sql = "INSERT INTO people (rid, fid, fname, lname, gender, dob, tel, email, passwd) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($people_sql);
    $stmt->bind_param("isssissss", $rid, $familyRole, $firstName, $lastName, $gender, $dob, $phoneNumber, $email, $hashedPassword);

    if ($stmt->execute()) {
        header('Location: ../login/login_view.php');
        exit;
    } else {
        echo "Error with SQL query" . mysqli_error($conn);
        exit;
    }
}