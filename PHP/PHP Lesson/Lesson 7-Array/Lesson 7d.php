<html>
<head>
<title>Lesson 7d:associate array</title>
</head>
<body>

<?php
// First method to associate create array.
$age=array(
		   "Peter"=>"35", //assign string or keyname as array index
		   "Ben"=>"37",
		   "Joe"=>"43"
		   );
// access to associate array with string index or keyname.
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br />";

echo "Ben is " . $age['Ben'] . " years old.";
echo "<br />";

echo "Joe is " . $age['Joe'] . " years old.";
echo "<br />";


// second method to associate create array.
$age['Peter']="35";
$age['Ben']="37";
$age['Joe']="43";
		   
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br />";

echo "Ben is " . $age['Ben'] . " years old.";
echo "<br />";

echo "Joe is " . $age['Joe'] . " years old.";
?>

</body>
</html>