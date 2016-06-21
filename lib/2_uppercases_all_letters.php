<?php 

// Modify this function to get its tests passing.
// 
// Remember: Don't change the name of the function. Just modify its body.
// 
// Run `bin/check` from the command line to execute the automated tests.

function uppercasesAllLetters($str) {
  return strtoupper($str);
}

// Write your own "tests" below. Refer to the the examples from exercise #1.
echo "\nTesting that hello is upppercased. Should return HELLO.\n";
if (uppercasesAllLetters("hello") == "HELLO") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\nTesting that CAPS FOREVER is still uppercased. Should return CAPS FOREVER.\n";
if (uppercasesAllLetters("CAPS FOREVER") == "CAPS FOREVER") {
  echo "Success!";
}
else{
  echo "Failed!";
}
echo "\n-------------------------------------------------------------------\n";

echo "\n###################################################################\n";
echo "Tests complete.\n";
?>
