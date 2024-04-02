<?php
include "../settings/connection.php";
include "../settings/core.php";

// Check if the user is logged in before calling any functions that depend on $_SESSION['user_id']
checkLogin();

// Function 1: Get all assignments
function getAllAssignments()
{
    global $conn;

    // Write the SELECT query
    $sql = "SELECT A.*, C.chorename, P.fname AS assigned_by_name, S.sname AS status_name
    FROM Assignment A
    INNER JOIN Chores C ON A.cid = C.cid
    INNER JOIN People P ON A.who_assigned = P.pid
    INNER JOIN Status S ON A.sid = S.sid";
    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if execution was successful
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $assignments = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $assignments; // Return the result variable
        } else {
            return [];
        }
    } else {
        echo "Error: " . mysqli_error($conn);
        return false;
    }
}



// Function 2: Get all in-progress assignments
function getAllInProgressAssignments()
{
    global $conn;
    $loggedInUserID = $_SESSION['user_id'];
    $sql = "SELECT A.*, C.chorename, P.fname AS assigned_to
            FROM Assignment AS A
            JOIN Assigned_people AS AP ON A.assignmentid = AP.assignmentid
            JOIN Chores AS C ON A.cid = C.cid
            JOIN People AS P ON AP.pid = P.pid
            WHERE AP.pid = '$loggedInUserID' AND A.sid = 2
            ORDER BY A.assignmentid DESC
            LIMIT 3";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $assignmentsInProgress = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $assignmentsInProgress;
    } else {
        echo "Error: " . mysqli_error($conn);
        return false;
    }
}

// Function 3: Get all incomplete assignments
function getAllIncompleteAssignments()
{
    global $conn;
    $loggedInUserID = $_SESSION['user_id'];

    $sql = "SELECT A.*
            FROM Assignment AS A
            JOIN Assigned_people AS AP ON A.assignmentid = AP.assignmentid
            WHERE A.sid = 1
            AND AP.pid = '$loggedInUserID'
            AND A.date_due < CURDATE()";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $incompleteAssignments = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $incompleteAssignments;
    } else {
        echo "Error: " . mysqli_error($conn);
        return false;
    }
}

// Function 4: Get all completed assignments
function getAllCompletedAssignments()
{
    global $conn;
    $loggedInUserID = $_SESSION['user_id'];

    $sql = "SELECT A.*
            FROM Assignment AS A
            JOIN Assigned_people AS AP ON A.assignmentid = AP.assignmentid
            WHERE A.sid = 3
            AND AP.pid = '$loggedInUserID'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $completedAssignments = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $completedAssignments;
    } else {
        echo "Error: " . mysqli_error($conn);
        return false;
    }
}

// Function 5: Get all recent assignmentsfunction getAllCompletedAssignments()
function getAllRecentAssignments()
{
    global $conn;
    $loggedInUserID = $_SESSION['user_id'];

    $sql = "SELECT A.*, C.chorename, S.sname, P.fname AS assigned_to
    FROM Assignment AS A
    JOIN Assigned_people AS AP ON A.assignmentid = AP.assignmentid
    JOIN Chores AS C ON A.cid = C.cid
    JOIN Status AS S ON A.sid = S.sid
    JOIN People AS P ON AP.pid = P.pid
    WHERE AP.pid = '$loggedInUserID'
    ORDER BY A.assignmentid DESC
    LIMIT 3";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $recentAssignments = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $recentAssignments;
    } else {
        echo "Error: " . mysqli_error($conn);
        return false;
    }
}
