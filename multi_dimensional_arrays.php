<?php 
	echo "2D Multi-Dimensional Arrays"
	$multidim = array(
					array(2,5,7,8),
					array(1,2,3,1),
					array(4,5,0,1)
			);
	// echo $multidim[0][0];
	for($i=0; $i<count($multidim); $i++){

		for($j=0; $j<count($multidim[$i]); $j++){
			echo $multidim[$i][$j];
			echo " ";
		}
		echo "<br>";
		// echo var_dump($multidim[$i]);
	}

	// The count() function counts elements in an array, or properties in an object. It returns the number of elements in an array.

	// The var_dump() function is used to dump information about a variable. This function displays structured information such as type and value of the given variable. Arrays and objects are explored recursively with values indented to show structure.
?>

<?php
	$lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
	echo count($lecturers);

// Count function The count function is used to count the number of elements that an php array contains. The code below shows the implementation.

// Output 3.
?>


<?php
	$lecturers = array("Mr. Jones", "Mr. Banda", "Mrs. Smith");
	echo is_array($lecturers);

	// The is_array function is used to determine if a variable is an array or not. Let’s now look at an example that implements the is_array functions.

	// Output 1.
?>

<?php
	$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");
		sort($persons);
	print_r($persons);

	// This function is used to sort arrays by the values.
	//Output Array ( [0] => Female [1] => Female [2] => Male )
?>

<?php
	$persons = array("Mary" => "Female", "John" => "Male", "Mirriam" => "Female");

	ksort($persons);
	
	print_r($persons);

	// This function is used to sort the array using the key. The following example illustrates its usage.

	// Output Array ( [John] => Male [Mary] => Female [Mirriam] => Female )
?>
