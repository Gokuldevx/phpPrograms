<?php
class Factorial{
    function findFactorial($num){
        $fact=1;
        for($i=1;$i<=$num;$i++){
            $fact=$fact*$i;
        }
        echo "Factorial of $num is $fact";

    }
}
$num=(int)readline("Enter a number : ");
$obj=new Factorial();
$obj->findFactorial($num);

?>