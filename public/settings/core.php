<?php
session_start();

function checkLogin()
{
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../login/login_view.php");
        die();
    }
}
checkLogin();