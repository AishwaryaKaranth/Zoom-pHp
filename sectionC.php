<?php
if(isset($_POST['name'])){
	$array = array(
	"1rn17ec094",
"1rn17ec084",
"1rn16ec156",
"1rn17ec100",
"1rn17ec117",
"1rn17ec119",
"1rn17ec085",
"1rn17ec086",
"1rn17ec095",
"1rn17ec110",
"1rn18ec425",
"1rn17ec103",
"1rn17ec108",
"1rn17ec113",
"1rn17ec087",
"1rn17ec093",
"1rn17ec096",
"1rn16ec141",
"1rn17ec090",
"1rn17ec111",
"1rn17ec105",
"1rn17ec102",
"1rn17ec107",
"1rn17ec088",
"1rn17ec122",
"1rn17ec106",
"1rn17ec121",
"1rn18ec419",
"1rn17ec101",
"1rn17ec116",
"1rn17ec091",
"1rn17ec109",
"1rn17ec104",
"1rn17ec089",
"1rn16ec165",
"1rn17ec097"); 
  	$url='https://us04web.zoom.us/j/428885493?pwd=b09ITmViaHZPS2hHOHBGSjdPVUliUT09';
  	$del_val=$_POST['name'];

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