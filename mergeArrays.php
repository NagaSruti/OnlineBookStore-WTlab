<?php
$array1 = array(20, 55, 19, 43, 78);
$array2 = array(98, 34, 12, 61, 120, 7);
$mergeArray = array_merge($array1, $array2);
echo "First array : ";
$len = count($array1);
for($i = 0; $i < $len; $i++){
    echo $array1[$i]." ";
}
echo "</br>";
echo "</br>";

echo "Second array: ";
$len = count($array2);
for($i = 0; $i < $len; $i++){
    echo $array2[$i]." ";
}
echo "</br>";
echo "</br>";

echo "Merged array: ";
$len = count($mergeArray);
for($i = 0; $i < $len; $i++){
    echo $mergeArray[$i]." ";
}
echo "</br>";
echo "</br>";

rsort($mergeArray);
$len = count($mergeArray);

echo "Sorted merged list: ";
for($i = 0; $i < $len; $i++){
    echo $mergeArray[$i]." ";
}
echo "</br>";

?>
