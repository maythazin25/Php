<?php
$hamburger = 4.95;
$milkshake = 1.95;
$cola = 0.85;
$tax = 0.075;
$tip = 0.16;

$subtotal = ($hamburger * 2) + $milkshake + $cola ;
$totalTax = $subtotal * $tax;
$Tip = $subtotal * $tip;
$total = $subtotal + $totalTax + $Tip;
echo "Total cost is $" . "$total";
echo "<br><br>";

$hamTotal=($hamburger * 2);


echo '<table border="1" cellspacing = "0" cellpadding = "10">';
echo "<thead>
	<tr>
	<th>Item</th>
	<th>Price</th>
	<th>Qty</th>
	<th>Subtotal</th>
	</tr>";

echo "<tr>
	<td> Hamburger</td>
	<td> $hamburger</td>
	<td> 2</td>
	<td>$ $hamTotal</td>
	</tr>";

echo "<tr>
	<td> Milkshake</td>
	<td> $milkshake</td>
	<td> 1</td>
	<td>$ $milkshake</td>
	</tr>";

echo "<tr>
	<td> Cola</td>
	<td> $cola</td>
	<td> 1</td>
	<td>$ $cola</td>
	</tr>";

echo "<tr>
	<td colspan='3' align='right'>Subtotal</td>
	<td>$ $subtotal</td>
	</tr>";

echo "<tr>
	<td colspan='3' align='right'> Tax</td>
	<td>$ $totalTax</td>
	</tr>";

echo "<tr>
	<td colspan='3' align='right'> Tip</td>
	<td>$ $Tip</td>
	</tr>";

echo "<tr>
	<td colspan='3' align='right'> Total Cost</td>
	<td>$ $total</td>
	</tr>";	

echo "</thead>";
echo "</table>";
?>