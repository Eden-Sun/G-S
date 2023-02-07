<?php
	include("db.php");
	$cerno=$_POST['cerno'];
	$data=mysql_query("select * from   info where Certificate ='$cerno' or cernum='$cerno'") ;
	$row = mysql_fetch_row($data);
	if (!$row[0]) {
		// echo '[]';
		die('[]');
	}
	echo json_encode($row);
?>


   		

