<html>
<head>
	<title>Q6</title>
</head>
<body>
	<table>
		<?php 
			for($i = 10; $i > 0; $i--){
				echo "<tr><td>$i</td><td> is ";
				if($i % 2 == 0)
					echo 'even ';
				else
					echo 'odd';
				echo '</td></tr>';			
			}
		?>
	</table>
</body>
</html>
