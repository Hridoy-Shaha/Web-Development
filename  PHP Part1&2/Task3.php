<html>
<head>
    <title>3.Answer</title>
</head>
<body>
<?php
$ip_add = $_SERVER['REMOTE_ADDR'];
echo "Your IP address is - ".$ip_add;

  
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
echo $browserAgent;


echo '<script type="text/javascript">
var x = new Date()
document.write(x)
</script>';
?>
</body>
</html>