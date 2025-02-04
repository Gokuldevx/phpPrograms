<?php 
class Fibo{
    function FindFibo($num){
        $a=0;
        $b=1;
        echo "$a\n$b\n";
        for($i=2;$i<$num;$i++){
            $c=$a+$b;
            $a=$b;
            $b=$c;
            echo "$c\n";
        }
    }
}
$num=(int)readline("Enter number : ");
$obj=new Fibo();
$obj->FindFibo($num);
?>