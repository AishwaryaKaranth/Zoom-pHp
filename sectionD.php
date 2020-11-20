<?php
if(isset($_POST['name'])){
	$array = array(
		"1rn16ec175",
		"1rn17ec147",
		"1rn18ec430",
		"1rn17ec127",
		"1rn18ec432",
		"1rn17ec130",
	"1rn17ec125",
"1rn17ec161",
"1rn17ec156",
"1rn17ec157",
"1rn17ec164",
"1rn17ec134",
"1rn18ec427",
"1rn17ec135",
"1rn17ec166",
"1rn17ec144",
"1rn17ec139",
"1rn17ec169",
"1rn18ec429",
"1rn17ec147",
"1rn17ec162",
"1rn17ec128",
"1rn17ec160",
"1rn17ec167",
"1rn17ec133",
"1rn17ec123",
"1rn17ec137",
"1rn17ec150",
"1rn18ec431",
"1rn17ec155",
"1rn17ec126",
"1rn17ec141",
"1rn17ec158",
"1rn17ec170",
"1rn17ec138",
"1rn17ec152",
"1rn17ec136",
"1rn17ec168",
"1rn17ec142",
"1rn17ec124",
"1rn17ec148",
"1rn17ec146",
"1rn17ec143",
"1rn17ec131",
"1rn18ec433"); 
  	$url='https://us04web.zoom.us/j/77120613974';
  	$del_val=$_POST["name"];

  if (($key = array_search($del_val, $array)) !== false) {
    unset($array[$key]);
   
    header("Location:$url");
}
else{
	echo "access denied";
}
}
?>
<html>
<body>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		<p>enter usn in lower case</p>
		USN:<input type="text" name="name">
		<input type="submit" name="submit">
	</form>
</html>