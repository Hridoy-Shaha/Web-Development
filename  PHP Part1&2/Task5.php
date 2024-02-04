<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php
require_once('includes/db_connect.php');  
require_once('includes/functions.php');   

$page_id = 1;
$visitor_ip = $_SERVER['REMOTE_ADDR'];  

add_view($conn, $visitor_ip, $page_id);
?>

<!-- header file -->
<?php require_once('includes/header.php'); ?>

<div>
  <?php
  $total_page_views = total_views($conn, $page_id);  
  echo "<strong>Total Views of this Page:</strong> " . $total_page_views;
  ?>
</div>

<!-- footer file -->
<?php require_once('includes/footer.php'); ?>
</body>
</html>