<html>
<body>
<h2>Customer Information</h2>


Buyer's Name: <?php echo $_POST["name"]; ?><br> 

Street Address: <?php echo $_POST["address"];?> <br>

City,State,Zip: <?php echo $_POST["city"];?> <br>

<br>
<table border = "1" width ="60%">

<tr>
    <th>Product Name</th>
    <th>Price</th>		
    <th>Quantity Ordered</th>
	<th> Item Cost</th>
  </tr>
 
 <tr>
    <td>Unpopped Popcorn</td>
    <td>$3.00</td>		 
    <td > <?php echo $_POST["Unquan"]?></td>
	<td> <?php 
	
	   $a = $_POST["Unquan"];

	$total1 = $a * 3;
	
	echo "$".number_format($total1, 2);
	 ?></td>
  </tr>
 
 <tr>
    <td>Caramel Popcorn</td>
    <td>$4.00</td>		
    <td ><?php echo $_POST["Caraquan"]?></td>
 <td> <?php 
	
	   $a = $_POST["Caraquan"];

	$total2 = $a * 4;
	
		echo "$".number_format($total2, 2);
	 ?></td>
 </tr>
  
  <tr>
    <td>Caramel Nur Popcorn</td>
    <td>$5.00 </td>		
    <td  ><?php echo $_POST["Nurquan"]?></td>
  <td> <?php 
	
	   $a = $_POST["Nurquan"];

	$total3 = $a * 5;

		echo "$".number_format($total3, 2);
	
	?></td>
  </tr>
  
   <tr>
    <td>Toffey NutPopcorn</td>
    <td>$5.00 </td>		
    <td  ><?php echo $_POST["Toffquan"]?></td>
  <td> <?php 
	
	   $a = $_POST["Toffquan"];

	   
	$total4 = $a * 6;
	echo "$".number_format($total4, 2);
	
	 ?></td>
  </tr>
</table>

<p>Your total ordered of popcorn item is: <?php 

$a = $_POST["Unquan"];
$b = $_POST["Caraquan"];
$c = $_POST["Nurquan"];
$d = $_POST["Toffquan"];

$total = $a + $b + $c + $d;
echo " " . $total;  
?>
</p>

<p>Your total ordered of popcorn item is: <?php 

echo " " . $_POST["pay"];  
?>
</p>

<p>Your Total Bills is:$ <?php 

$FullTotal = $GLOBALS['total1'] +  $GLOBALS['total2'] +  $GLOBALS['total3'] +  $GLOBALS['total4'] ;  


echo "$".number_format($FullTotal, 2);



?>



</p>

</body>
</html>