<?php 
$this_filename = $_SERVER['PHP_SELF'];
?>
<html>
<body>
<form action="<?php echo $this_filename; ?>" method="post">
Give car info: <br>
Register number:<br>
<input type="text" name="reg" size="10"> <br>
Make: <br>
<input type="text" name="make" size="30"> <br>
Model: <br>
<input type="text" name="model" size="20"> <br>
Power: <br>
<input type="text" name="power" size="20"> <br>
Gearbox type: <br>
<input type="text"  name="gearbox"  size="20"> <br>
Price: <br>
<input type="text"  name="price"  size="20"> <br>
Yearmodel:<br>
<input type="text" name="year" size="5"> <br>
Mileage:<br>
<input type="text" name="miles" size="10"> <br>
Submit:<br>
<input type="submit" value="Submit"> <br> 
Clear:<br>
<input type="reset" value="Clear All"> 
</form> 

<?php
include 'connect_to_carhouse.php';
if (isset($_POST['reg']))
{ $m1 = $_POST['reg']; }
if (isset($_POST['make']))
$m2 = $_POST['make'];

if (isset($_POST['model']))
$m3 = $_POST['model'];

if (isset($_POST['power']))
$m4 = $_POST['power'];

if (isset($_POST['gearbox']))
$m5 = $_POST['gearbox'];

if (isset($_POST['price']))
$m6 = $_POST['price'];

if (isset($_POST['year']))
$m7 = $_POST['year'];

if (isset($_POST['miles']))
$m8 = $_POST['miles'];

settype($m6, "int");settype($m7, "int");settype($m8, "int");

if (isset($_POST['reg']))
{
$sql = 
"INSERT INTO `cars`(`regnr`, `make`,`model`,`power`,`gearbox`,`price`, `yearmodel`,`mileage` ) VALUES ('$m1','$m2','$m3','$m4','$m5',$m6,$m7,$m8)";

if (mysqli_query($connection, $sql)) {
echo '<p>Data added.</p>';
}
else
{
echo '<p>Failed: ';
 // echo $sql; for testing ...
}
}
?>