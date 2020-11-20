<?php
//$url='https://www.google.com/';
if(isset($_POST['button'])) {
            /*$dbhost = 'localhost:3036';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
        
            $usn = $_POST['name'];
            
            $sql = "DELETE FROM users WHERE username = $usn" ;
            mysql_select_db('appdb1');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
               echo "access denied"
            }
            else{
              
              header("Location:$url");
            }
            
            mysql_close($conn);*/
            switch ($_POST['button']){
              case 'a':
                header('Location:sectionA.php');
                break;
              case 'b':
                header('Location:sectionB.php');
                break;
              case 'c':
                header('Location:sectionC.php');
                break;
              case 'd':
                header('Location:sectionD.php');
                break;
              case 'annclass':
                header('Location:ann.php');
                break;
              case 'meclass':
                header('Location:me.php');
                break;
              default:
              break;
            }

}




/*	$array = array("1rn17ec012","1rn17ec008","1rn17ec011"); 
  	$url='https://www.google.com/';
  	$del_val=$_POST["name"];

  if (($key = array_search($del_val, $array)) !== false) {
    unset($array[$key]);
    
    header("Location:$url");
}
else{
	echo "access denied";
}
?>*/