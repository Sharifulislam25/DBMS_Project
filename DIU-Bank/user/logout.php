<?php
require_once '../config/config.php';

// Logout user
User::logout();

// Redirect to login page with success message
$_SESSION['logout_success'] = 'You have been successfully logged out.';
redirect('login.php');
?>