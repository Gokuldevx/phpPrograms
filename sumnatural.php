<?php
$limit=(int)readline("Enter limit : ");
$sum=0;
for ($i=1;$i<=$limit;$i++){
    $sum=$sum+$i;
}
echo "Sum is $sum";
?>