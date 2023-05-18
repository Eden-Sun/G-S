<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="GLAD,PVQC,PELC,JVQC,ICT,BAP,AIL,專業英文">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Global Learning and Assessment Development (GLAD) - PVQC VQC PELC JVQC ICT BAP AIL Typing</title>
		<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
		
		
		<link rel="shortcut icon" href="favicon.ico" />
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/docs.min.css">
		<link rel="stylesheet" href="string.css" >
		<link rel="stylesheet" href="css/style.css" >
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<style>
			.bgimg {
				background-image: url(./assets/top.jpg);
			}
			iframe {
				border: 0;
			}
		</style>
	</head>
	<body>
		<div class="container">
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
				<div id="main">
					<button class="btn btn-info btn-sm" onclick="method(1)">
						Method One
					</button>
					<button class="btn btn-info btn-sm" onclick="method(0)">
						Method Two
					</button>
					<div class="bs-example instruction">
						<h2>
						<p class="title1">
							Instruction: Click on the buttons above to choose the inquiry method
						</p></h2>
						<h4>
						<a class="glyphicon glyphicon-th">
						</a>Method One:</h4>
						<br>
						<h5><a href="javascript: return false;"style="color:#0000C6" onclick="method(1)">【Method One】</a>is for certificates of PVQC,VQC,Typing Credential, PELC, JVQC, MDA, GQC.  After selecting your certificate category, enter the last five digits of your government identification number, and then enter the email address you registered with.</h5>
						</br>
						<h4>
						<a class="glyphicon glyphicon-th">
							
						</a>Method Two:</h4>
						<br>
						<h5><a href="javascript: return false;" style="color:#0000C6" onclick="method(0)">【Method Two】</a> is for certificates of BAP, ICT, DMT, AIL. After selecting your certificate category, enter year and month of birth (e.g. 2006/08), and then enter the Email address you registered with.</h5>
					</div>
					<div class="bs-example instruction">
						<h2>
						<p class="title1">
							使用说明:点选上方按钮选取适当查询方式
						</p></h2>
						<h4>
						<p class="glyphicon glyphicon-th">
							查询方式一
						</p></h4>
						<br>
						<h5>适用于证书PVQC、VQC、Typing Credential、PELC、JVQC、MDA、GQC遗失查询使用，请先按上方<a href="javascript: return false;" style="color:#0000C6" onclick="method(1)">【查询方式一】</a>，选取欲查询之证书类别，再输入身分证后五码，接者输入参加本认证之注册账号完成查询步骤。</h5>
						<br>
						<h4>
						<p class="glyphicon glyphicon-th">
							查询方式二:
						</p></h4>
						<br>
						<h5>适用于证书BAP、ICT、DMT、AIL等遗失查询使用，请先按上方<a href="javascript: return false;" style="color:#0000C6" onclick="method(0)">【查询方式二】</a>，选取欲查询之证书类别，再输入生日公元年月(ex 1990/08/02)，接者输入参加本认证之注册账号完成查询步骤。</h5>
					</div>
					<div class="bs-example instruction">
						<h2>
						<p class="title1">
							使用說明:點選上方按鈕選取適當查詢方式
						</p></h2>
						<h4>
						<p class="glyphicon glyphicon-th">
							查詢方式一:
						</p></h4>
						<br>
						<h5>適用於證書PVQC、VQC、Typing Credential、PELC、JVQC、MDA、GQC遺失查詢使用，請先按上方<a href="javascript: return false;" style="color:#0000C6" onclick="method(1)">【查詢方式一】</a>，選取欲查詢之證書類別，再輸入身分證後五碼，接者輸入參加本認證之註冊帳號完成查詢步驟。</h5>
						<br>
						<h4>
						<p class="glyphicon glyphicon-th">
							查詢方式二:
						</p></h4>
						<br>
						<h5>適用於證書BAP、ICT、DMT、AIL等遺失查詢使用，請先按上方<a href="javascript: return false;" style="color:#0000C6" onclick="method(0)">【查詢方式二】</a>，選取欲查詢之證書類別，再輸入生日西元年月(ex 1990/08)，接者輸入參加本認證之註冊帳號完成查詢步驟。</h5>
					</div>
					<div class="bs-example query">
						<h1>
							<a class="glyphicon glyphicon-cog overview-normalize"></a>
							<a id="title">Lost or missing certificates inquiry</a>
						</h1>
						<div class="row ">
							<div class=" col-md-8">
								<p class="context" id="cat_title">Please select your certificate category</p>
								<select id="cat_id" class="form-control">
									<option value="pvqc">PVQC</option>
									<option value="vqc">VQC</option>
									<option value="Typing Credential">Typing Credential</option>
									<option value="pelc">PELC</option>
									<option value="jvqc">JVQC</option>
									<option value="mda">MDA</option>
									<option value="gqc">GQC</option>
								</select>
								<select id="cat_bir" class="form-control">
									<option value="bap">BAP</option>
									<option value="ict">ICT</option>
									<option value="dmt">DMT</option>
									<option value="ail">AIL</option>
								</select>
							</div>
							<div class=" col-md-8">
								<p class="context" id="ident_title">
									Please enter your last five digits of your identification number
								</p>
							</div>
							<div class="col-md-8">
								<input type="text" class="form-control" id="ident" required>
							</div>
							<div class=" col-md-8">
								<p class="context" id="account_title">Please enter the Email address you registered with.</p>
							</div>
							<div class="col-md-8">
								<input type="text" class="form-control" id="account" placeholder="Key in the Email address you registered with." required>
							</div>
							<div class="col-md-7">
								<button class="btn btn-success btn-sm" id="submit" onclick="submit()">Submit</button>
							</div>
							<iframe name="my_iframe" width=0px height=0px></iframe>
							<form method="POST" action="./cert.php?download=1"  target="my_iframe">
								<input type="password" name="password" id="password" class="hidden" value="">
								<div class="col-md-12" id="static">
									<table class="table table-striped">
										<thead>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Certification</th>
											<th>Level</th>
											<th>Tier</th>
											<th>Spelling</th>
											<th>Certification Number</th>
											<th>Issued on</th>
											<th>Download</th>
										</thead>
										<thead>
											<th>英文姓名</th>
											<th>中文姓名</th>
											<th>科目</th>
											<th>Level(等级)</th>
											<th>Tier(层级)</th>
											<th>Spelling</th>
											<th>认证码</th>
											<th>发证日期</th>
											<th>下载</th>
										</thead>
										<thead>
											<th>英文姓名</th>
											<th>中文姓名</th>
											<th>科目</th>
											<th>Level(等級)</th>
											<th>Tier(層級)</th>
											<th>Spelling</th>
											<th>認證碼</th>
											<th>發證日期</th>
											<th>下載</th>
										</thead>
										<tbody id="tbody">
										</tbody>
									</table>
								</div>
							</form>
						</div>
					</div> 
				</div>
			</div>
			<div class="container">
				<footer>
					<div class="context">
						<h5><img src="./assets/footer.jpg" /></h5>
						<h6>Copyright©  GLAD  All rights reserved.</h6>

						<h6><span style="font-family: Arial, Helvetica, sans-serif">Microsoft®,  Word,  Excel®,  PowerPoint®  and Office are trademarks of Microsoft Inc. in the United States and/or other countries.<br>
						CIW® is the trademark of Certification Partners, LLC. CompTIA® is the trademark of Computing Technology Industry Association, Inc. <br>
						ATP is a registered trademark of the Association of Test Publishers. And all other trademarks mentioned above belong to the respective organization(s) which own(s) the rights.<br>
						Adobe® , Photoshop®, Illustrator® and InDesign® are either registered trademarks or trademarks of Adobe® Systems. <br>
						GLAD® , PVQC® , PELC® , GQC®, BAP® , ICT® , DMT® , MDA®, AIL®  and Typing Credential® are trademarked by Global Learning and Assessment Development (GLAD).</span><br>
						All logos or trademarks mentioned above belong to their organization(s).</h6>
					</div>
				</footer><!--footer-->
			</div>
		</div>
	</body>
	<script>

		var ENG = 0;
		var CN = 1;
		var ZH = 2;
		var Titles = ['Lost or missing certificates inquiry', '证书遗失查询', '證書遺失查詢'];
		var Cat_titles = ['Please select your certificate category', '请选择证书类别', '請選擇證書類別'];
		
		var Iden_titles = [
			['Please enter your last five digits of your identification number', 'Please enter year and month of birth (e.g. 1990/08)'],
			['请输入身分证字号后五码', '请输入公元生日(ex 1990/08)'],
			['請輸入身分證字號後五碼', '請輸入生日西元年月(ex 1990/08)']
		]
			
		var Acc_titles = ['Please enter the Email address you registered with', '请输入参加本认证之注册账号', '請輸入參加本認證之註冊帳號']
		
		var Button_Search_Words = ['Submit', '确认', '確認']
		var Button_Download_Words = ['Download', '下载', '下載']
		
		var Alerts = ['Please enter complete information', '请输入完整数据 ', '請輸入完整資料 ']

		var lan = <?php echo isset($_GET["lan"]) ? $_GET['lan'] :  0 ?>;
		var id_mode = 1;
		
		set_lan(lan)
		function set_lan (lanID) {
			lan = lanID
			
			$('.query').hide()
			$('.instruction').hide()
			$($('.instruction')[lan]).show()
			$('#title').text(Titles[lan])
			$('#cat_title').text(Cat_titles[lan])
			$('#ident_title').text(Iden_titles[lan])
			$('#account_title').text(Acc_titles[lan])
			$('#submit').text(Button_Search_Words[lan])

		}
		$('thead').hide()

		function method (idMode) {
			id_mode = idMode
			$('.instruction').hide()
			$('.query').show()
			if (id_mode) {
				$('#ident').attr('placeholder', 'Key in the last five digits of your ID.')
				$('#ident_title').text(Iden_titles[lan][0])
				$('#cat_id').show()
				$('#cat_bir').hide()
			} else {
				$('#ident').attr('placeholder', 'Key in year and month of birth.')
				$('#ident_title').text(Iden_titles[lan][1])
				$('#cat_id').hide()
				$('#cat_bir').show()
			}
		}

		function submit () {
			var ident = $("#ident").val();
			var account = $("#account").val();
			var cat_key = id_mode ? $('#cat_id').val() : $('#cat_bir').val();
			if (ident == '' || account == '') {
				alert(Alerts[lan]);
			} else {
				$.post("./api.php", {
					cat: cat_key,
					ident : ident,
					email : account,
				}, function(data) {
					// $('#static').html(data);
					var results = JSON.parse(data)
					console.log(results);
					$('#tbody').empty()
					$($('thead')[lan]).show()
					results.forEach(function(result) {
						var bt_btn = $('<button>')
							.addClass('btn btn-primary btn-xs')
							.text(Button_Download_Words[lan])
							.click(function () {
								$('#password').val(result[8])
							})
						var tr = $('<tr>')
						tr
							.append($('<td>').text(result[0]))
							.append($('<td>').text(result[1]))
							.append($('<td>').text(result[10] + '-' + result[3]))
							.append($('<td>').text(result[4]))
							.append($('<td>').text(result[5]))
							.append($('<td>').text(result[7]))
							.append($('<td>').text(result[8]))
							.append($('<td>').text(result[9]))
							.append($('<td>').append(bt_btn))
						$('#tbody').append(tr)
					})
				});
			}
		}
	</script>
</html>