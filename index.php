<html>
<body>
	<style>
		body{
			background-color:black;
		}
		form{
			font-size: 35px;
			background-color:black;
			color:white;
			
		}
	</style>
	<form action="reg.php" method="post">
		<!--USN:<input type="text" name="name">-->
		<p>Select your section and click submit</p>
		Section:<br><input type="radio" name="button" value="a">A<br>
		<input type="radio" name="button" value="b">B<br>
		<input type="radio" name="button" value="c">C<br>
		<input type="radio" name="button" value="d">D<br>
		<br>
		<p>To log in to elective classes, select the elective below</p>
	ANN:<input type="radio" name="button" value="annclass"><br>
	Microelectronics:<input type="radio" name="button" value="meclass"><br>
		<input type="submit" name="submit">
	</form>
</html>