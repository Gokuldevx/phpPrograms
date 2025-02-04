<?php
class Factor{
    function findFactor(){
        $num=(int)readline("Enter number : ");
        for($i=1;$i<=($num/2);$i++){
            if($num%$i==0){
                echo "$i--";
            }
        }
        echo $num;
    }
}
$obj=new Factor();
$obj->findFactor();
?>