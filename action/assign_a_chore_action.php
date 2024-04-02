<?php
require_once "../settings/core.php";
include "../settings/connection.php";

// Check if the user is logged in
checkLogin();

// Check if the chore name is provided and not empty
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Get the chore assignment data from the POST form
    $assignee = $_POST['assignee'];
    $chore = $_POST['chores'];
    $dueDate = $_POST['due-date'];
    $dateAssigned = date('Y-m-d');
    $lastUpdated = date('Y-m-d');
    $whoAssigned = $_SESSION['user_id'];
    $sid = 1;
    $dateCompleted = " ";
    $img = " ";


    // Insert the new chore assignment into the database
    $assign_sql = "INSERT INTO assignment (cid, sid, date_assign, date_due, last_updated, date_completed, img, who_assigned) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($assign_sql);
    $stmt->bind_param("iissssss", $chore, $sid, $dateAssigned, $dueDate, $lastUpdated, $dateCompleted, $img, $whoAssigned);
    $stmt->execute();
    $stmt->close();

    // Retrieve the assignment ID
    $assignmentId = $conn->insert_id;

    // Update the Assigned_people table to link the person with the assignment
    $assign_people_sql = "INSERT INTO Assigned_people (pid, assignmentid) VALUES (?, ?)";
    $stmt = $conn->prepare($assign_people_sql);
    $stmt->bind_param("ii", $whoAssigned, $assignmentId);
    $stmt->execute();
    $stmt->close();

    // Redirect back to the admin assignments page after assigning the chore
    header('Location: ../admin/admin-choreassignments.php');
    exit;
} else {
    header("Location: ../admin/admin-choreassignments.php?msg=Sorry could not assign");
    exit;
}
