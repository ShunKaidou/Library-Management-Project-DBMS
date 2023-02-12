<?php
session_start();


if(!$_SESSION['anything'])
{
    header('location:login.php');
}
?>

<?php 
	include('dashboard.php');
?>

