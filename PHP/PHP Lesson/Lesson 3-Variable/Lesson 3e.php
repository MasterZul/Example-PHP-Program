<!DOCTYPE html>
<html>
<head>
<title> Lesson 3e: PHP Variables Scope: Static</title>
</head>

<body>

<?php

function myTest()
{
static 
$x=0; //static scope variable. Try to remove keyword static "$x=0;" only and see the result
echo $x;
$x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();

echo "<br>";
echo "<br>";
echo "Then, each time the function is called, that variable will still have the information it contained from the last time the function was called.";

echo "<br>";
echo "<br>";
echo "Note: The variable is still local to the function.";
?> 

</body>
</html>