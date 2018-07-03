<!DOCTYPE html>
<html>
<head>
<title> Lesson 3c: PHP Variables Scope: Global</title>
</head>

<body>

<?php
$x=5; //global scope
$y=10; //global scope

function myTest()
{
global $x,$y; //To access a global variable from within a function, use the global keyword. 
$x=$x+$y;
}

myTest(); // run function
echo $x; // output the new value for variable $y
?>

</body>
</html>