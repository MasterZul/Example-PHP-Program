<!DOCTYPE html>
<html>
<head>
<title> Lesson 3f-b: PHP Variables Scope: Functions Parameters Scope</title>
</head>

<body>

<?php

// multiply a value by 10 and return it to the caller
function multiply ($value) {
    $value = $value * 10; 
    return $value;
}

$retval = multiply (10);
Print "Return value is : $retval\n";
?>


</body>
</html>