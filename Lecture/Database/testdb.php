<!DOCTYPE html>
<html>
<head>
<!-- WebIS TestDB Copyright 2014 by Timothy Middelkoop License Apache 2.0 -->
<meta charset="UTF-8">
<link href="testdb.css" rel="stylesheet">
<title>Database Test</title>
</head>
<body>
<h1>Database Test</h1>
<?php echo "Hello 世界"; ?>
<?php
$db=new mysqli('127.0.0.1','root','webis','database');
$stmt=$db->prepare('SELECT k,v FROM Test WHERE k>=?');
$id=1;
$stmt->bind_param("d",$id);
if($stmt->execute()==FALSE){
   echo "<p>Database Error ";
   echo $db->error;
}
$stmt->bind_result($id,$value);
echo '<table border="1">';
while($stmt->fetch()==TRUE){
   echo "<tr><td>$id</td><td>$value</td></tr>";
}
echo '</table>';
?>
</body>
</html>
