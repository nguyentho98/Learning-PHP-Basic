<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	
	<title>Document</title>
</head>
<body>
	<table border="1px">
		<tr>
			<?php
			for($i = 1; $i < 10; $i ++) {
				echo "<td>";
				for($j = 1; $j <= 10; $j ++) {
					echo "$i x $j = " . ($i * $j);
					echo "<br>";
				}
				echo "</td>";
			}
			?>
		</tr>
	</table>

</body>
</html>