<html>
<body>

 <!-- to retrieve the data keyin in textbox name and display it using $_POST --> 
Welcome <?php echo $_POST["name"]; ?><br> 

<!-- to retrieve the data keyin in textbox email and display it --> 
Your email address is: <?php echo $_POST["email"];?> 

<?php 
$Fname = $_POST["num1"];
$Lname = $_POST["num2"];


$Total = $Fname*$Lname;
echo"<br>";
echo "The Total: $Total";

?>
<!-- try change the $_POST[] to $_GET[], and see the address bar browser -->
</body>
</html>