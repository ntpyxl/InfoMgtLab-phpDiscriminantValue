<?php

if(isset($_POST['calculateButton'])){
	$a = $_POST['A'];
	$b = $_POST['B'];
	$c = $_POST['C'];
	
	$x = $b * $b;
	$y = 4 * $a * $c;
	$result = $x - $y;
	
	echo "<h2>The value is: " . $result . "</h2>";
}
?>