<!DOCTYPE html>
<html>
<head>
    <title> Calculate Area</title>
</head>
<body>

<?php
// Function to calculate the area of a rectangle
function calculateArea($length, $width) {
    return $length * $width;
}

// Call the function with sample values
$length = 2;
$width = 4;
$area = calculateArea($length, $width);

// Display the result
echo "The area of a rectangle with a width of $width and $length is $area.";
?>

</body>
</html>
