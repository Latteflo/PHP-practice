<?php

//  if statement
$age = 25;

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are not an adult.";
}

echo "\n";

//  if-else if-else statement
$score = 85;

if ($score >= 90) {
    echo "You got an A.";
} elseif ($score >= 80) {
    echo "You got a B.";
} elseif ($score >= 70) {
    echo "You got a C.";
} else {
    echo "You need to improve your score.";
}

echo "\n";

//  switch statement
$day = "Monday";

switch ($day) {
    case "Monday":
        echo "It's the beginning of the week.";
        break;
    case "Friday":
        echo "It's the end of the week.";
        break;
    default:
        echo "It's a regular day.";
        break;
}

?>