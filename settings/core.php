<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Check if the function is already defined
if (!function_exists('checkLogin')) {
    function checkLogin()
    {
        if (!isset($_SESSION['user_id'])) {
            header("Location: ../login/login_view.php");
            exit();
        }
    }
}

// Check if the function is already defined
if (!function_exists('checkRoleId')) {
    function checkRoleId()
    {
        if (isset($_SESSION['role_id'])) {
            return $_SESSION['role_id'];
        } else {
            return null;
        }
    }
}

// Check if the function is already defined
if (!function_exists('checkUserRole')) {
    function checkUserRole()
    {
        $role_id = checkRoleId();
        if (!$role_id) {
            if ($role_id == 1) {
                header("Location: ../admin/admin-home.php");
            } else if ($role_id == 2) {
                // Do something
            } else {
                header("Location: ../view/home.php");
            }
            exit();
        }
    }
}
