<?php
$array = array(
"New York, NY" => 8175133 ,
"Los Angeles, CA" => 3792621 ,
"Chicago, IL" => 2695598 ,
"Houston, TX" => 2100263,
"Philadelphia, PA" => 1526006,
"Phoenix, AZ" => 1445632,
"San Antonio, TX" => 1327407,
"San Diego, CA" => 1307402,
"Dallas, TX" => 119816,
"San Jose, CA" => 945942
);

$total=array_sum($array);

echo '<table border="1" cellspacing = "0" cellpadding = "10" align=center>';
echo "<thead>
	<tr>
	<th>City</th>
	<th>Population</th>
	</tr>";

foreach ($array as $key => $value) {
	echo "<tr>
	<td>$key</td>
	<td>$value</td>
	</tr>";
}

echo "<tr>
	<td>Total Polutation</td>
	<td>$total</td>
	</tr>";

echo "<br><br>";

echo '<table border="1" cellspacing = "0" cellpadding = "10" align=center>';
echo "<thead>
	<tr>
	<th>City</th>
	<th>Population</th>
	</tr>";

asort($array);

foreach ($array as $key => $value) {
	echo "<tr>
	<td>$key</td>
	<td>$value</td>
	</tr>";
}

echo "<tr>
	<td>Total Polutation</td>
	<td>$total</td>
	</tr>";

echo "<br><br>";

echo '<table border="1" cellspacing = "0" cellpadding = "10" align=center>';
echo "<thead>
	<tr>
	<th>City</th>
	<th>Population</th>
	</tr>";

ksort($array);

foreach ($array as $key => $value) {
	echo "<tr>
	<td>$key</td>
	<td>$value</td>
	</tr>";
}

echo "<tr>
	<td>Total Polutation</td>
	<td>$total</td>
	</tr>";
echo "<br><br>";

?>