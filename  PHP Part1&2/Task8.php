<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dictionary</title>
<style media="screen">
   form{

       margin-left: 500px;
}
label{
    font-weight: bold;
    font-size: 18px;
}
input[type=text]{
    width: 350px;
    padding: 10px;
    font-size: 16px;
}
input[type=submit]{
    font-size: 17px;
    font-weight: bold;
    margin-left: 120px;
    padding: 6px;
}
</style>
</head>
<body>

<form class=""   action="insert.php"  method="post">
<h1> English-Finnish Dictionary</h1>
<label for=""></label><br>
<input type="text"  name="word"  value=""   placeholder="Enter word" required><br><br>

<label for="">Meaning</label><br>
<input type="text"  name="meaning"  value=""  placeholder="" required><br><br>
<input type="submit" name="OK"  value="Ok">

</form>
<?php

 include 'db.php';
 if (isset($_post['insert'])) {

    // code...

    $word=$_POST['word'];
    $meaning=$_POST['meaning'];

    $sql="INSERT INTO dictionary(Word,Meaning) values('$word','$meaning')";
    $query=mysql_query($conn,$sql);

 }
?>
</body>
</html>

