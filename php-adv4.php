<?php

function myfunction($n) {
  return($n ** $n);
}

$numbers = [1, 2, 3, 4, 5];

print_r(array_map("myfunction", $numbers));
?>



<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

$encoded_data =  json_encode($age);
echo $encoded_data;


 var_dump(json_decode($encoded_data));
?>


<?php
$x = 10;
$y = 0;

if($y == 0) {
    throw new Exception("Can not divide by 0");
}else {
    return $x/$y;
}
?>