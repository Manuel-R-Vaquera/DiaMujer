<html>
<head>
	<title>
		Happy Womens Day
	</title>
</head>
<body>
	<h1>
		Comments
	</h1>	

	<form name = "data" action="Com.php" method="post">

	<table>
		<tr>
		give me your name
		<input type="text" name="name" required="required">
		<br>
		</tr>
		
		<tr>
		choose your sex
		<select name="sex">
				<option>Male</option>
				<option>Female</option>
		</select>
		</tr>
		
		<tr>
		Comments:
		<input type="text" name="comment" style="width:100px;height:50px" required="required"><br>
		</tr>
	
	</table>
	
	<input type="submit" value="Add Comments">
	
	</form>

</body>