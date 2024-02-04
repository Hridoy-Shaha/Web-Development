 
  <?php
echo abs(-5);
echo"<br>";
echo "abs() function can find positive value of a number";
echo "<br>";

?>

<?php
echo ceil(3.5);
echo"<br>";
echo "ceil() function can find round number up to the nearest integer";
echo "<br>";

?>



<?php
echo floor(9.99);
echo"<br>";
echo "floor() function can find round number down to the nearest integer";
echo "<br>";

?>
<?php
echo sqrt(25);
echo"<br>";
echo "sqrt() function can return the square root of a number";
echo "<br>";

?>

<?php
echo rand(1,100);
echo"<br>";
echo "rand(1,100) function can generates a random integer";
echo "<br>";
echo "<br>";

?>

<?php
   $num = cal_days_in_month(CAL_GREGORIAN, 1, 20016);
   echo "There was $num days in Jan 20016";
   echo "<br>";
   echo "<br>";
?> 

<?php
   print date("m/d/y G.i:s<br>", time());
   echo "<br>";
   print "Today is ";
   print date("j of F Y, \a\\t g.i a", time());
   echo "<br>";
   echo "<br>";
?> 

<?php
         /* First method to create array. */
         $numbers = array( 1, 2, 3, 4, 5);
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
         
         /* Second method to create array. */
         $numbers[0] = "one";
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
         echo "<br>";
         echo "<br>";
      ?>

<?php
         /* First method to associate create array. */
         $salaries = array("Hridoy" => 4000, "Pranto" => 3000, "Bapi" => 2000);
         
         echo "Salary of Hridoy is ". $salaries['Hridoy'] . "<br />";
         echo "Salary of Pranto is ".  $salaries['Pranto']. "<br />";
         echo "Salary of Bapi is ".  $salaries['Bapi']. "<br />";
         
         /* Second method to create array. */
         $salaries['Hridoy'] = "high";
         $salaries['Pranto'] = "medium";
         $salaries['Bapi'] = "low";
         
         echo "Salary of Hridoy is ". $salaries['Hridoy'] . "<br />";
         echo "Salary of Pranto is ".  $salaries['Pranto']. "<br />";
         echo "Salary of Bapi is ".  $salaries['Bapi']. "<br />";

         echo "<br>";
         echo "<br>";
      ?>

<?php
         $marks = array( 
            "Hridoy" => array (
               "physics" => 45,
               "Biology" => 40,	
               "chemistry" => 35,
            ),
            
            "Pranto" => array (
               "physics" => 60,
               "Biology" => 45,
               "chemistry" => 56,
            ),
            
            "Bapi" => array (
               "physics" => 33,
               "Biology" => 66,
               "chemistry" => 40,
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Hridoy got mark in physics : " ;
         echo $marks['Hridoy']['physics'] . "<br />"; 
         
         echo "Marks for Pranto in Biology : ";
         echo $marks['Pranto']['Biology'] . "<br />"; 
         
         echo "Marks for Bapi in chemistry : " ;
         echo $marks['Bapi']['chemistry'] . "<br />"; 
      ?>
      