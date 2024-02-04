<?php
include 'connect_to_carhouse.php';
print "Cars: <br>";
$sql ="SELECT * FROM cars";

$result = mysqli_query($connection, $sql);
print "<TABLE BORDER=1>";
while ( $row = mysqli_fetch_array( $result, MYSQLI_BOTH))
{
    print "<TR><TD>$row[0] </TD><TD>$row[1] </TD><TD>$row[2] </TD><TD>$row[3] </TD><TD>$row[4] </TD><TD>$row[5] </TD><TD>$row[6] </TR></TR>";

}
print "</TABLE>\n";
?>
