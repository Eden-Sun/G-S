<?php
	include("./db.php");
	if (isset($_POST['cerno'])) {
		// is search API
		$cerno=$_POST['cerno'];
		$data=mysql_query("select * from   info where Certificate ='$cerno' or cernum='$cerno'") ;
		$row = mysql_fetch_row($data);
		if (!$row[0]) {
			die('[]');
		}
		echo json_encode($row);
	} else {
		// is lose API
		$ident=$_POST['ident'];
		$email=$_POST['email'];
		$cat=$_POST['cat'];
		$data=mysql_query("select * from   info where (ID ='$ident' or bir ='$ident') and cert='$cat' and email='$email'") ;
		$results = array();
		while($row= mysql_fetch_row($data)) {
			array_push($results, $row);
		};
		echo json_encode($results);
	}
?>


   		

