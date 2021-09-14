<?php
// isset() function
$num = '0';
 
if( isset( $num ) ) {
    print_r(" $num is set with isset function <br>");
}
// Declare an empty array
$array = array();
   
// Use isset function
echo isset($array['geeks']) ?
'array is set.' :  'array is not set.';
?>

<!-- The isset() function is an inbuilt function in PHP which checks whether a variable is set and is not NULL. This function also checks if a declared variable, array or array key has null value, if it does, isset() returns false, it returns true in all other possible cases.

 -->