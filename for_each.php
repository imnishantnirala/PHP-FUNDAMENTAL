<?php
echo "Foreach Loops";

$arr = array( "banana", "apples", "harpic", "bread" );

// for($i=0; $i<count($arr); $i++){
// 	echo $arr[$i];
// 	echo "<br>";
// }

// Batter Way to do this - foreach loops
foreach ($arr as $value) {
	echo "$value <br>";
}
?>