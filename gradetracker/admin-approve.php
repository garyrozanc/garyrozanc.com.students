<?php
session_start();
if (!isset($_SESSION['phplogin'])
    || $_SESSION['phplogin'] !== true) {
    header('Location: admin.php');
    exit;
}
?>