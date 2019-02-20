<?php

// Simple For loop counter, set parameter of 25
for ($x = 1; $x <= 25; $x += 1) {

  // Using condition statement
  if ($x % 3 == 0) {        // If remainder of $x divided by 3 equals 0
    $text = "Making...";    // Set $text to contain a string
    echo $text;             // Echo $text to screen
  } else {                  // Otherwise..
    echo $x . "...";        // Echo $x to screen, with a separator
  }

}

 ?>
