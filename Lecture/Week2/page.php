<?php 
require_once 'calc.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>WebIS</title>
</head>
<body>
<h1>Hello: WebIS</h1>
<form action="page.php" method="GET" >
<input type="text" name="a">
+
<input type="text" name="b">
<input type="submit" name="action" value="Enter">

</form>

<?php 
if(isset($_REQUEST['action'])){
?>
    <p>Answer: <?php echo Calculator::add($_REQUEST['a'],$_REQUEST['b']); ?></p>
<?php 
}
?>
</body>
</html>