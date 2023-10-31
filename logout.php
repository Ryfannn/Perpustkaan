<?php
session_start();
session_destroy();
if($_SESSION['status_logout']!=true){
    header('location: login.php');
}
?>