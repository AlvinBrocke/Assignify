<?php
session_start();
function checkLogin()
{
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../login/login_view.php");
        die();
    }
}

function checkAdmin()
{
    if ($_SESSION['role_id'] != null) {
        return $_SESSION['role_id'];
    } else {
        return false;
    }
}