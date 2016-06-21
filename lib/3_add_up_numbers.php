<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function addUpNumbers($arr) {
  
	return array_sum($arr);
}

// Write your own "tests" below. Refer to the the examples from exercise #1.


echo "\nTesting that sum of numbers equal 30.\n";
if (addUpNumbers([20,8,2]) == 30) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that sum of numbers equal 13.\n";
if (addUpNumbers([3,2,8]) == 13) {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";

?>
