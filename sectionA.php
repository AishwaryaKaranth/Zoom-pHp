<?php
if(isset($_POST['name'])){
	$array = array(
	"1rn17ec012",
"1rn17ec009",
"1rn17ec003",
"1rn17ec005",
"1rn17ec008",
"1rn17ec024",
"1rn17ec040",
"1rn17ec006",
"1rn17ec022",
"1rn15ec187",
"1rn17ec039",
"1rn17ec001",
"1rn17ec041",
"1rn17ec030",
"1rn17ec025",
"1rn17ec002",
"1rn17ec026",
"1rn17ec017",
"1rn18ec400",
"1rn15ec186",
"1rn17ec036",
"1rn17ec014",
"1rn17ec036",
"1rn17ec016",
"1rn17ec019",
"1rn17ec029",
"1rn17ec013",
"1rn17ec023",
"1rn17ec032",
"1rn17ec010",
"1rn16ec038",
"1rn17ec020",
"1rn17ec099",
"1rn17ec031",
"1rn17ec007",
"1rn17ec028",
"1rn17ec115",
"1rn17ec027",
"1rn17ec018",
"1rn17ec021",
"1rn17ec036",
"1rn17ec035",
"1rn17ec004",
"1rn17ec033",
"1rn17ec011",
"1rn18ec406",
"1rn17ec034",
"1rn18ec402",
"1rn18ec401",
"1rn18ec406",
"1rn15ec187",
"1rn17ec023",
"1rn18ec403",
"1rn18ec404",
"1rn17ec038"
); 
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
		USN:<input type="text" name="name">
		<input type="submit" name="submit">
	</form>
</html>