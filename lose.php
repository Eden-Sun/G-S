<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="GLAD,PVQC,PELC,JVQC,ICT,BAP,AIL,專業英文">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
		<link href="string.css" rel="stylesheet">
		<title>Global Learning and Assessment Development (GLAD) - PVQC VQC PELC JVQC ICT BAP AIL Typing</title>
		<link rel="shortcut icon" href="favicon.ico" />
		<link href="dist/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" href="dist/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="dist/css/docs.min.css">
		<link type="text/css" href="string.css" rel="stylesheet">
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
					<button class="btn btn-info btn-sm" onclick="meth1en()">
						Method One
					</button>
					<button class="btn btn-info btn-sm" onclick="meth2en()">
						Method Two
					</button>
					<div class="bs-example instruction">
						<h2>
						<p class="title1">
							Instruction: Click on the buttons above for corresponding inquiry methods
						</p></h2>
						<h4>
						<a class="glyphicon glyphicon-th">
						</a>Method One:</h4>
						<br>
						<h5><a href="javascript: return false;"style="color:#0000C6" onclick="meth1en()">【Method One】</a>is for certificates of PVQC,VQC,Typing Credential,PELC,JVQC,MDA.  After selecting your certificate category, enter the last five digits of your identification number, and then enter the certificate’s registration account for complete inquiry.</h5>
						</br>
						<h4>
						<a class="glyphicon glyphicon-th">
							
						</a>Method Two:</h4>
						<br>
						<h5><a href="javascript: return false;" style="color:#0000C6" onclick="meth2en()">【Method Two】</a> is for certificates of BAP,ICT,DMT,AIL.  After selecting your certificate category, enter your year and month of birth (e.g. 1990/08), and then enter the certificate’s registration account for complete inquiry.</h5>
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
						<h5>适用于证书PVQC、VQC、Typing Credential、PELC、JVQC、MDA遗失查询使用，请先按上方<a href="javascript: return false;" style="color:#0000C6" onclick="meth1cn()">【查询方式一】</a>，选取欲查询之证书类别，再输入身分证后五码，接者输入参加本认证之注册账号完成查询步骤。</h5>
						<br>
						<h4>
						<p class="glyphicon glyphicon-th">
							查询方式二:
						</p></h4>
						<br>
						<h5>适用于证书BAP、ICT、DMT、AIL等遗失查询使用，请先按上方<a href="javascript: return false;" style="color:#0000C6" onclick="meth2cn()">【查询方式二】</a>，选取欲查询之证书类别，再输入生日公元年月(ex 1990/08/02)，接者输入参加本认证之注册账号完成查询步骤。</h5>
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
						<h5>適用於證書PVQC、VQC、Typing Credential、PELC、JVQC、MDA遺失查詢使用，請先按上方<a href="javascript: return false;" style="color:#0000C6" onclick="meth1()">【查詢方式一】</a>，選取欲查詢之證書類別，再輸入身分證後五碼，接者輸入參加本認證之註冊帳號完成查詢步驟。</h5>
						<br>
						<h4>
						<p class="glyphicon glyphicon-th">
							查詢方式二:
						</p></h4>
						<br>
						<h5>適用於證書BAP、ICT、DMT、AIL等遺失查詢使用，請先按上方<a href="javascript: return false;" style="color:#0000C6" onclick="meth2()">【查詢方式二】</a>，選取欲查詢之證書類別，再輸入生日西元年月(ex 1990/08)，接者輸入參加本認證之註冊帳號完成查詢步驟。</h5>
					</div>
					<div class="bs-example query">
						<h1>
							<a class="glyphicon glyphicon-cog overview-normalize"></a>
							<a id="title">Lost or missing certificates inquiry</a>
						</h1>
						<div class="row ">
							<div class=" col-md-8">
								<p class="context">Please select your certificate category</p>
								<select id="cat" class="form-control ">
									<option value="pvqc">PVQC</option>
									<option value="vqc">VQC</option>
									<option value="Typing Credential">Typing Credential</option>
									<option value="pelc">PELC</option>
									<option value="jvqc">JVQC</option>
									<option value="mda">MDA</option>
								</select>
							</div>
							<div class=" col-md-8">
								<p class="context" id="ident_title">
									Please enter your last five digits of your identification number
								</p>
							</div>
							<div class="col-md-8">
								<input type="text" class="form-control" id="ident" placeholder="Key in the id." required>
							</div>
							<div class=" col-md-8">
								<p class="context" id="account_title">Please enter the certificate’s registration account</p>
							</div>
							<div class="col-md-8">
								<input type="text" class="form-control" id="account" placeholder="Key in the account." required>
							</div>
							<div class="col-md-7">
								<button class="btn btn-success btn-sm" type="submit" onclick="st_moden()">Submit</button>
							</div>
							<div class="col-md-12" id="static">

							</div>
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
						ATP and all other trademarks mentioned above belong to the respective organization(s) which own(s) the rights.<br>
						Adobe® , Photoshop®, Illustrator® and InDesign® are either registered trademarks or trademarks of Adobe® Systems. <br>
						GLAD® , PVQC® , PELC® , BAP® , ICT® , DMT® , MDA®, AIL® , and Typing Credential TM are trademarked by Global Learning and Assessment Development (GLAD).</span><br>
						All Logos or trademarks mentioned above belong to respective corporations.</h6>
					</div>
				</footer><!--footer-->
			</div>
		</div>
	</body>
	<script>

		var ENG = 0;
		var CN = 1;
		var ZH = 2;
		// var Alerts = ['Please enter the Credential Identification Code ', '请输入证书识别编号 ', '請輸入證書識別編號 ']
		var Titles = ['Lost or missing certificates inquiry', '证书遗失查询', '證書遺失查詢'];
		var Cat_titles = ['Please select your certificate category', '请选择证书类别', '請選擇證書類別'];
		
		var Iden_titles = ['Please enter your last five digits of your identification number', '请输入身分证字号后五码', '請輸入身分證字號後五碼']
		// 请输入公元生日(ex 1990/08)
		// var Iden_hints = []
		var Acc_titles = ['Please enter the certificate’s registration account', '请输入参加本认证之注册账号', '請輸入參加本認證之註冊帳號']
		// var Acc_hints = []

		var Button_Search_Words = ['Submit', '确认', '確認']
		var Button_View_Words = ['View the online copy of the certificate.', '点击此处可查看在线证书的副本。', '顯示書子證書']
		var Button_Download_Words = ['Download', '下载', '下載']


		var lan = <?php echo isset($_GET["lan"]) ? $_GET['lan'] :  0 ?>;
		set_lan(lan)

		function set_lan (lanID) {
			lan = lanID
			$('#title').text(Titles[lan])
		}
	</script>
