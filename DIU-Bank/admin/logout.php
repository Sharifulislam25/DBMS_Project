<?php
require_once '../config/config.php';

// Logout admin
Admin::logout();

// Redirect to admin login page with success message
$_SESSION['logout_success'] = 'You have been successfully logged out.';
redirect('admin/login.php');
?>