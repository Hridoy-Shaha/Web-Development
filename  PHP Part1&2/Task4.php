
<html>
    <head>
	<title>4.Answer</title>
	</head>
	<body>
	<form>
    <button type ="submit" name="submit" value ="submit">Click here </button> 
	</form>
	
	<?php
	if(isset($_GET['submit'])){
		echo "<table border ='1' width='500' cellspacing ='0'>";
	        echo "<tr>";
			        echo "<td>Helsinki</td>";
					echo "<td>Oulu</td>";
					echo "<td>Lahti</td>";
	        echo "</tr>";
			echo "<tr>";
			       echo "<td>500000</td>";
				   echo "<td>90000</td>";
				   echo "<td>80000</td>";
		    echo "</tr>";
	    echo "</table>";
	}
	?>
	</body>
</html>
