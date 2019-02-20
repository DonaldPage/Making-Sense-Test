<?php
// Extending the limit of the counter to 100
for ($x = 1; $x <= 100; $x += 1) {
	// Replacing if with a switch for multiple outcomes
	switch ($x) {										// Condition is the value of $x
		case $x % 15 == 0:							// If remainder of $x divided by 3 equals 0
			// Run this code
			$text = "Making Sense" . "<br>";		// Set $text to contain a string
			break;

		case $x % 5 == 0:							// If remainder of $x divided by 5 equals 0
			// Run this code
			$text = "Making" . "<br>";	// Set $text to contain a string
			break;

		case $x % 3 == 0:						// If remainder of $x divided by 15 equals 0
			// Run this code
			$text = "Sense" . "<br>";		// Set $text to contain a string
			break;

		default:										// Default setting if no conditions are true
			$text = $x . "<br>";			// Set $text to the value of $x
	}
	echo $text;										// each loop, echo $text to screen
}
 ?>
