<html>
<head>
<title>Lesson 7c:Loop Through an Associative Array</title>
</head>

<body>

<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

foreach($age as $x=>$x_value) //$x refer to Associative Array index, e.g "Peter"
							 //$x_value refer value of Associative Array index
{
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
}
?>

</body>
</html>