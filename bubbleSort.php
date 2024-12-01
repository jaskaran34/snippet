<?php 
function bubbleSort($array) {
    $length = count($array);
    for ($i = 0; $i < $length - 1; $i++) {
        
     for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
               
            }
        }
    }

    return $array;
}


$array = [64, 34, 25, 12, 22, 11, 90];
$sortedArray = bubbleSort($array);
print_r($sortedArray);

?>
