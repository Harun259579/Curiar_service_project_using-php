<?php
session_start();

if(!isset($_SESSION['admin']))
{
	header("Location: login.php");
	exit;
}
include 'pages/head.php';
include 'admin.php';
include 'pages/sidebar.php';


$page = $_GET['page'] ?? 'index';
$page_path = basename($page) . ".php";

echo '<div class = "content">';

if(file_exists($page_path))
{
	include $page_path;
}

else
{
	echo "<div class='alert alert-warning'>404-Page Not Found!</div>";
}

echo '</div>';

include "pages/footer.php";

?>