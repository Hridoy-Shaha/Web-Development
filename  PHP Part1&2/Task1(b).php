<html>
<head>
    <title>1.(b)Answer </title>
</head>
<body>
    <form>
	<button type ="submit" name="submit" value ="submit">Random numbers</button>
	</form>
    <p>Random numbers prints:</p>
    <?php
	if(isset($_GET['submit'])){
	    for( $i=1; $i<=10; $i++ )
	    {
		echo(rand(1,20));
        echo "<br>";
	    }
	}
    ?>
</body>
</html>