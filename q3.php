<?php
function calculateArea($length,$width)
{
    return $length * $width;
}

$length=20;
$width=10;

$area=calculateArea($length,$width);

echo "The area of the rectangle with length $length and width $width is $area.";

?>
