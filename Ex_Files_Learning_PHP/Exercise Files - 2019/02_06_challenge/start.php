<?php
$min = 1; 
$max = 50;
$guess = 4; //Change this value to test!
$num = 16; // Change this value to test!

// If you really want to go nuts, try this:
// $num = rand($min, $max);

$result = match( true ) {
    $guess < $min || $guess > $max => "Your guess is out of range. Please try again.",
    $guess < $num => "Too low! Try again.",
    $guess > $num => "Too high! Try again.",
    $guess === $num => "Congratulations! You guessed the number!",
    default => "Something went wrong. Please try again."
};



echo "\n > $result \n \n";