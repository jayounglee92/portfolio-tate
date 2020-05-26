<!DOCTYPE html>
<html lang="en">
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>

  <title> Login | Tate </title>

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

	/*######################## container + loginArea ####################*/
		#container{width:100%;}
			#loginArea{width:650px; height:600px; margin:0 auto; padding-top:60px;}
				#loginArea h2{height:50px; text-align:center; font-size:40px; font-weight:400; letter-spacing:2px; padding:110px 0 80px;}
				#loginArea form{width:600px; margin:0 auto;}
				#loginArea input{font-size:17px;}

	/*######################## Login ####################*/
		.Login{width:600px; height:300px; margin:0 auto; border:none;}
			/*.normalLogin legend{width:100%; height:50px; line-height:50px; font-size:24px;}*/
			.Login legend{display:none;}
			.idArea{width:100%; height:70px;}
				.idArea label{display:block; width:100%; height:20px; font-size:16px;}
				.idArea input{ width:598px; height:48px; border:1px solid #ccc; text-indent:10px;}

			.pwArea{width:100%; height:70px; margin-top:10px;}
				.pwArea label{display:block; width:100%; height:20px; font-size:16px;}
				.pwArea input{ width:598px; height:48px; border:1px solid #ccc; text-indent:10px;}

			.chkArea{width:100%; height:50px; line-height:30px;}
				.chkArea input{margin-right:10px;}

			.btnArea{width:100%; height:50px;}
				.btnArea input{width:100%; height:100%; background-color:#fff; border:none; color:#313131; font-size:16px; font-weight:bold; box-shadow:1px 1px 6px #ccc;  transition:background-image 0.3s ease-in-out;}

			.signupArea{width:50%; height:50px; line-height:30px; float:left; line-height:50px;}
				.signupArea a{text-decoration:underline;}

			.findPwArea{width:50%; height:50px; line-height:30px; float:left; text-align:right; line-height:50px;}
				.findPwArea a{text-decoration:underline;}

		/*############기능*/
		.btnArea input:hover, .btnArea input:focus{background-image:-webkit-linear-gradient(bottom left, rgb(51,37,110) 10%, rgb(97,46,110) 50%, rgb(153,57,109) 70%);
				background-image:-ms-linear-gradient(bottom left, rgb(51,37,110) 10%, rgb(97,46,110) 50%, rgb(153,57,109) 70%);
				background-image:-moz-linear-gradient(bottom left, rgb(51,37,110) 10%, rgb(97,46,110) 50%, rgb(153,57,109) 70%);
				background-image:-o-linear-gradient(bottom left, rgb(51,37,110) 10%, rgb(97,46,110) 50%, rgb(153,57,109) 70%); color:#fff;}
		.signupArea a:hover, .signupArea a:focus{color:#803279;}
		.findPwArea a:hover, .findPwArea a:focus{color:#803279;}


	/*######################## loginInfo ####################*/
		#loginInfo{width:600px; height:280px; margin:0 auto; padding:0 25px;}
			#loginInfo h2{width:100%; height:20px; font-size:16px; padding-bottom:10px;} 
			#loginInfo p{width:100%; height:100px; font-size:13px;}
				#loginInfo p a{text-decoration:underline;}
		/*############기능*/
		#loginInfo p a:hover, #loginInfo p a:focus{color:#803279;}
	
	/*############## footer #############*/
		#m_footerWrap{display:none;}
		#footerWrap{display:block; width:100%; height:330px;}
			#footer1Wrap{width:100%; height:280px; border-top:1px solid #ccc; border-bottom:1px solid #ccc;}
					
				#footer1{width:1250px; height:100%; margin:0 auto; }
					#footer1 h3{width:100%; height:20px; font-size:15px; padding:40px 0 20px;}/* 40+20+20 ==80px*/

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
					#infoMenu li a{font-size:13px;}

			/*###################### infoMenu : search #################*/
				

			
			/*###################### joinBtn #################*/
				#joinBtn{width:100px; height:100px;}
					#joinBtn p{border-radius:50px;}
						#joinBtn a{width:100px; height:70px; border-radius:50px; 
						padding-top:30px; font-size:15px;}
						#joinBtn .pass{top:-120px;}

			
			
			/*######################## container + loginArea ####################*/
			#container{width:100%;}
				#loginArea{width:60%; height:440px; margin:0 auto;}
					#loginArea h2{height:30px; font-size:34px; padding:60px 0 30px;}
					#loginArea form{width:100%;}


			
			/*######################## Login ####################*/
			.Login{width:100%;}
				.Login legend{display:none;}
					.idArea{height:60px;}
						.idArea label{display:block; font-size:14px;}
						.idArea input{width:100%; height:38px; text-indent:10px;}

					.pwArea{height:60px;}
						.pwArea label{display:block; font-size:14px;}
						.pwArea input{width:100%; height:38px; text-indent:10px;}

					.chkArea{height:30px; line-height:0; margin-top:5px;}
						.chkArea label{font-size:13px;}

					.btnArea{height:40px;}
		
					.signupArea{width:100%; height:20px; line-height:20px; float:none; line-height:20px; font-size:13px; margin-top:10px;}
						.signupArea a{font-size:13px;}

					.findPwArea{width:100%; height:20px; line-height:20px; float:none; text-align:left;}
						.findPwArea a{font-size:12px;}


			/*######################## loginInfo ####################*/
				#loginInfo{width:60%; height:200px; margin:0 auto; padding:0;}
					#loginInfo h2{width:100%; font-size:14px; padding-bottom:10px;} 
					#loginInfo p{font-size:11px;}

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
		
			
			
			/*######################## container + loginArea ####################*/
			#container{width:100%;}
				#loginArea{width:80%; height:440px; margin:0 auto; padding-top:20px;}
					#loginArea h2{height:30px; font-size:24px; padding:40px 0 20px;}
					#loginArea form{width:100%;}


			
			/*######################## Login ####################*/
			.Login{width:100%;}
				.Login legend{display:none;}
					.idArea{height:60px;}
						.idArea label{display:block; font-size:14px;}
						.idArea input{width:100%; height:38px; text-indent:10px;}

					.pwArea{height:60px;}
						.pwArea label{display:block; font-size:14px;}
						.pwArea input{width:100%; height:38px; text-indent:10px;}

					.chkArea{height:30px; line-height:0; margin-top:5px;}
						.chkArea label{font-size:13px;}

					.btnArea{height:40px;}
		
					.signupArea{width:100%; height:20px; line-height:20px; float:none; line-height:20px; font-size:13px; margin-top:10px;}
						.signupArea a{font-size:13px;}

					.findPwArea{width:100%; height:20px; line-height:20px; float:none; text-align:left;}
						.findPwArea a{font-size:12px;}


			/*######################## loginInfo ####################*/
				#loginInfo{width:80%; height:200px; margin:0 auto; padding:0;}
					#loginInfo h2{width:100%; font-size:14px; padding-bottom:10px;} 
					#loginInfo p{font-size:11px;}

			
		
		
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

		
			
			/*######################## container + loginArea ####################*/
			#container{width:100%;}
				#loginArea{width:90%; height:440px; margin:0 auto; padding-top:20px;}
					#loginArea h2{height:30px; font-size:24px; padding:40px 0 20px;}
					#loginArea form{width:100%;}

			/*######################## Login ####################*/
			.Login{width:100%;}
				.Login legend{display:none;}
					.idArea{height:60px;}
						.idArea label{display:block; font-size:14px;}
						.idArea input{width:100%; height:38px; text-indent:10px;}

					.pwArea{height:60px;}
						.pwArea label{display:block; font-size:14px;}
						.pwArea input{width:100%; height:38px; text-indent:10px;}

					.chkArea{height:30px; line-height:0; margin-top:5px;}
						.chkArea label{font-size:13px;}

					.btnArea{height:40px;}
		
					.signupArea{width:100%; height:20px; line-height:20px; float:none; line-height:20px; font-size:13px; margin-top:10px;}
						.signupArea a{font-size:13px;}

					.findPwArea{width:100%; height:20px; line-height:20px; float:none; text-align:left;}
						.findPwArea a{font-size:12px;}


			/*######################## loginInfo ####################*/
			#loginInfo{width:90%; height:200px; margin:0 auto; padding:0;}
				#loginInfo h2{width:100%; font-size:14px; padding-bottom:10px;} 
				#loginInfo p{font-size:11px;}

			
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

  <script>
	jQuery(document).ready(function(){
	
	
	});
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
			<section id="loginArea">
				<h2>FOR TATE PROFILES</h2>
				<form action="login_control.php" method="post">
					<fieldset class="Login">
						<legend>Login</legend>
						<p class="idArea">
							<label for="userid">ID*</label>
							<input id="userid" type="text" name="userid" title="id" placeholder="id" autocomplete="off" maxlength="10" autofocus required/>
						</p>
						<p class="pwArea">
							<label for="userpw">Password*</label>
							<input id="userpw" type="password" name="userpw" title="Password" placeholder="password" autocomplete="off" maxlength="8" required/>
						</p>
						<p class="chkArea">
							<input id="chkbtn" type="checkbox" name="chkbtn" title="Remamber me"/><label for="chkbtn">Remember me</label>
						</p>
						<p class="btnArea">
							<input id="loginBtn" type="submit" value="Log in" title="Log in"/>
						</p>
						<p class="signupArea">
							Don't have a Profile? <a href="signup.html" title="Sign up"><strong>Sign up▶</strong></a>
						</p>
						<p class="findPwArea">
							<a href="#none" title="Forgotten your password?"><strong>Forgotten your password?</strong></a>
						</p>
					</fieldset>
			
				</form>
			</section>
			<section id="loginInfo">
				<h2>Assistance on Tate Profiles </h2>
				<p>
					Tate Profiles can be set up by individuals or groups exploring and discussing British, modern and contemporary art. As outlined in our website terms of use, no commercial advertising, marketing or promoting is permitted.<br/><br/>If you need further assistance, email <a href="#none" title="email for further assistance"><strong>webmaster@tate.org.uk</strong></a>
				</p>
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