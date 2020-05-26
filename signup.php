<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>

  <title> Sign up | Tate </title>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/header.js"></script>
  <script src="js/footer.js"></script>

  <link rel="stylesheet" type="text/css" href="css/reset.css"/>
  <link rel="stylesheet" type="text/css" href="css/header.css"/>
  <link rel="stylesheet" type="text/css" href="css/footer.css"/>
  <link rel="shortcut icon" href="img/header/favicon.ico"/>
  <!--[if lte IE 8]>
	<link rel="stylesheet" type="text/css" href="css/i8.css"/>
  <![endif]-->
  <!--i8이하에서 배경색 투명도가 조절되지 않아 헤더색을 #f4f4f4 로 지정함-->

  <style>
	/* 모바일에서 reset.css에 있는 폰트가 안먹혀서 따로 줌*/
	@font-face{font-family:"Tate"; src:url("font/Tate-Regular.woff");}
	body{font-family:"Tate"; letter-spacing:1px;}
	/*######################### tateWrap #########################*/
	#wrap{width:100%; max-width:1920px; margin:0 auto;}

	/*######################## container + signupArea ####################*/
		#container{width:100%; margin:0 auto;}
			#signupArea{width:1200px; height:900px; margin:0 auto; padding-top:60px;}
				#signupArea h2{height:50px; text-align:center; font-size:40px; font-weight:400; letter-spacing:2px; padding:110px 0 80px;}
				#signupArea form{width:100%; height:500px;}
					#signupArea form .signup{width:100%; height:900px;}


	/*######################## Signup + leftArea####################*/
		.leftArea{width:590px; height:440px; float:left; margin-right:10px;}
			.leftArea label{display:block; width:100%; height:20px; font-size:16px;}
			.leftArea input[type="text"], input[type="email"], input[type="password"]{width:588px; height:38px; border:1px solid #ccc; text-indent:10px;}
			.leftArea .point{text-decoration:underline; font-size:14px;}

			.nameArea{width:100%; height:60px;}

			.idArea{width:100%; height:80px; margin-top:20px;}
				.idArea input#userid{width:488px; height:38px; float:left;}
				.idArea input#idchk{width:100px; height:40px; float:left; border:none; box-shadow:1px 1px 6px #ccc; color:#313131; background-color:#fff; font-size:14px; font-weight:bold; transition:background-color 0.3s ease-out;}

			.pwArea{width:100%; height:80px; margin-top:20px;}

			.repwArea{width:100%; height:60px; margin-top:30px;}

			.emailArea{width:100%; height:60px; margin-top:20px;}


	/*######################## Signup + rightArea ####################*/
		.rightArea{width:590px; height:440px; float:right; margin-left:10px;}
			.signupInfo{width:550px; height:270px; background-color:#f4f4f4;font-size:12px; padding:0 20px; margin-top:20px; overflow:auto; text-align:justify;}
					.signupInfo dl{width:100%; margin-bottom:20px;}
						.signupInfo dt{font-size:14px; font-weight:bold; line-height:40px; text-transform:uppercase;}
							.signupInfo dd{line-height:14px;}
								.signupInfo dd .larger{font-size:13px; line-height:30px;}
								.signupInfo dd li{list-style-type:disc; list-style-position:inside;}

			.chkArea{width:100%; height:50px; line-height:50px;}
				.chkArea label{margin-left:10px;}				
			.btnArea{width:100%; height:50px;}
				.btnArea input{width:100%; height:50px; border:none; color:#313131; background-color:#fff; box-shadow:1px 1px 6px #ccc; font-size:16px; font-weight:bold; transition:background-color 0.3s ease-out;}
			.loginArea{width:100%; height:50px; line-height:50px;}
				.loginArea a{text-decoration:underline;}

		/*############기능*/
		.idArea input#idchk:hover, .idArea input#idchk:focus{background-color:#f4f4f4;}
		.btnArea input:hover, .btnArea input:focus{
				background-image:-webkit-linear-gradient(bottom left, rgb(51,37,110) 10%, rgb(97,46,110) 50%, rgb(153,57,109) 70%);
				background-image:-ms-linear-gradient(bottom left, rgb(51,37,110) 10%, rgb(97,46,110) 50%, rgb(153,57,109) 70%);
				background-image:-moz-linear-gradient(bottom left, rgb(51,37,110) 10%, rgb(97,46,110) 50%, rgb(153,57,109) 70%);
				background-image:-o-linear-gradient(bottom left, rgb(51,37,110) 10%, rgb(97,46,110) 50%, rgb(153,57,109) 70%); color:#fff;}
		.loginArea a:hover, .loginArea a:focus{color:#803279;}

		
	/*############## footer #############*/
		#m_footerWrap{display:none;}
		#footerWrap{width:100%; height:330px;}
			#footer1Wrap{width:100%; height:280px; border-top:1px solid #ccc; border-bottom:1px solid #ccc;}
					
				#footer1{width:1250px; height:100%; margin:0 auto; }
					#footer1 h3{width:100%; height:20px; font-size:15px; padding:40px 0 20px;}/* 40+20+20 == 80px*/

						#footer1 .about{width:20%; height:100%; float:left;}
							#footer1 .about h3{width:100%; height:20px; font-size:15px; padding:40px 0 20px;}
							 #footer1 .about ul{width:100%; height:200px;}
								#footer1 .about li{width:100%; height:18px; margin-bottom:10px; font-size:14px;}

						#footer1 .support{width:20%; height:100%; float:left;}
							#footer1 .support h3{width:100%; height:20px; font-size:15px; padding:40px 0 20px;}
							#footer1 .support ul{width:100%; height:200px;}
								#footer1 .support li{width:100%; height:18px; margin-bottom:10px; font-size:14px;}

						#footer1 .join{width:34%; height:100%; float:left;}
							#footer1 .join ul{width:100%; height:40px;}
								#footer1 .join li{width:40px; height:40px; float:left; margin-right:10px;}

						#footer1 .stay{width:26%; height:100%; float:left;}
							#footer1 .stay label{vertical-align:middle;}
							#footer1 .stay input#email{width:180px; height:30px; text-indent:4px; background-color:#fff; border:1px solid #ccc; color:#777; vertical-align:middle;}
							#footer1 .stay input#emailBtn{width:80px; height:30px; box-shadow:1px 1px 6px #ccc; border:none; color:#313131; background-color:#fff;
								vertical-align:middle;
								transition:all 0.3s ease-out;}
							#footer1 .stay legend{display:none;}
							#footer1 .stay fieldset{border:none;}

					/*########기능*/
						input#emailBtn:hover, input#emailBtn:focus{
							background-image:-webkit-linear-gradient(bottom left, rgb(51,37,110) 10%, rgb(97,46,110) 50%, rgb(153,57,109) 70%);
							background-image:-ms-linear-gradient(bottom left, rgb(51,37,110) 10%, rgb(97,46,110) 50%, rgb(153,57,109) 70%);
							background-image:-moz-linear-gradient(bottom left, rgb(51,37,110) 10%, rgb(97,46,110) 50%, rgb(153,57,109) 70%);
							background-image:-o-linear-gradient(bottom left, rgb(51,37,110) 10%, rgb(97,46,110) 50%, rgb(153,57,109) 70%); color:#fff;}

			#footer2wrap{width:100%; height:50px;}

				#footer2{width:1250px; height:100%; margin:0 auto;}
					#footer2 .footerLogo{width:8%; height:42px; float:left; padding-top:8px;}
						#footer2 .footerLogo a img{width:100%;}

					 #footer2 .footerLink{width:92%; height:100%; float:left; padding-top:8px;}
						#footer2 .footerLink ul{width:100%; height:42px; text-align:right; line-height:42px;}

							#footer2 .footerLink li{display:inline; margin-left:14px;}
								#footer2 .footerLink li a{font-size:12px; padding:2px 4px;}
								#footer2 .footerLink li .bar{padding-left:12px; color:#ccc;}
  
  
  
	/*-------------------------- responsive web ---------------------*/

		/* 추가작업2 */
		@media all and (min-width:1301px) and (max-width:1700px){
			#headerWrap{height:84px;}
				#header{width:82%; height:100%; /*background-color:green;*/}
					h1{width:130px;/*100px*/top:10px;}

				.gotoTop{width:30px; height:30px; transform:rotate(-90deg); position:fixed; right:30px; bottom:50px; display:block;}

			/*###################### gnb #################*/
				#gnb{width:55%; margin-left:15%;}
					#gnb li{width:23%; margin-left:2%;}
					#gnb li:first-child{margin-left:25%;}
							#gnb li a{height:50px; padding-top:34px; font-size:14px;}

			
			/*###################### infoMenu #################*/
				#infoMenu{width:16%; margin-right:120px; float:right;}
					#infoMenu .infoMenu li{width:40%; float:right;}
					#infoMenu .infoMenu li a{font-size:13px;}

			
			/*###################### joinBtn #################*/
				#joinBtn{width:100px; height:100px;}
					#joinBtn p{border-radius:50px;}
						#joinBtn a{width:100px; height:70px; border-radius:50px; 
						padding-top:30px; font-size:15px;}
						#joinBtn .pass{top:-120px;}

		}

		/* 추가작업1 */
		@media all and (min-width:1025px) and (max-width:1300px){	
			#headerWrap{height:84px;}
				#header{width:82%; height:100%; /*background-color:violet;*/}
					h1{width:130px;/*100px*/top:10px;}

				.gotoTop{width:30px; height:30px; transform:rotate(-90deg); position:fixed; right:30px; bottom:50px; display:block;}

			/*###################### gnb #################*/
				#gnb{width:50%; margin-left:19%;}
					#gnb li{width:27%; margin-left:1%;}
					#gnb li:first-child{margin-left:16%;}
							#gnb li a{height:50px; padding-top:34px; font-size:14px;}

			
			/*###################### infoMenu #################*/
				#infoMenu{width:16%; margin-right:120px; float:right;}
					#infoMenu .infoMenu li a{font-size:13px;}

			
			/*###################### joinBtn #################*/
				#joinBtn{width:100px; height:100px;}
					#joinBtn p{border-radius:50px;}
						#joinBtn a{width:100px; height:70px; border-radius:50px; 
						padding-top:30px; font-size:15px;}
						#joinBtn .pass{top:-120px;}

		}

		/* 작업순서3: 태블릿PC 버전 */
		@media all and (min-width:768px) and (max-width:1024px){
			#skipNav{display:none;}
			#headerWrap{height:84px;}
				
					#header{width:100%; height:84px; /*background-color:gold;*/}
						h1{width:130px; top:10px;}

					.gotoTop{width:30px; height:30px; transform:rotate(-90deg); position:fixed; right:30px; bottom:50px; display:block;}

			/*###################### gnb #################*/
				#gnb{width:48%; margin-left:130px;}
					#gnb li{width:27%; margin-left:1%;}
					#gnb li:first-child{margin-left:17%;}
							#gnb li a{height:54px; padding-top:30px; font-size:14px;}

			
			/*###################### infoMenu #################*/
				#infoMenu{width:20%; margin-right:100px; float:left;}
					#infoMenu .infoMenu li a{font-size:13px;}


			/*###################### infoMenu : search #################*/
				

			
			/*###################### joinBtn #################*/
				#joinBtn{width:100px; height:100px;}
					#joinBtn p{border-radius:50px;}
						#joinBtn a{width:100px; height:70px; border-radius:50px; 
						padding-top:30px; font-size:15px;}
						#joinBtn .pass{top:-120px;}

			
			/*######################## container + signupArea ####################*/
				#signupArea{width:70%; height:1060px;}
					#signupArea h2{height:50px; font-size:36px; padding:60px 0 30px;}
					#signupArea form{width:100%; height:900px;}
						#signupArea form .signup{width:100%; height:680px;}
					

			/*######################## Signup + leftArea####################*/
				.leftArea{width:100%; height:440px; float:none; margin-right:0; }
				
					.leftArea input[type="text"], input[type="email"], input[type="password"]{width:100%;}
					.leftArea .point{text-decoration:underline; font-size:14px;}

					.idArea{height:80px; margin-top:20px;}
						.idArea input#userid{width:79%; height:38px;}
						.idArea input#idchk{width:20%; height:39px; font-size:14px;}
						.idArea .point{display:block; width:100%; clear:both; padding-top:5px;}

					.pwArea{height:80px;}
						.pwArea .point{display:block; width:100%; margin-top:3px;}

					.repwArea{height:60px;}
						
					.emailArea{height:60px;}

			/*######################## Signup + rightArea ####################*/
				.rightArea{width:100%; height:440px; float:none; margin-left:0;}
					.signupInfo{width:92%; height:300px;  padding:0 4%;}
						
					
					

			/*################## footer1 #################*/
				#footer1{width:95%;}
				#footer1 .about{width:20%; margin-left:5%;}
				#footer1 .support{width:20%; margin-left:5%;}
				#footer1 .join{width:45%; height:140px;}
				#footer1 .stay{width:45%; height:140px;}

			
			/*################## footer2 #################*/
				#footer2{width:95%;}
		}


		/* 작업순서2: 스마트폰 가로버전 */
		@media all and (min-width:481px) and (max-width:767px){
			#skipNav{display:none;}
			#headerWrap{height:60px;  position:static;}
				#forSearch{height:60px; overflow:visible;}
					#header{width:100%; height:60px;/* background-color:pink;*/}
						h1{width:120px; top:10px;}
						#gnb, #infoMenu, #joinBtn, #searchWrap{display:none;}
						.gotoTop{width:30px; height:30px; transform:rotate(-90deg); position:fixed; right:30px; bottom:50px; display:block;}
						#sideMenu{display:block;}

			/*################ sideMenu ##############*/
				#sideMenu{width:260px; height:60px;  float:right; position:absolute; right:0; top:0; z-index:1;}
			
				#sideMenuBtn{width:100%; height:60px;}
					#sideMenuBtn a{display:block; width:50px; height:40px; padding-top:20px; line-height:12px; float:right;}
						#sideMenuBtn a span{display:block; height:3px; width:30px; margin-bottom:7px; background-color:#333;}
						/* 사이드메뉴 버튼 클릭 전 addClass ≡모양*/
						.middleBarM{transform:rotate(0deg); opacity:1; transition:all 0.7s;}
						.topBarM{transform:rotate(0deg) translate(0,0);  transition:all 0.7s;}
						.bottomBarM{transform:rotate(0deg) translate(0,0); transition:all 0.7s;}

						/* 사이드메뉴 버튼 클릭 후 addClass x모양*/
						.middleBarX{transform:rotate(360deg); opacity:0; transition:all 0.7s;}
						.topBarX{transform:rotate(-45deg) translate(-7px,7px);  transition:all 0.7s;}
						.bottomBarX{transform:rotate(45deg) translate(-7px,-7px); transition:all 0.7s;}
			
			
					#sideMenu nav{width:100%; height:600px; background-color:rgba(20,20,20,0.9); color:#fff;}

					#sideSearchForm{width:95%; height:30px;}
					#sideSearchForm{padding:10px 0;}
					#sideSearchForm fieldset{border:none;}
					#sideSearchForm legend{display:none;}
					#sideSearchForm #sideSearch{width:82%; height:30px; border:none; text-indent:10px; margin-left:10px;}
					#sideSearchForm .searchBtn{display:inline-block; width:16px; height:16px; vertical-align:middle; margin-left:4px;}
						#sideSearchForm .searchBtn a{display:inline-block; width:100%; height:100%;}
							#sideSearchForm .searchBtn a img{width:100%; border:none;}

					#sideGnb{width:100%; height:130px;  border-bottom:1px solid #f4f4f4;}
						#sideGnb li{width:95%; height:40px; line-height:40px; text-align:right; padding-right:5%;}
							#sideGnb li a{font-size:15px; color:#fff;}

					#sideInfomenu{width:100%; height:80px;}
						#sideInfomenu li{width:95%; height:40px; line-height:40px; text-align:right; padding-right:5%;}
							#sideInfomenu li a{font-size:15px; color:#fff;}
		
			
			
			
			/*######################## container + signupArea ####################*/
				#signupArea{width:70%; height:900px; padding-top:0;}
					#signupArea h2{height:50px; font-size:24px; padding:60px 0 30px;}
					#signupArea form{width:100%; height:680px;}
						#signupArea form .signup{width:100%; height:680px;}
					

			/*######################## Signup + leftArea####################*/
				.leftArea{width:100%; height:380px; float:none; margin-right:0; }
					.leftArea label{font-size:14px;}
					.leftArea input[type="text"], input[type="email"], input[type="password"]{width:100%; height:28px;}
					.leftArea .point{text-decoration:underline; font-size:11px;}

					.idArea{height:85px; margin-top:10px;}
						.idArea input#userid{width:79%; height:28px;}
						.idArea input#idchk{width:20%; height:29px; font-size:13px;}
						.idArea .point{display:block; width:100%; clear:both; padding-top:5px;}

					.pwArea{height:60px; margin-top:10px;}
						.pwArea .point{display:block; width:100%; margin-top:3px;}

					.repwArea{height:50px; margin-top:15px;}
						
					.emailArea{height:50px; margin-top:15px;}


			/*######################## Signup + rightArea ####################*/
				.rightArea{width:100%; height:300px; float:none; margin-left:0;}
					.signupInfo{width:92%; height:200px; font-size:9px; padding:0 4%; margin-top:0; text-align:left; line-height:10px; letter-spacing:0.5px;}
							.signupInfo dl{margin-bottom:10px;}
								.signupInfo dt{font-size:12px; font-weight:bold; line-height:30px;}

					.chkArea{height:40px; line-height:30px; font-size:12px;}
						.chkArea input{vertical-align:middle;}				
					.btnArea{height:35px;}
						.btnArea input{width:100%; height:35px; font-size:15px;}
					.loginArea{height:30px; line-height:30px; font-size:12px;}

			
		
		
			/*################## m_footer1 #################*/
				#footerWrap{display:none;}
				#m_footerWrap{display:block; width:100%;}
					#m_footer1Wrap{width:100%; border-top:1px solid #ccc; border-bottom:1px solid #ccc; padding-top:10px; margin-bottom:10px; }
						#m_footer1{width:90%; margin:0 auto;}
							#m_footer1 div{width:100%; margin-bottom:10px;}
								#m_footer1 h3{width:100%; line-height:20px; font-size:11px; padding:2px 0; cursor:pointer; margin-bottom:6px;}
									#m_footer1 h3 p{width:20px; height:20px; float:right; overflow:hidden;}
										#m_footer1 h3 p span{display:block; width:20px; height:20px; font-size:20px; text-align:right; margin-left:-5px;}
								#m_footer1 .about ul, #m_footer1 .support ul{width:100%;}
									#m_footer1 .about ul li, #m_footer1 .support ul li{line-height:16px; font-size:9px; margin-bottom:2px; text-indent:10px;}'

								#m_footer1 .join ul{width:100%; padding-top:10px; outline:1px solid red;  background-color:green;}
								#m_footer1 .join ul:after{content:""; display:block; clear:both;}
									#m_footer1 .join ul li{width:30px; height:30px; float:left; margin-left:10px;}
										#m_footer1 .join ul li img{width:100%;}

								#m_footer1 .stay .emailBox{padding-top:10px;}
									#m_footer1 .stay label{vertical-align:middle; font-size:14px; margin-left:10px;}
									#m_footer1 .stay input#email{width:180px; height:26px; text-indent:8px; background-color:#fff; border:1px solid #ccc; color:#777; vertical-align:middle; font-size:12px;}
									#m_footer1 .stay input#emailBtn{width:80px; height:28px; box-shadow:1px 1px 6px #ccc; border:none; color:#313131; background-color:#fff; font-size:13px;
										vertical-align:middle;
										transition:all 0.3s ease-out;}
									#m_footer1 .stay legend{display:none;}
									#m_footer1 .stay fieldset{border:none;}

				
			/*################## m_footer2 #################*/
				#m_footer2Wrap{width:90%; margin:0 auto;}
					#m_footer2{width:100%; height:30px;}
					#m_footer2:after{content:""; display:block; clear:both;}
						#m_footer2 .footerLogo{width:100px;}
							#m_footer2 .footerLogo{width:15%; float:left;}
								#m_footer2 .footerLogo a{display:block; width:40px;}
									#m_footer2 .footerLogo a img{width:100%;}

						#m_footer2 .footerLink{width:85%; float:left;}
							#m_footer2 .footerLink ul{width:100%; text-align:right;}
								#m_footer2 .footerLink li{display:inline;}
									#m_footer2 .footerLink li a{font-size:10px;}
									#m_footer2 .footerLink li .bar{color:#ccc; padding:0 5px; vertical-align:middle;}
		}



		/* 작업순서1: 스마트폰 세로버전 */
		@media all and (min-width:320px) and (max-width:480px){
			#skipNav{display:none;}
			#headerWrap{height:60px; position:static; /*background-color:green;*/}
				#forSearch{height:60px; overflow:visible;}
					#header{width:100%; height:60px;}
						h1{width:100px; top:8px;}
						#gnb, #infoMenu, #joinBtn, #searchWrap{display:none;}
						.gotoTop{width:30px; height:30px; right:30px; bottom:30px; padding:5px;}
						#sideMenu{display:block;}

			/*################ sideMenu ##############*/
				#sideMenu{width:260px; height:60px;  float:right; position:absolute; right:0; top:0; z-index:1;}
			
				#sideMenuBtn{width:100%; height:60px;}
					#sideMenuBtn a{display:block; width:50px; height:40px; padding-top:20px; line-height:12px; float:right;}
						#sideMenuBtn a span{display:block; height:3px; width:30px; margin-bottom:7px; background-color:#333;}
						/* 사이드메뉴 버튼 클릭 전 addClass ≡모양*/
						.middleBarM{transform:rotate(0deg); opacity:1; transition:all 0.7s;}
						.topBarM{transform:rotate(0deg) translate(0,0);  transition:all 0.7s;}
						.bottomBarM{transform:rotate(0deg) translate(0,0); transition:all 0.7s;}

						/* 사이드메뉴 버튼 클릭 후 addClass x모양*/
						.middleBarX{transform:rotate(360deg); opacity:0; transition:all 0.7s;}
						.topBarX{transform:rotate(-45deg) translate(-7px,7px);  transition:all 0.7s;}
						.bottomBarX{transform:rotate(45deg) translate(-7px,-7px); transition:all 0.7s;}
			
			
					#sideMenu nav{width:100%; height:600px; background-color:rgba(20,20,20,0.9); color:#fff;}

					#sideSearchForm{width:95%; height:30px;}
					#sideSearchForm{padding:10px 0;}
					#sideSearchForm fieldset{border:none;}
					#sideSearchForm legend{display:none;}
					#sideSearchForm #sideSearch{width:82%; height:30px; border:none; text-indent:10px; margin-left:10px;}
					#sideSearchForm .searchBtn{display:inline-block; width:16px; height:16px; vertical-align:middle; margin-left:4px;}
						#sideSearchForm .searchBtn a{display:inline-block; width:100%; height:100%;}
							#sideSearchForm .searchBtn a img{width:100%; border:none;}

					#sideGnb{width:100%; height:130px;  border-bottom:1px solid #f4f4f4;}
						#sideGnb li{width:95%; height:40px; line-height:40px; text-align:right; padding-right:5%;}
							#sideGnb li a{font-size:15px; color:#fff;}

					#sideInfomenu{width:100%; height:80px;}
						#sideInfomenu li{width:95%; height:40px; line-height:40px; text-align:right; padding-right:5%;}
							#sideInfomenu li a{font-size:15px; color:#fff;}
			
			
			
			/*######################## container + signupArea ####################*/
				#signupArea{width:90%; height:900px; padding-top:0;}
					#signupArea h2{height:50px; font-size:24px; padding:60px 0 30px;}
					#signupArea form{width:100%; height:680px;}
						#signupArea form .signup{width:100%; height:680px;}
					

			/*######################## Signup + leftArea####################*/
				.leftArea{width:100%; height:380px; float:none; margin-right:0; }
					.leftArea label{font-size:14px;}
					.leftArea input[type="text"], input[type="email"], input[type="password"]{width:100%; height:28px;}
					.leftArea .point{text-decoration:underline; font-size:11px;}

					.idArea{height:85px; margin-top:10px;}
						.idArea input#userid{width:69%; height:28px;}
						.idArea input#idchk{width:30%; height:28px; font-size:13px;}
						.idArea .point{display:block; width:100%; height:16px; clear:both; padding-top:5px;}

					.pwArea{height:60px; margin-top:10px;}
						.pwArea .point{display:block; width:100%; margin-top:3px;}

					.repwArea{height:50px; margin-top:15px;}
						
					.emailArea{height:50px; margin-top:15px;}


			/*######################## Signup + rightArea ####################*/
				.rightArea{width:100%; height:300px; float:none; margin-left:0;}
					.signupInfo{width:92%; height:200px; font-size:9px; padding:0 4%; margin-top:0; text-align:left; line-height:10px; letter-spacing:0.5px;}
							.signupInfo dl{margin-bottom:10px;}
								.signupInfo dt{font-size:12px; font-weight:bold; line-height:30px;}

					.chkArea{height:40px; line-height:12px; font-size:12px; margin-top:10px;}
						.chkArea input{vertical-align:middle;}				
					.btnArea{height:35px;}
						.btnArea input{width:100%; height:35px; font-size:15px;}
					.loginArea{height:30px; line-height:30px; font-size:12px;}


			
			/*################## m_footer1 #################*/
				#footerWrap{display:none;}
				#m_footerWrap{display:block; width:100%;}
					#m_footer1Wrap{width:100%; border-top:1px solid #ccc; border-bottom:1px solid #ccc; padding-top:10px; margin-bottom:10px; }
						#m_footer1{width:90%; margin:0 auto;}
							#m_footer1 div{width:100%; margin-bottom:10px;}
								#m_footer1 h3{width:100%; line-height:20px; font-size:13px; padding:5px 0; cursor:pointer; margin-bottom:6px;}
									#m_footer1 h3 p{width:20px; height:20px; float:right; overflow:hidden;}
										#m_footer1 h3 p span{display:block; width:20px; height:20px; font-size:20px; text-align:right; margin-left:-5px;}
								#m_footer1 .about ul, #m_footer1 .support ul{width:100%;}
									#m_footer1 .about ul li, #m_footer1 .support ul li{line-height:20px; font-size:12px; margin-bottom:5px; text-indent:10px;}'

								#m_footer1 .join ul{width:100%; padding-top:10px; outline:1px solid red;  background-color:green;}
								#m_footer1 .join ul:after{content:""; display:block; clear:both;}
									#m_footer1 .join ul li{width:30px; height:30px; float:left; margin-left:10px;}
										#m_footer1 .join ul li img{width:100%;}

								#m_footer1 .stay .emailBox{padding-top:10px;}
									#m_footer1 .stay label{vertical-align:middle; font-size:12px; margin-left:10px;}
									#m_footer1 .stay input#email{width:160px; height:26px; text-indent:8px; background-color:#fff; border:1px solid #ccc; color:#777; vertical-align:middle; font-size:11px;}
									#m_footer1 .stay input#emailBtn{width:70px; height:28px; box-shadow:1px 1px 6px #ccc; border:none; color:#313131; background-color:#fff; font-size:12px;
										vertical-align:middle;
										transition:all 0.3s ease-out;}
									#m_footer1 .stay legend{display:none;}
									#m_footer1 .stay fieldset{border:none;}

				
			/*################## m_footer2 #################*/
				#m_footer2Wrap{width:90%; margin:0 auto;}
					#m_footer2{width:100%; height:30px;}
					#m_footer2:after{content:""; display:block; clear:both;}
						#m_footer2 .footerLogo{width:100px;}
							#m_footer2 .footerLogo{width:15%; float:left;}
								#m_footer2 .footerLogo a{display:block; width:40px;}
									#m_footer2 .footerLogo a img{width:100%;}

						#m_footer2 .footerLink{width:85%; float:left;}
							#m_footer2 .footerLink ul{width:100%; text-align:right;}
								#m_footer2 .footerLink li{display:inline;}
									#m_footer2 .footerLink li a{font-size:10px;}
									#m_footer2 .footerLink li .bar{color:#ccc; padding:0 5px; vertical-align:middle;}
			
		}
  </style>

   <!--
		01) ID중복체크 영역
			
			userid 공간이 비어있다면 아이디가 비어있습니다. 알림창띄우기
			userid 공간으로 포커스 이동하기
				※ 아이디 중복체크 => 아이디 필수 입력 이라는 글씨로 바꾸기
			
			userid 공간이 비어있지 않다면 중복검사!
  -->
  <script>
		function idChkBtn(){
			//	1) userid공간을 id객체로 만들기 
			//	2) ※ 아이디 중복체크 글씨를 , 아이디 필수입력이라는 글씨로 바꾸기 
			//			id객체로 만들기

			var userid = document.getElementById("userid");
			var idPoint = document.getElementById("idPoint");
			/*
				응용문제
					userid공간이 비어있다면 아이디가 비어있습니다. 알림창띄우기
					userid공간으로 focus 이동하기	
						※ 아이디 중복체크 => 아이디 필수 입력 이라는 글씨로 바꾸기

			*/
			if(userid.value ==""){
				alert("The space for id is empty");
				userid.focus();
				idPoint.innerHTML="<strong style='color:red; font-size=12px;'> Please insert id</strong>";
			}
			else{ 
				// 아이디를 입력받는 부분에 대한 값 작성하기
				// 중복체크나 가입을 확인하는 부분의 영역이 form으로 작성되어 있음
				
				xmlhttp = new XMLHttpRequest(); 
				xmlhttp.open("GET","idDouble.php?q="+userid.value, true);

				xmlhttp.onreadystatechange = function(){
					if(xmlhttp.readyState == 4&& xmlhttp.status ==200){
						idPoint.innerHTML = xmlhttp.responseText;
					}
				
				};
				
				xmlhttp.send();
			}
		}	

		function passwordChk(){
			alert(userpw.value);
			var userpw = document.getElementById("userpw");
			var userRepw= document.getElementById("userRepw");

			if(userpw.value != userRepw.value){		
				alert("Retype Password is not same as password");
			}
		}
  </script>

 </head>

 <body>
	<div id="wrap">

		<header id="headerWrap">
			<div id="forSearch">	
				<div id="header">
					<!--##############   h1    ##############-->
					<h1>
						<a href="index.html" title="Return to the Tate hompage">
							<img src="img/header/logo.png" alt="Tate logo"/>
						</a>
					</h1>

					<!--##############   gnb    ##############-->
					<h2 class="outline">Main menu</h2>
					<nav id="gnb">
						<ul>		
							<li class="art">					
								<h3 class="outline">ART&amp;ARTISTS</h3>
								<a href="art_artists.html" title="ART&amp;ARTISTS">ART &amp; ARTISTS</a>
							</li>
							<li class="exh">
								
								<h3 class="outline">EXHIBITIONS &amp; EVENTS</h3>
								<a href="ex_ev.html" title="EXHIBITIONS&amp;EVENTS">EXHIBITIONS &amp; EVENTS</a>
							</li>
							<li class="plan">
							
								<h3 class="outline">PLAN YOUR VISIT</h3>
								<a href="plan_your_visit.html" title="PLAN YOUR VISIT">PLAN YOUR VISIT</a>
							</li>
						</ul>
						<p class="gnbBar"></p>
					</nav>

					<!--##############  infoMenu   ##############-->
					<h2 class="outline">Personal &amp; Search menu</h2>
					<nav id="infoMenu">
						<ul class="infoMenu">
							<li>
								<h3 class="outline">Login</h3>
								<a href="login.html" title="Login">
									<img src="img/header/login.png" alt="login icon"/> Login
								</a>
							</li>
							<li>
								<h3 class="outline">Search</h3>
								<a class="search" href="#none" title="Search">
									<img src="img/header/search.png" alt="search icon"/> Search
								</a>
							</li>
						</ul>
						<div id="searchWrap">
							<div id="searchArea">
								<div id="searchForm">
									<input id="search" type="text" name="search" title="search" placeholder="search here :)" autofocus>
									<p class="searchBtn" onclick="searching();">
										<a href="#none" title="Search" >
											<img src="img/header/search64.png" alt="search icon" "/>
										</a>
									</p>
										
									<div id="searchWord">
										<h4>Suggested terms:</h4>
										<ul>
											<li><a href="#none" title="Vincent van Gogh">Vincent van Gogh<a/></li>
											<li><a href="#none" title="Andy Warhol">Andy Warhol<a/></li>
											<li><a href="#none" title="Support">Support<a/></li>
											<li><a href="#none" title="Exhibition">Exhibition<a/></li>
											<li><a href="#none" title="Rene magritte">Rene magritte<a/></li>
											<li><a href="#none" title="Feminist art">Feminist art<a/></li>
											<li><a href="#none" title="Impressionism">Impressionism<a/></li>
											<li><a href="#none" title="Pop art">Pop art<a/></li>
											<li><a href="#none" title="Abstract art">Abstract art<a/></li>
											<li><a href="#none" title="David hockney">David hockney<a/></li>
										</ul>
									</div>
								</div>
								<p class="closeBtn">
									<a href="#none" title="close">
										<img src="img/header/close64.png" alt="close icon"/>
									</a>
								</p>
							</div>
						</div>
					</nav>
					
					<!--##############  joinBtn  ##############-->
					<h3 class="outline">Become a memeber</h3>				
					<div id="joinBtn">
						<p>
							<a href="signup.html" title="become a member">
								BECOME A MEMBER
								<span class="pass"></span>
							</a>
						</p>
					</div>

					<!--############## sideBtn ##############-->
					<div id="sideMenu">
						<div id="sideMenuBtn">
							<a href="#none" title="sideMenu">
								<span class="topBar"></span>
								<span class="middleBar"></span>
								<span class="bottomBar"></span>
							</a>
						</div>
						<nav>			
							<div id="sideSearchForm" action="#none" method="post">
								<input id="sideSearch" type="text" name="sideSearch" title="sideSearch" placeholder="search here :)">
								<p class="searchBtn" onclick="sideSearching();">
									<a href="#none" title="Search">
										<img src="img/header/search_white.png" alt="search icon"/>
									</a>
								</p>
							</div>
							<ul id="sideGnb">		
								<li class="art">					
									<h3 class="outline">ART&amp;ARTISTS</h3>
									<a href="art_artists.html" title="ART&amp;ARTISTS">ART &amp; ARTISTS</a>
								</li>
								<li class="exh">
									
									<h3 class="outline">EXHIBITIONS &amp; EVENTS</h3>
									<a href="ex_ev1.html" title="EXHIBITIONS&amp;EVENTS">EXHIBITIONS &amp; EVENTS</a>
								</li>
								<li class="plan">
								
									<h3 class="outline">PLAN YOUR VISIT</h3>
									<a href="plan_your_visit.html" title="PLAN YOUR VISIT">PLAN YOUR VISIT</a>
								</li>
							</ul>
							<ul id="sideInfomenu">
								<li class="Login">					
									<h3 class="outline">Login</h3>
									<a href="login.html" title="login">Login</a>
								</li>
								<li class="become a member">					
									<h3 class="outline">Become a member</h3>
									<a href="signup.html" title="become a member">Become a member</a>
								</li>
							</ul>
						</nav>

					</div>
			
				</div>
			</div>
		</header>
		
		<div id="container">
			<section id="signupArea">
				<h2>CREATE A NEW TATE PROFILE</h2>
				<form action="signup_control.php" method="post">

					<div class="signup">
						<div class="leftArea">
							<p class="nameArea">
								<label for="username">Name*</label>
								<input id="username" type="text" name="username" title="Name must be less than 8 characters" autocomplete="off" autofocus required maxlength="8"/>
							</p>
							<p class="idArea">
								<label for="userid">ID*</label>
								<input id="userid" type="text" name="userid" title="ID must be at least 6 characters." autocomplete="off" minlength="6" maxlength="12" required/>
								<input id="idchk" type="button" value="ID check" title="id check" onclick="idChkBtn();"/>
								<span class="point">ID must be at least 6 characters including English and numbers.</span><span id="idPoint"></span>
							</p>
							<p class="pwArea">
								<label for="userpw">Password*</label>
								<input id="userpw" type="password" name="userpw" title="Password must be at least 8 characters." autocomplete="off" minlength="8" maxlength="12" required/>
								<span class="point">Password must be at least 8 characters.</span><span id="pwPoint"></span>
							</p>
							<p class="repwArea">
								<label for="userRepw">Retype Password*</label>
								<input id="userRepw" type="password" name="userRepw" title="Retype Password must be same as the upper password" minlength="8" maxlength="12" autocomplete="off" required/>
							</p>
							<p class="emailArea">
								<label for="useremail">Email*</label>
								<input id="useremail" type="email" name="useremail" title="email" autocomplete="off" required onclick="passwordChk();"/>
							</p>
						</div>
						<div class="rightArea">
							<div class="signupInfo">
								<dl>
									<dt>Tate’s website Terms and Conditions</dt>
									<dd>
										These terms and conditions will apply to your access and use of our website at tate.org.uk. By using our website, you accept that you will be bound to the terms and conditions of use in full. If you do not agree to any of these terms and conditions, you must not access, use and/or contribute to our website. If you have any questions about these terms and conditions, you can contact us using the details set out below.<br/><br/>

										1. The Board of Trustees of the Tate Gallery ('Tate') operates tate.org.uk. Our principal place of business is at Millbank, London SW1P 4RG. If you have any questions please refer to our frequently asked questions. If the answers there do not address your particular concern, you may contact us.<br/><br/>

										2. Tate may change these terms from time to time so we recommend that you should check them regularly. We will always state at the bottom of these terms the date on which they were last updated and/or amended. Your continued use of tate.org.uk will be deemed acceptance of the updated or amended terms. If you do not agree to the changes, you should cease using this website.
									</dd>
								</dl>
								<dl>
									<dt>Licence to use tate.org.uk</dt>
									<dd>
										3. You agree to use tate.org.uk only for lawful purposes and in a considerate and responsible way that does not infringe the rights of, restrict or inhibit anyone else's use and enjoyment of tate.org.uk. Prohibited behaviour includes:<br/>
										<ul>
											<li>using the website for any purpose that is against the law</li>
											<li>harassing or causing distress or inconvenience to any person</li>
											<li>transmitting defamatory, libellous, racist, obscene, pornographic, indecent or offensive or menacing content which could cause anxiety to anyone else</li>
											<li>using the website in any way that cause interruption or damage to the online services or renders them impaired or less efficient</li>
											<li>using the website in any way that could cause damage or disruption to another user’s computer</li>
											<li>using the website to transmit or upload computer viruses or other harmful files or programmes</li>
											<li>collecting data about other users</li>
											<li>transmitting or sending unsolicited commercial communications such as junk mail or spam.</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt>Minimum age/parental consent</dt>
									<dd>
										4. Until you are 18 years old, by using our online services, you certify that your parents have or legal guardian has consented to your use and agree to these terms on your behalf. From time to time, Tate may create specific online communities, some of which will be restricted access and may only be offered to users aged 13 or over. Parental discretion is advised and we recommend that you review these terms with your parents/guardian before using our website. We may require your parents or legal guardian to provide a written acknowledgement of these terms on your behalf before we provide you with part or all of our online services.
									</dd>
								</dl>
								<dl>
									<dt>Intellectual property</dt>
									<dd>
										5. All copyright, trade marks, design rights, patents and other intellectual property rights (registered and unregistered) in and on tate.org.uk and all content (including all applications) located on the site shall remain vested in Tate or its licensors (which includes other users). You may not copy, reproduce, republish, disassemble, decompile, reverse engineer, download, post, broadcast, transmit, make available to the public, or otherwise use tate.org.uk content in any way except for your own personal, non-commercial use. In certain prescribed circumstances, you may adapt, alter or create a derivative work from any tate.org.uk content for your own personal, non-commercial use, with the prior written permission of Tate which will be indicated against the relevant tate.org.uk content.<br/><br/>

										6. The names, images and logos identifying Tate or third parties and their products and services are subject to copyright, design rights and trade marks of Tate and/or third parties. Nothing contained in these terms shall be construed as conferring any licence or right to use any trade mark, design right or copyright of Tate or any other third party.
									</dd>
								</dl>
								<dl>
									<dt>Contributions to the Tate website / user generated content</dt>
									<dd>
										7. By sharing and uploading any contribution (including any text, photographs, graphics, video or audio-visual material) with Tate you agree to grant to Tate, free of charge, permission to use the material in any way it wants (including modifying and adapting it for operational and editorial reasons) for Tate services in any existing or future media worldwide (including on Tate’s site accessed by international users) and in perpetuity. You waive any moral rights in your contribution in order to permit Tate to edit your material as appropriate. You also grant to Tate the right to sub-license these rights to third parties. We won't use your content for commercial purposes but we may use your content to promote our platform. If your content contains third party material e.g. images, video, music etc you must have obtained the necessary third party permissions to use the material.<br/>
										<ul>
											<li>Flickr terms of use</li>
											<li>Soundcloud of use</li>
											<li>Vimeo terms of use</li>
											<li>YouTube terms of use</li>
										</ul><br/>
										8. Copyright in your contribution will remain with you and this permission is not exclusive, so you can continue to use the material in any way including allowing others to use it, including licensing that material to other websites.<br/><br/>

										9. In order that Tate can use your contribution, you confirm that your contribution is your own original work, is not defamatory and does not infringe any UK laws, that you have the right to give Tate permission to use it for the purposes specified above, and that you have the consent of anyone who is identifiable in your contribution or the consent of their parent / guardian if they are under 18. For the avoidance of doubt, the content must not infringe any third party’s legal rights.<br/><br/>

										10. If you do not want to grant Tate the permission set out above on these terms, please do not submit or share your contribution to or with tate.org.uk.<br/><br/>

										11. Tate does not necessarily (and is not obliged to) pre-moderate all material submitted by you to tate.org.uk, however, Tate reserves the right to:
										<ul>
											<li>monitor any material submitted to our website, regardless of any public / private settings attributed by you</li>
											<li>edit or remove any material submitted to our website without prior notice or any liability to you</li>
										</ul>
									</dd>
								</dl>
								<dl>
									<dt>Tate communities</dt>
									<dd>
										12. In order to participate in and contribute to selected Tate communities you may be required to register with tate.org.uk and to choose a password and username for login and then a display name. Please be aware that your Tate Community profile will be made public. You are responsible for keeping your password and other account details secure and secret. Please notify us immediately if you become aware of any unauthorised use of your account. Any personal information supplied to tate.org.uk as part of this registration process and/or any other interaction with us will be collected, stored and used in accordance with the Tate Privacy Policy.<br/><br/>

										13. You agree to use Tate communities (including message boards) in accordance with the following Community Rules. These apply across all Tate community sites and services. You should, however, read the local house rules of the particular site or service you're using, as there may be some local variations to these Community Rules. Tate reserves the right to delete accounts that are in breach of Community Rules. If you no longer want to have an account within the Tate Community then do contact us at webmaster@tate.org.uk requesting deletion of your account and we will do this for you.<br/><br/>

										<span class="larger">(I) ABOUT YOUR POSTS:</span>
										<ul>
											<li>Contributions must be civil and tasteful.</li>
											<li>No disruptive, offensive or abusive behaviour: your contributions must be constructive and polite, not with the intention of causing trouble.</li>
											<li>No unlawful or objectionable content: the posting of unlawful, harassing, defamatory, abusive, threatening, harmful, obscene, profane, sexually oriented, racially offensive or otherwise objectionable material is not acceptable.</li>
											<li>Be patient: users of all ages and abilities may be taking part in the relevant Tate community.</li>
											<li>No spamming or off-topic material: we don't allow the submission of the same or very similar contributions many times. Please don't re-submit your contribution to more than one discussion, or contribute off-topic material in subject-specific areas.</li>
											<li>No commercial advertising, marketing or promoting is permitted.</li>
											<li>Contributions containing languages other than English may be removedunless allowed in the relevant local house rules.</li>
											<li>No impersonation of other users is permitted.</li>
											<li>No inappropriate (e.g. vulgar, offensive etc) user names.</li>
											<li>URLs (web site addresses) can only be posted if allowed under any relevant local house rules.</li>
											<li>Deliberate misuse of the complaints facility is not permitted. If you persist in doing this, action may be taken against your account.</li>
										</ul><br/>
										<span class="larger">(II) YOUR TATE ACCOUNT:</span><br/>
										If you use multiple logins for the purpose of disrupting a community or annoying other users you may have action taken against all of your accounts.<br/><br/>

										All accounts must be registered with a valid personal email address that you access regularly so that moderation emails can be sent to you. Accounts registered with someone else's email address, or with temporary email addresses may be closed without notice. We may require users to re-validate their account if we believe they have been using an invalid email address.<br/><br/>

										Tate reserves the right to close accounts if any user is seen to be using proxy IPs (Internet Protocol addresses) in order to attempt to hide the use of multiple Tate accounts, or if a non UK based user pretends to be a UK user, or disrupts any of our services in any way.<br/><br/>

										<span class="larger">(III) ONLINE SAFETY:</span><br/>
										We advise that you never reveal any personal information about yourself or anyone else (for example: full name, telephone number, postal address, home address or email address or any other details that would allow you to be personally identified) in any Tate community.<br/><br/>

										<span class="larger">(IV) LAWFUL USE</span><br/>
										<ul>
											<li>You may not submit or share any defamatory or illegal material of any nature in tate.org.uk communities. This includes text, graphics, video, programmes or audio-visual material.</li>
											<li>Contributing material to a Tate community with the intention of committing or promoting an illegal act is strictly prohibited.</li>
											<li>You agree to submit to or share with Tate communities only contributions which are your own original work. You must not violate, plagiarise, or infringe the rights of Tate or third parties including copyright, trade mark, trade secrets, privacy, publicity, personal or proprietary rights.</li>
										</ul><br/>
										<span class="larger">(V) UNDER 18S:</span><br/>
										We are concerned about the safety of all users of tate.org.uk but children in particular require special considerations. Parents and legal guardians who allow their children to participate in Tate Communities must supervise their children’s online activity. We remind parents and legal guardians that it is their responsibility to determine whether or not particular areas of the website are suitable for children. Children under 18 must have parent or legal guardian permission before taking part in any Tate Community. We remind children to never reveal any personal information about yourself or any one else, including photographs of yourself, the name and address of your school, your telephone number, your full name, home address, postal address or email address to the online Tate Community.<br/><br/>

										<span class="larger">(VI) IF YOU BREACH THESE COMMUNITY RULES:</span><br/>
										Tate reserves the right to suspend or terminate your access to our online services or any aspect of them if you fail to comply with the Community Rules or we have reasonable grounds to believe you are likely to breach them.<br/><br/>

										If you submit or share any offensive or inappropriate content to or with any Tate communities or anywhere else on tate.org.uk or otherwise engage in any disruptive behaviour on tate.org.uk, and Tate considers such behaviour to be serious and/or repeated, Tate may use whatever information that is available to it about you to stop any further such infringements. This may include informing relevant third parties such as your employer, school or email provider about the infringement(s).<br/><br/>

										Tate reserves the right to delete any contribution, or take action against any Tate account, at any time, for any reason.
									</dd>
								</dl>
								<dl>
									<dt>Complaints and take down policy</dt>
									<dd>
										14. You can contact us to make a complaint about any aspect of our online services or if you think your or a third party’s copyright has been infringed by our online service. Please submit full details to the following email address: webmaster@tate.org.uk. If you have a complaint about an item of content that has been posted or uploaded by another user, you may click on the flag next to the item and select the appropriate category of activity about the complaint.
									</dd>
								</dl>
								<dl>
									<dt>Privacy and data protection</dt>
									<dd>
										15. Tate complies with all applicable UK and EU data protection legislation in force in respect of any personal information you submit to us. The personal details you submit to us will only be used for the specified purposes indicated to you and will not be passed onto unauthorised third parties without your explicit consent. You can contact us to amend or remove any information you submit to us. If you want Tate to remove all of you personal information, you may do so by submitting your name, user name, email address and telephone number and requesting the deactivation of your account to this email address: webmaster@tate.org.uk. If you want to unsubscribe from newsletters/other email then click on the 'unsubscribe' link which can be usually found at the bottom of the relevant communication.
									</dd>
								</dl>
								<dl>
									<dt>Competitions</dt>
									<dd>
										16. If you enter a Tate competition, Tate will alert you to the specific competition terms and conditions that apply.
									</dd>
								</dl>
								<dl>
									<dt>Third party websites</dt>
									<dd>
										17. Our website may contain links to other third party websites that are not owned or controlled by Tate. These links are provided for your convenience of access. If you use those links you will leave Tate’s online services and you visit any linked site at your own risk. Tate is not responsible for any content, products or services available on any other websites.
									</dd>
								</dl>
								<dl>
									<dt>Disclaimers and limitation of liability</dt>
									<dd>
										18. The majority of content posted in Tate Communities is user generated. The views expressed are those of the user and unless specifically stated are not those of Tate. Tate is not responsible for any content posted by members of the public on tate.org.uk or for the availability or content of any third party sites that are accessible through tate.org.uk Any links to third party websites from tate.org.uk do not amount to any endorsement of that site by Tate and any use of that site by you is at your own risk.<br/><br/>

										19. Tate content, including the information, names, images, pictures, logos and icons regarding or relating to Tate, its products and services (or to third party products and services), is provided "as is' and on an 'as available' basis. To the extent permitted by law, Tate excludes all representations and warranties (whether express or implied by law), including the implied warranties of satisfactory quality, fitness for a particular purpose, non-infringement, compatibility, security and accuracy. Tate does not guarantee the completeness or performance of the website or any of the content. While we try to ensure that all content provided by Tate is correct at the time of publication no responsibility is accepted by or on behalf of Tate for any errors, omissions or inaccurate content on the website.<br/><br/>

										20. Nothing in these terms limits or excludes Tate’s liability for death or personal injury caused by its proven negligence. Subject to the previous sentence, Tate shall not be liable for any of the following losses or damage (whether such damage or losses were foreseen, foreseeable, known or otherwise): (a) loss of data; (b) loss of revenue or anticipated profits; (c) loss of business; (d) loss of opportunity; (e) loss of goodwill or injury to reputation; (f) losses suffered by third parties; or (g) any indirect, consequential, special or exemplary damages arising from the use of tate.org.uk regardless of the form of action.<br/><br/>

										21. Tate does not warrant that functions available on tate.org.uk will be uninterrupted or error free, that defects will be corrected, or that tate.org.uk or the server that makes it available are free of viruses or bugs. You acknowledge that it is your responsibility to implement sufficient procedures and virus checks (including anti-virus and other security checks) to satisfy your particular requirements for the accuracy of data input and output.
									</dd>
								</dl>
								<dl>
									<dt>General</dt>
									<dd>
										22. If any of these terms are determined to be illegal, invalid or otherwise unenforceable by reason of the laws of any state or country in which these terms are intended to be effective, then to the extent and within the jurisdiction in which that term is illegal, invalid or unenforceable, it shall be severed and deleted from these terms and the remaining terms shall survive and continue to be binding and enforceable.<br/><br/>

										23. The failure or delay of Tate to exercise or enforce any right in these terms does not waive the Tate’s right to enforce that right.<br/><br/>

										24. These terms shall be governed by and interpreted in accordance with English law and you agree with Tate to submit to the exclusive jurisdiction of the English courts.
									</dd>
								</dl>
								<dl>
									<dt>General</dt>
									<dd>
										25. Tickets are valid for the date and time stated. Please check your tickets on receipt as mistakes cannot always be rectified<br/><br/>

										26. Tickets are for personal use and may not be resold or exchanged, nor money refunded<br/><br/>

										27. There is no re-admission to the event or exhibition<br/><br/>

										28. Tate reserves the right to refuse admission or terminate a visit<br/><br/>

										29. By attending an event or exhibition, ticket holders consent to being photographed or filmed incidentally and to Tate’s publication or broadcast of any such photographs or film
									</dd>
								</dl>
								<dl>
									<dt>Contact Tate about these terms of use</dt>
									<dd>
										Digital Director<br/>
										Tate<br/>
										Millbank<br/>
										London SW1P 4RG<br/><br/>

										Email : webmaster@tate.org.uk
									</dd>
								</dl>
							</div>
							<p class="chkArea">
								<input id="signupChk" type="checkbox" name="signupChk" required/><label for="signupChk">I agree with Tate's website terms and conditions</label>
							</p>
							<p class="btnArea">
								<input id="signupBtn" type="submit" value="Sign up" title="Sign up"/>
							</p>
							<p class="loginArea">
								Already signed up? <a href="file:///D:/tate/login.html#" title="Log in"><strong>Log in▶</strong></a>
							</p>
						</div>
					</div>
					
				</form>
			</section>
			<p class="gotoTop">
				<a href="#" title="go to top"><img src="img/index/arrow-pointing-to-right.png" alt="arrow_top_img"/></a>
			</p>
		</div>

		<footer id="footerWrap">
			<h2 class="outline">Footer</h2>
			<div id="footer1Wrap">
				<div id="footer1">
					<div class="about footer1Left">
						<h3>ABOUT</h3>
						<ul>
							<li><a href="preparing.html" title="About us">About us</a></li>
							<li><a href="preparing.html" title="Our collection">Our collection</a></li>
							<li><a href="preparing.html" title="Terms and copyright">Terms and copyright</a></li>
							<li><a href="preparing.html" title="Governance">Governance</a></li>
							<li><a href="preparing.html" title="Picture library">Picture library</a></li>
							<li><a href="preparing.html" title="ARTIST ROOMS">ARTIST ROOMS</a></li>
						</ul>
					</div>
					<div class="support footer1Left">
						<h3>SUPPORT</h3>
						<ul>
							<li><a href="preparing.html" title="Members">Members</a></li>
							<li><a href="preparing.html" title="Patrons">Patronsn</a></li>
							<li><a href="preparing.html" title="Donate">Donate</a></li>
							<li><a href="preparing.html" title="Corporate">Corporate</a></li>
						</ul>
					</div>
					<div class="join">
						<h3>JOIN IN</h3>
						<ul>
							<li>
								<a href="https://twitter.com/tate" title="twitter for Tate">
									<img src="img/footer/twt.png" alt="twitter_icon"/>
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/tategallery" title="facebook for Tate">
									<img src="img/footer/facebook.png" alt="facebook icon"/>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/tate" title="youbute for Tate">
									<img src="img/footer/youtube.png" alt="youbute icon"/>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/tate/" title="instatram for Tate">
									<img src="img/footer/instagram.png" alt="instagram icon"/>
								</a>
							</li>
							<li>
								<a href="http://pinterest.com/tategallery/" title="pinterest for Tate">
									<img src="img/footer/pinterest.png" alt="pinterst icon"/>
								</a>
							</li>
							<li>
								<a href="http://tatecollectives.tumblr.com/" title="tumblr for Tate">
									<img src="img/footer/tumblr.png" alt="tumblr icon"/>
								</a>
							</li>
						</ul>
					</div>
					<div class="stay">
						<h3>STAY IN THE KNOW</h3>
						<div class="emailBox">
							<form action="#none" method="post">
								<fieldset>
									<legend>submit your email address for subscribe</legend>
									<label for="email">Email</label>
									<input id="email" type="email" name="email" title="email address" placeholder="email address" autocomplete="off"/>
									<input id="emailBtn" type="submit" title="Sign Up" value="Sign Up"/>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="footer2Wrap">
				<div id="footer2">
					<div class="footerLogo">
						<p>
							<a href="http://www.tate.org.uk/" title="Return to the Tate hompage">
								<img src="img/header/logo.png" alt="tate logo"/>
							</a>
						</p>
					</div>
					<div class="footerLink">
						<h3 class="outline">contact</h3>
						<ul>							
							<li><a href="preparing.html" title="Press">Press </a><span class="bar">|</span></li><li><a href="preparing.html" title="Jobs">Jobs</a><span class="bar">|</span></li><li><a href="preparing.html" title="Privacy and cookies ">Privacy and cookies</a><span class="bar">|</span></li><li><a href="preparing.html" title="Contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>

		<footer id="m_footerWrap">
			<h2 class="outline">Footer</h2>
			<div id="m_footer1Wrap">
				<div id="m_footer1">
					<div class="about">
						<h3>ABOUT<p><span class="plus">+</span><span class="minus">-</span></p></h3>
						<ul>
							<li><a href="preparing.html" title="About us">About us</a></li>
							<li><a href="preparing.html" title="Our collection">Our collection</a></li>
							<li><a href="preparing.html" title="Terms and copyright">Terms and copyright</a></li>
							<li><a href="preparing.html" title="Governance">Governance</a></li>
							<li><a href="preparing.html" title="Picture library">Picture library</a></li>
							<li><a href="preparing.html" title="ARTIST ROOMS">ARTIST ROOMS</a></li>
						</ul>
					</div>
					<div class="support">
						<h3>SUPPORT<p><span class="plus">+</span><span class="minus">-</span></p></h3>
						<ul>
							<li><a href="preparing.html" title="Members">Members</a></li>
							<li><a href="preparing.html" title="Patrons">Patronsn</a></li>
							<li><a href="preparing.html" title="Donate">Donate</a></li>
							<li><a href="preparing.html" title="Corporate">Corporate</a></li>
						</ul>
					</div>
					<div class="join">
						<h3>JOIN IN<p><span class="plus">+</span><span class="minus">-</span></p></h3>
						<ul>
							<li>
								<a href="https://twitter.com/tate" title="twitter for Tate">
									<img src="img/footer/twt.png" alt="twitter_icon"/>
								</a>
							</li>
							<li>
								<a href="https://www.facebook.com/tategallery" title="facebook for Tate">
									<img src="img/footer/facebook.png" alt="facebook icon"/>
								</a>
							</li>
							<li>
								<a href="https://www.youtube.com/user/tate" title="youbute for Tate">
									<img src="img/footer/youtube.png" alt="youbute icon"/>
								</a>
							</li>
							<li>
								<a href="https://www.instagram.com/tate/" title="instatram for Tate">
									<img src="img/footer/instagram.png" alt="instagram icon"/>
								</a>
							</li>
							<li>
								<a href="http://pinterest.com/tategallery/" title="pinterest for Tate">
									<img src="img/footer/pinterest.png" alt="pinterst icon"/>
								</a>
							</li>
							<li>
								<a href="http://tatecollectives.tumblr.com/" title="tumblr for Tate">
									<img src="img/footer/tumblr.png" alt="tumblr icon"/>
								</a>
							</li>
						</ul>
					</div>
					<div class="stay">
						<h3>STAY IN THE KNOW<p><span class="plus">+</span><span class="minus">-</span></p></h3>
						<div class="emailBox">
							<form action="#" method="get">
								<fieldset>
									<legend>submit your email address for subscribe</legend>
									<label for="email">Email</label>
									<input id="email" type="email" name="email" title="email address" placeholder="email address" autocomplete="off"/>
									<input id="emailBtn" type="submit" title="Sign Up" value="Sign Up"/>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="m_footer2Wrap">
				<div id="m_footer2">
					<div class="footerLogo">
						<a href="index.html" title="Return to the Tate hompage">
							<img src="img/header/logo.png" alt="tate logo"/>
						</a>
					</div>
					<div class="footerLink">
						<h3 class="outline">contact</h3>
						<ul>							
							<li><a href="preparing.html" title="Press">Press</a><span class="bar">|</span></li><li><a href="preparing.html" title="Jobs">Jobs</a><span class="bar">|</span></li><li><a href="preparing.html" title="Privacy and cookies ">Privacy and cookies</a><span class="bar">|</span></li><li><a href="#" title="Contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</div>
 </body>
</html>