<html>
	<head>
		<title>Comments</title>
	</head>
	<body>
		<?php
			
			$name = $_POST["name"];
			$sex = $_POST["sex"];
			$comment = $_POST["comment"];

			$conexion = mysqli_connect("localhost","root","","womanday");
			$consulta = mysqli_query($conexion,"insert into comments  (Name, Sex, Comment) values (\"$name\",\"$sex\",\"$comment\");");
			
			$consulta2 = mysqli_query($conexion,"select * from comments;");
			if (mysqli_num_rows($consulta2) > 0) {	
				echo "<table border=1>";
				echo "<tr><th>name</th><th>sex</th><th>comments</th></tr>";
				while ($registro = mysqli_fetch_array($consulta2)){
					if ($registro["Sex" ] == "Female") {

						echo "<tr>";
					echo "<td style=background-color:orange >".$registro["Name"]."</td>";
					echo "<td style=background-color:orange >".$registro["Sex"]."</td>";
					echo "<td style=background-color:orange >".$registro["Comment"]."</td>";
					}
					else{
						echo "<tr>";
					echo "<td style=background-color:green>".$registro["Name"]."</td>";
					echo "<td style=background-color:green>".$registro["Sex"]."</td>";
					echo "<td style=background-color:green>".$registro["Comment"]."</td>";
					}
				}
			}
		?>
		<br><a href="input.php">Regresar</a>	
	</body>
</html>