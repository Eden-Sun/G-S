<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="GLAD,PVQC,BAP,專業英文">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Global Learning and Assessment Development (GLAD) - PVQC VQC BAP Typing</title>
		
		<link rel="shortcut icon" href="favicon.ico" />
		
		<link rel="stylesheet" href="string.css" >
		<link rel="stylesheet" href="css/bootstrap.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/docs.min.css">
		<link rel="stylesheet" href="css/style.css" >

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<style>
			.bgimg {
				background-image: url(./assets/top.jpg);
			}
			.inline-form {
				display: inline;
			}
			iframe {
				border: 0;
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
								Please enter the Certificate Identification Code
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
							<th>Tier(层级)</th>
							<th>Spelling</th>
							<th>发证日期</th>
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
							</tr>
						</tbody>
					</table>
					<form method="POST" class="inline-form" id="show_form" action="./cert.php" target="_blank">
						<input type="password" name="password" class="hidden" value="">
						<button class="btn btn-primary btn-xs" id="btn_view">顯示書子證書</button>
					</form>
					<form method="POST" class="inline-form" action="./cert.php?download=1"  target="my_iframe">
						<input type="password" name="password" class="hidden" value="">
						<button class="btn btn-primary btn-xs" id="btn_download">下載</button>
					</form>
				</div>
				<iframe name="my_iframe" width=0px height=0px></iframe>
			</div>
		</div>
		<div class="container">
			<footer>
				<div class="context">
					<h5><img src="./assets/footer.jpg" /></h5>
					<h6 class="year_date">Copyright©  GLAD  All rights reserved.</h6>
                  <h6 class="year_date">Microsoft®,  Word,  Excel®,  PowerPoint®  and Office are trademarks of Microsoft Inc. in the United States and/or other countries.<br>
				  CIW® is the trademark of Certification Partners, LLC. CompTIA® is the trademark of Computing Technology Industry Association, Inc. <br>
				  ATP is a registered trademark of the Association of Test Publishers. And all other trademarks mentioned above belong to the respective organization(s) which own(s) the rights.<br>
				  Adobe® , Photoshop®, Illustrator® and InDesign® are either registered trademarks or trademarks of Adobe® Systems. <br>
				  	GLAD® , PVQC® , PELC® , GQC®, BAP® , ICT® , DMT® , MDA®, AIL®  and Typing Credential® are trademarked by Global Learning and Assessment Development (GLAD).</span><br>
						All logos or trademarks mentioned above belong to their organization(s).</h6>
                </div>
			</footer>
		</div>
	</body>
	<script>

		var ENG = 0;
		var CN = 1;
		var ZH = 2;
		var Alerts = ['Please enter the Certificate Identification Code ', '请输入证书识别编号 ', '請輸入證書識別編號 ']
		var Titles = ['Global Credential Verification', '证书查验', '證書查驗'];
		var Hints = ['Please enter the Certificate Identification Code', '请输入证书识别编号', '請輸入證書識別編號'];
		var Placeholders = ['Key in the Certificate No.'];
		var Button_Search_Words = ['Submit', '确认', '確認']
		var Button_View_Words = ['View the online copy of the certificate.', '点击此处可查看在线证书的副本。', '顯示書子證書']
		var Button_Download_Words = ['Download', '下载', '下載']

		var lan = <?php echo isset($_GET["lan"]) ? $_GET['lan'] :  0 ?>;
		set_lan(lan)

		function set_lan (lanID) {
			lan = lanID

			$('#title').text(Titles[lan])
			$('#hint').text(Hints[lan])
			$('#submit').text(Button_Search_Words[lan])
			$('#btn_view').text(Button_View_Words[lan])
			$('#btn_download').text(Button_Download_Words[lan])

			$('#result').hide()
			$('#result thead').hide()
			$('#noresult div').hide()
			$('form').hide()
		}

		function submit () {
			var cerno = $("#cerno").val();
			if(cerno=='') { 
				return alert(Alerts[lan]);
			}
			$.post("api.php", { cerno: cerno }).then(function(data) {
				var result = JSON.parse(data)
				$('#result').hide()
				$('#result thead').hide()
				$('#noresult div').hide()
				$('form').hide()
				if (!result.length) {
					$($('#noresult div')[lan]).show()
					return 
				}
				$('form').show()
				$($('#result thead')[lan]).show()
				$('#result').show()
				$('#tr')
					.empty()
					.append($('<td>').text(result[0]))
					.append($('<td>').text(result[1]))
					.append($('<td>').text(result[10] + '-' + result[3]))

					.append($('<td>').text(result[4]))
					.append($('<td>').text(result[5]))
					.append($('<td>').text(result[7]))
					.append($('<td>').text(result[9]))
				// $('#show_form').attr('action', './pre/' + result[15] + '.php')
				$('input[name="password"]').val(cerno)
			});
		}

		
</script>

</html>
