<?php
$now = date('H:i'); 

if ($now >= "05:00" && $now < "09:00") {
    echo "Good morning!";
} elseif ($now >= "09:00" && $now < "12:00") {
    echo "Good day!";
} elseif ($now >= "12:00" && $now < "16:00") {
    echo "Good afternoon!";
} elseif ($now >= "16:00" && $now < "21:00") {
    echo "Good evening!";
} else {
    echo "Good night!";
}
?>