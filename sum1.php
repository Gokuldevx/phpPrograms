<!doctype html>
<html>
<body>
<form action="" method="post">
<input type="text" name="num1" placeholder="Enter num1"><br/><br/>
<input type="text" name="num2" placeholder="Enter num2"><br/><br/>
<input type="submit" name="submit" value="Calculate Sum"><br/><br/>
</form>

<?php
if(isset($_POST['submit'])){
$num1=$_POST['num1'];
$num2=$_POST['num2'];
$sum=$num1+$num2;
echo "Sum is ".$sum;
}
?>
</body>
</html>