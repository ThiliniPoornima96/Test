<html>
<head>
	<title>Q6</title>
	<style>
		table, th, td {
  border: 1px solid red; 
  border-collapse: collapse;
}
	</style>
</head>
<body>
	<table>
		<tr>
			<th>Quantity</th>
			<th>Price(Rs)</th>
		</tr>
		<?php 
			for($i = 1; $i <= 5; $i++){
				echo '<tr><td>'.($i*10).'</td><td>'.($i*10000).'</td></tr>';			
			}
		?>
	</table>
</body>
</html>
