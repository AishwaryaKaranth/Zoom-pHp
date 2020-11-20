<?php
if(isset($_POST['name'])){
	$array = array(
		"1rn17ec081",
	"1rn17ec068",
	"1rn18ec410",
	"1rn17ec053",
	"1rn18ec414",
	"1rn18ec415",
	"1rn17ec056",
	"1rn17ec070",
	"1rn16ec098",
"1rn18ec412",
"1rn17ec045",
"1rn17ec054",
"1rn17ec042",
"1rn17ec062",
"1rn17ec055",
"1rn17ec077",
"1rn17ec077",
"1rn17ec073",
"1rn17ec046",
"1rn17ec046",
"1rn17ec058",
"1rn17ec067",
"1rn17ec074",
"1rn17ec063",
"1rn17ec044",
"1rn17ec049",
"1rn17ec079",
"1rn17ec061",
"1rn17ec080",
"1rn15ec033",
"1rn17ec066",
"1rn17ec064",
"1rn17ec069",
"1rn17ec083",
"1rn17ec051",
"1rn17ec078",
"1rn17ec060",
"1rn17ec050",
"1rn16ec045",
"1rn17ec048",
"1rn17ec076",
"1rn18ec407",
"1rn17ec082",
"1rn18ec413",
"1rn17ec043",
"1rn17ec071",
"1rn17ec057",
"1rn17ec075"); 
  	$url='https://us02web.zoom.us/j/86954400997?pwd=MXptMURrM3dZSGZsekFBZkRwYkRiZz09';
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