<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="GLAD,PVQC,BAP,專業英文">
		<meta name="description" content="">
		<meta name="author" content="">
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
		<style>
			.bgimg {
				background-image: url(./assets/top.jpg);
			}
		</style>
	</head>
	<body>
		<div class=" container" >
			<div class="bs-example bgimg container" >
				<div class="col-xs-7"></div>
					<div class="col-xs-5">
						<ul class="nav nav-pills">
							<li>
								<a href="?lan=0" onclick="set_lan(0)">English</a>
							</li>
							<li id="intr">
								<a href="?lan=1" onclick="set_lan(1)">简体中文</a>
							</li>
							<li id="new">
								<a href="?lan=2" onclick="set_lan(2)">繁體中文</a>
							</li>
				
						</ul>
					</div>
				</div>
			</div>
			<div class="container" >
				<div class="bs-example" id="search">
					<h1>
						<a class="glyphicon glyphicon-cog overview-normalize Microsoft JhengHei ">
							<a id="title">Global Credential Verification</a>
						</a>
					</h1>
					<div class="row">
						<div class=" col-md-8">
							<p class="context1" id="hint">
								Please enter the Credential Identification Code
							</p>
						</div>
					<div class=" col-md-5">
					<input type="text" class="form-control" id="cerno" placeholder="Key in the Certificate No." required>
				</div>
				<div class=" col-md-4">
					<button class="btn btn-success btn-sm" type="submit" onclick="submit()" id='submit'>
						Submit
					</button>
				</div>
				<div class="col-md-12" id="static">
					<div id="noresult">
						<div>not exist</div>
						<div>查无编号</div>
						<div>查無此編號</div>
					</div>
					<table class="table table-striped" id="result">
						<thead >
							<th>First Name</th>
							<th>Last Name</th>
							<th>Certification</th>
							<th>Level</th>
							<th>Tier</th>
							<th>Spelling</th>
							<th>Issued on</th>
						</thead>
						<thead>
							<th>英文姓名</th>
							<th>中文姓名</th>
							<th>科目</th>
							<th>Level(等級)</th>
							<th>Tier(層級)</th>
							<th>Spelling</th>
							<th>發證日期</th>
						</thead>
						<thead>
							<th>英文姓名</th>
							<th>中文姓名</th>
							<th>科目</th>
							<th>Level(等級)</th>
							<th>Tier(層級)</th>
							<th>Spelling</th>
							<th>發證日期</th>
						</thead>
						<tbody> 
							<tr id="tr">
								<!-- <td>'.$row[0].'</td>
								<td>'.$row[1].'</td>
								<td>'.$row[10].'-'.$row[3].'</td>
								<td>'.$row[4].'</td>
								<td>'.$row[5].'</td>          
								<td>'.$row[7].'</td>
								<td>'.$row[9].'</td>              -->
							</tr>
						</tbody>
					</table>
					<form method="POST" action="'.$row[15].'.php" target="_blank">

					<input type="password" name="password" class="hidden" value="'.$cerno.'">

					<button class="btn btn-primary btn-xs" type="submit">顯示書子證書</button>
					<button class="btn btn-primary btn-xs" ">下載</button>
					</form>
				</div>
			</div>
		</div>
		<div class="container">
			<footer>
				<div class="context">
					<h5><img src="./assets/footer.jpg" /></h5>
					<h6 class="year_date">Copyright©  GLAD  All rights reserved.</h6>
                  <h6 class="year_date">Microsoft®,  Word,  Excel®,  PowerPoint®  and Office are trademarks of Microsoft Inc. in the United States and/or other countries.<br>
				  CIW® is the trademark of Certification Partners, LLC. CompTIA® is the trademark of Computing Technology Industry Association, Inc. <br>
				  ATP and all other trademarks mentioned above belong to the respective organization(s) which own(s) the rights.<br>
				  Adobe® , Photoshop®, Illustrator® and InDesign® are either registered trademarks or trademarks of Adobe® Systems. <br>
				  GLAD® , PVQC® , PELC® , BAP® , ICT® , DMT® , MDA®, AIL® , and Typing Credential TM are trademarked by Global Learning and Assessment Development (GLAD).<br>
		        All Logos or trademarks mentioned above belong to respective corporations.</h6>
                </div>
			</footer>
		</div>
	</body>
	<template></template>
	<script>

		var ENG = 0;
		var CN = 1;
		var ZH = 2;
		var Alerts = ['Please enter the Credential Identification Code ', '请输入证书识别编号 ', '請輸入證書識別編號 ']
		var Titles = ['Global Credential Verification', '证书查验', '證書查驗'];
		var Hints = ['Please enter the Credential Identification Code', '请输入证书识别编号', '請輸入證書識別編號'];
		var Placeholders = ['Key in the Certificate No.'];
		var ButtonWords = ['Submit', '确认', '確認']

		var lan = <?php echo isset($_GET["lan"]) ? $_GET['lan'] :  0 ?>;
		set_lan(lan)

		function set_lan (lanID) {
			lan = lanID

			$('#title').text(Titles[lan])
			$('#hint').text(Hints[lan])
			$('#submit').text(ButtonWords[lan])

			$('#result thead,tbody').hide()
			$('#noresult div').hide()
		}

		function submit () {
			var cerno = $("#cerno").val();
			if(cerno=='') { 
				return alert(Alerts[lan]);
			}
			$.post("api.php", { cerno: cerno }).then(function(data) {
				var result = JSON.parse(data)
				$('#result thead,tbody').hide()
				$('#noresult div').hide()
				if (!result.length) {
					$($('#noresult div')[lan]).show()
					return 
				}
				$($('#result thead')[lan]).show()
				$('#result tbody').show()
				$('#tr')
					.append($('<td>').text(result[0]))
					.append($('<td>').text(result[1]))
					.append($('<td>').text(result[10] + '-' + result[3]))
					.append($('<td>').text(result[4]))

					.append($('<td>').text(result[5]))

					.append($('<td>').text(result[7]))
					.append($('<td>').text(result[9]))
			});
		}

		
</script>

</html>
