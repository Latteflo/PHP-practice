<?php

$possible_states = ["health hazard", "filthy", "dirty", "clean", "immaculate"];
$room_filthiness = $possible_states[4]; // Change the index to test different states

if ($room_filthiness == "health hazard") {
    echo "<br>Yuk, Room is a health hazard! Let's clean it up!";
} elseif ($room_filthiness == "filthy") {
    echo "<br>Yuk, Room is filthy : let's clean it up !";
} elseif ($room_filthiness == "dirty") {
    echo "<br>Room is dirty : let's clean it up !";
} elseif ($room_filthiness == "clean") {
    echo "<br>Nothing to do, room is neat.";
} elseif ($room_filthiness == "immaculate") {
    echo "<br>Wow, the room is immaculate!";
} else {
    echo "<br>Invalid room state.";
}
?>