</html>

<script>
	function meth1() {
		var json = {
			select : 'meth1'
		}
		$.post("glad_api.php", json, function(data) {
			$('#stage').html(data);
			console.log(data);
		});
	}
		function meth1cn() {
		var json = {
			select : 'meth1cn'
		}
		$.post("glad_api.php", json, function(data) {
			$('#stage').html(data);
			console.log(data);
		});
	}

	function meth2() {
		var json = {
			select : 'meth2'
		}
		$.post("glad_api.php", json, function(data) {
			$('#stage').html(data);
			console.log(data);
		});
	}
		function meth2cn() {
		var json = {
			select : 'meth2cn'
		}
		$.post("glad_api.php", json, function(data) {
			$('#stage').html(data);
			console.log(data);
		});
	}

	function st_mod() {
		var idno = $("#idno").val();
		var account = $("#account").val();
		var aioConceptName = $('#aioConceptName').val();
		if (idno == '' || account == '') {
			alert('請輸入完整資料');
		} else {
			var json = {
				idno : idno,
				account : account,
				aioConceptName : aioConceptName,
				select : 'lose'
			}
			$.post("glad_api.php", json, function(data) {
				$('#static').html(data);
				console.log(data);
			});
		}

	}
	function st_modcn() {
		var idno = $("#idno").val();
		var account = $("#account").val();
		var aioConceptName = $('#aioConceptName').val();
		if (idno == '' || account == '') {
			alert('請輸入完整資料');
		} else {
			var json = {
				idno : idno,
				account : account,
				aioConceptName : aioConceptName,
				select : 'losecn'
			}
			$.post("glad_api.php", json, function(data) {
				$('#static').html(data);
				console.log(data);
			});
		}

	}

	function st_mod2() {
		var idno = $("#idno").val();
		var account = $("#account").val();
		var aioConceptName = $('#aioConceptName').val();
		if (idno == '' || account == '') {
			alert('请输入完整数据');
		} else {
			var json = {
				idno : idno,
				account : account,
				aioConceptName : aioConceptName,
				select : 'lose2'
			}
			$.post("glad_api.php", json, function(data) {
				$('#static').html(data);
				console.log(data);
			})
		};
		//$("#idno").val("");
		//$("#account	").val("");
	}
	function st_mod2cn() {
		var idno = $("#idno").val();
		var account = $("#account").val();
		var aioConceptName = $('#aioConceptName').val();
		if (idno == '' || account == '') {
			alert('请输入完整数据');
		} else {
			var json = {
				idno : idno,
				account : account,
				aioConceptName : aioConceptName,
				select : 'lose2cn'
			}
			$.post("glad_api.php", json, function(data) {
				$('#static').html(data);
				console.log(data);
			})
		};
		//$("#idno").val("");
		//$("#account	").val("");
	}
	function modenl(){
	var json = {

		select : 'modenlose'
	}
	$.post("glad_api.php", json, function(data) {
		$('#manters').html(data);
		console.log(data);
	});

	}
	function modcnl() {
		var json = {

			select : 'modcnlose'
		}
		$.post("glad_api.php", json, function(data) {
			$('#manters').html(data);
			console.log(data);
		});
	}
		function meth1en() {
		var json = {
			select : 'meth1en'
		}
		$.post("glad_api.php", json, function(data) {
			$('#stage').html(data);
			console.log(data);
		});
	}
		function meth2en() {
		var json = {
			select : 'meth2en'
		}
		$.post("glad_api.php", json, function(data) {
			$('#stage').html(data);
			console.log(data);
		});
	}
		function st_mod2en() {
		var idno = $("#idno").val();
		var account = $("#account").val();
		var aioConceptName = $('#aioConceptName').val();
		if (idno == '' || account == '') {
			alert('Please enter complete information');
		} else {
			var json = {
				idno : idno,
				account : account,
				aioConceptName : aioConceptName,
				select : 'lose2en'
			}
			$.post("glad_api.php", json, function(data) {
				$('#static').html(data);
				console.log(data);
			})
		};
		//$("#idno").val("");
		//$("#account	").val("");
	}
	function st_moden() {
		var idno = $("#idno").val();
		var account = $("#account").val();
		var aioConceptName = $('#aioConceptName').val();
		if (idno == '' || account == '') {
			alert('Please enter complete information');
		} else {
			var json = {
				idno : idno,
				account : account,
				aioConceptName : aioConceptName,
				select : 'loseen'
			}
			$.post("glad_api.php", json, function(data) {
				$('#static').html(data);
				console.log(data);
			})
		};
		//$("#idno").val("");
		//$("#account	").val("");
	}
</script>