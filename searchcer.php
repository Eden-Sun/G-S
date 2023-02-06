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
		<link type="text/css" href="css/style.css" rel="stylesheet">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.movingboxes.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		</head>
		<style>
		.bgimg {
			background-image: url(top.jpg);
		}
	</style>
<body>
			<div class=" container" >
				<div class="bs-example bgimg container" >
<div class="col-xs-7"></div>
					<div class="col-xs-5">
						<ul class="nav nav-pills">
							
							<li>
								<a href="searchcer.php" onclick="handler()">English</a>
							</li>
							<li id="intr">
									<a href="javascript: return false;" onclick="modtn()">简体中文</a>

							</li>
							<li id="new">
							<a href="javascript: return false;" onclick="moden()">繁體中文</a>
							</li>
				
						</ul>
					</div>
				</div>
			</div>
			<div class="container">
			
				<div class="bs-example" id="search">
<h1><a class="glyphicon glyphicon-cog overview-normalize Microsoft JhengHei "><a>Global Credential Verification</a></a></h1>
	<div class="row">
						<div class=" col-md-8">


					<p class="context1">
						Please enter the Credential Identification Code
					</p>

				</div>
				<div class=" col-md-5">
					<input type="text" class="form-control" id="cerno" placeholder="Key in the Certificate No." required>
				</div>
				<div class=" col-md-4">
					<button class="btn btn-success btn-sm" type="submit" onclick="st_moden()">
						Submit
					</button>
				</div>
				<div class="col-md-12" id="static">

				</div>
			</div>

		</div>
		<div class="container">
			<footer>
				<div class="context">
					<h5><img src="footer.jpg" /></h5>
					<h6 class="year_date">Copyright©  GLAD  All rights reserved.</h6>
                  <h6 class="year_date">Microsoft®,  Word,  Excel®,  PowerPoint®  and Office are trademarks of Microsoft Inc. in the United States and/or other countries.<br>
				  CIW® is the trademark of Certification Partners, LLC. CompTIA® is the trademark of Computing Technology Industry Association, Inc. <br>
				  ATP and all other trademarks mentioned above belong to the respective organization(s) which own(s) the rights.<br>
				  Adobe® , Photoshop®, Illustrator® and InDesign® are either registered trademarks or trademarks of Adobe® Systems. <br>
				  GLAD® , PVQC® , PELC® , BAP® , ICT® , DMT® , MDA®, AIL® , and Typing Credential TM are trademarked by Global Learning and Assessment Development (GLAD).<br>
		        All Logos or trademarks mentioned above belong to respective corporations.</h6>
                </div>
			</footer><!--footer-->
		
		</div>
	</body>
</html>
		<script>
			function st_mod() {
				
				var cerno = $("#cerno").val();
           if(cerno==''){
           	alert('請輸入證書識別編號 ');
           }
           else{
				var json = {
					cerno : cerno,
					select : 'mod'
				}
				$.post("glad_api.php", json, function(data) {
					$('#static').html(data);
					//console.log(data);
				});
				}
				//$("#cerno").val("");
				//console.log(cerno);
			}
			function st_moden() {
				var cerno = $("#cerno").val();
  		if(cerno==''){
           	alert('Please enter the Credential Identification Code ');
           }
           else{
				var json = {
					cerno : cerno,
					select : 'moden'
				}
				$.post("glad_api.php", json, function(data) {
					$('#static').html(data);
					//console.log(data);
				});
				}
				//$("#cerno").val("");
				//console.log(cerno);
			}
			function moden() 
	 	{

	
		var json={	
			
				select:'seachen'
			}
		$.post(
			"glad_api.php", 
			json,
   			function(data)
   				{
   				$('#search').html(data);
   				console.log(data);
   				}		
   		);
   			

   	}
   				function modtn() 
	 	{

	
		var json={	
			
				select:'seachtn'
			}
		$.post(
			"glad_api.php", 
			json,
   			function(data)
   				{
   				$('#search').html(data);
   				console.log(data);
   				}		
   		);
   			

   	}
   	function st_modtn() {
				var cerno = $("#cerno").val();
 		if(cerno==''){
           	alert('请输入证书识别编号 ');
           }
           else{
				var json = {
					cerno : cerno,
					select : 'modtn'
				}
				$.post("glad_api.php", json, function(data) {
					$('#static').html(data);
					//console.log(data);
				});
				}
				//$("#cerno").val("");
				//console.log(cerno);
			}
		</script>

