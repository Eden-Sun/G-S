
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="GLAD,PVQC,BAP,專業英文">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
		<link href="string.css" rel="stylesheet">
		<title>Global Learning and Assessment Development (GLAD) - PVQC VQC BAP Typing</title>
		<link rel="shortcut icon" href="favicon.ico" />
		<link href="dist/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="dist/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="dist/css/docs.min.css">
		<link href="string.css" rel="stylesheet">
		<link type="text/css" href="cert.css" rel="stylesheet">
	</head>
	<body>
		<?
			include("db.php");
			$cerno=$_POST['password'];
			$data=mysql_query("select * from info where Certificate ='$cerno'") ;
			$rows = mysql_fetch_row($data);
			$cert_id = $rows[15];
			include("cert_".$cert_id.".php");
		?>
	</body>
	<script>
		document.onmousedown=click;
		document.onkeydown=click;
		if (document.layers) window.captureEvents(Event.MOUSEDOWN); window.onmousedown=click;
		if (document.layers) window.captureEvents(Event.KEYDOWN); window.onkeydown=click;
		function click(e){
			if (navigator.appName == 'Netscape'){
				if (e.which != 1){alert("Not available to download!!");return false;}}
				if (navigator.appName == "Microsoft Internet Explorer"){
				if (event.button != 1){alert("Not available to download!!");
		return false;}}}
	</script>
</html>