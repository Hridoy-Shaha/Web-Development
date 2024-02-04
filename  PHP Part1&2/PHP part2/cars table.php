<?php
include 'connect_to_carhouse.php';

$sql = "CREATE TABLE cars(
    regnr varchar(10),
    make varchar(30),
    model varchar(30),
    power varchar(30),
    gearbox varchar(30),
    price int,
    yearmodel int,
    mileage int
);";

if (mysqli_query($connection, $sql)){
    echo '<p>Table created.</p>';

}
else
{
echo '<p>Failed: check the sql:';
echo $sql;
}
?>