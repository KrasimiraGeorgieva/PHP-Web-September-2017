<?php
declare(strict_types = 1);
$room = [
    'kithen'      => ['width'=> 3,'length'=>2, 'height' => 2.4],
    'living_room' => ['width'=> 6,'length'=>4, 'height' => 2.4],
    'bedroom'     => ['width'=> 5,'length'=>3, 'height' => 2.2],
];
$volumeRoom = function($current_room) : float {
    $current_room = $current_room['width'] * $current_room['length'] * $current_room['height'];
   return $current_room;
    };
print_r (array_map($volumeRoom, $room));