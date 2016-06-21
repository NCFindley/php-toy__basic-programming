<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function filterNumbers($arr) {
  $newarr = array();
  foreach ($arr as $num){
  	if ($num < 10){
  		array_push($newarr, $num);
  	}
  }
  return $newarr;
}

// Write your own "tests" below. Refer to the the examples from exercise #1.

echo "\nTesting should return 8,2.\n";
if (filterNumbers([20,8,2]) == [8,2]) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting should return 3,2,10.\n";
if (filterNumbers([3,2,10,12,15]) == [3,2]) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";
?>