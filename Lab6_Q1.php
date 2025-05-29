<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
        }
        td {
            border: 1px solid black;
            padding: 8px;
        }
        td:first-child {
            font-weight: bold;
        }
    </style>
</head>
<body>
<?php
// Declare personal detail variables
$name = "Nur Diyana Binti Baddal";
$matricNo = "CI240099";
$course = "Bachelor of Computer Science";
$year = "Year 1";
$address = "No 6C, Jalan Permatang 6, Kempas Baru";
?>

<table>
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td>Matric Number</td>
        <td><?php echo $matricNo; ?></td>
    </tr>
    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td>Year of Study</td>
        <td><?php echo $year; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>
