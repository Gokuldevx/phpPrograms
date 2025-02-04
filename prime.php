<?php
class Prime
{
    function FindPrime($num)
    {
        $flag = 0;
        for ($i = 2; $i <= ($num / 2); $i++) {
            if ($num % $i == 0) {
                $flag = $flag + 1;
            }
        }
        if ($flag == 0) {
            echo "Prime No.";
        } else {
            echo "Not Prime";
        }
    }
}
$num = (int) readline("Enter a number to find prime or not : ");
$obj=new Prime();
$obj->FindPrime($num);
?>