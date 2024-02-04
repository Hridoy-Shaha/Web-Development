<!DOCTYPE html>

<html>
 <head>
 <title>2.</title>
 <meta charset="utf-8">

 </head>
 <body>
 
 <form action="" method="post">
<input type="text" name="n"  value=""  palceholder="enter no"> <br>
<input type="text" name="n2"  value=""  palceholder="enter no"> <br>
<input type="submit" name="a"  value=" ADD + ">
<input type="submit" name="m"  value=" MUL * ">
<input type="submit" name="d"  value=" DIV / ">
<input type="submit" name="s"  value=" SUB - ">

</form>

<?php
//Addition
if(isset($_POST['a'])) //a is a add button name
{
    $n = $_POST['n']; //textbox 1
    $n2 = $_POST['n2']; //textbox 2
    $add = $n+$n2; //addition logic here
    echo "Addition is  ".$add; //calculate 
}
//Multiplication
if(isset($_POST['m'])) //m is a MUL button name
{
    $n = $_POST['n']; //textbox 1
    $n2 = $_POST['n2']; //textbox 2
    $m = $n*$n2; //Multiplication logic here
    echo "Multiplication is ".$m; //calculate 
}
//Division
if(isset($_POST['d'])) //d is a DIV button name
{
    $n = $_POST['n']; //textbox 1
    $n2 = $_POST['n2']; //textbox 2
    $d = $n/$n2; //Division logic here
    echo "Divide is ".$d; //calculate 
}
//Substraction
if(isset($_POST['s'])) //s is a substraction button name
{
    $n = $_POST['n']; //textbox 1
    $n2 = $_POST['n2']; //textbox 2
    $s = $n-$n2; //addition logic here
    echo "Substraction is ".$s; //calculate 
}
?>
 
 </body>
</html>