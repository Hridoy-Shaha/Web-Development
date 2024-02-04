<?php
$connection = mysqli_connect('localhost', 'root', '');
if (!$connection)
{
    echo '<p> Can not connect now<p>';
    exit();

}

if (!mysqli_select_db($connection, 'Carhouse')){
    exit('Can not choose database.');
}
else
    print 'Connected :)';
?>