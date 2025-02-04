<?php 
$num = (int)readline("Enter number for multiplication table : ");
for($i=1;$i<=10;$i++){
    $result = $i*$num;
    echo "$num x $i = $result\n";
}
?>