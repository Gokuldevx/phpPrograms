<?php
$limit=(int)readline("Enter limit : ");
$sum=0;
for($i=1;$i<=$limit;$i++){
    if($i%2==1){
        $sum=$sum+$i;
    }
}
echo "The sum is $sum";
?>