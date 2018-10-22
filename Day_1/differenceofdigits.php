<?php
class DifferenceOfDigits 
{
    function getDifferenceOfDigits($num) {
        if($num > 10 && $num < 99) {
            $second = $num % 10;
            $num = $num / 10;
            $first = floor($num);
            return $first-$second;
        }
        else if($num < 0) {
            return -1;
        }
        else if($num > 99) {
            return -2;
        }
        else
            return -3;
    }
}
$obj = new DifferenceOfDigits();
echo $obj->getDifferenceOfDigits(54);
?>
