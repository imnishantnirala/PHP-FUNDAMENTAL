<?php 
	echo "Welcome To associative arrayas in php"

	$favcol = array(
			'subham' => 'red' ,
			'rohan' => 'green',
			'nishant' => 'white',
			5 => 'Five'
		);
	foreach ($favcol as $key => $value)
	{
		echo "<br> Favorite Color of $key is $value";
	}
?>