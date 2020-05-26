jQuery(document).ready(function(){

	/*################### pc gnb #####################*/
			$("#gnb").mouseover(function(){
				$(".gnbBar").show();
			});

			$("#gnb li a").on("click mouseover focusin",function(){
				$(".gnbBar").show();
				$(".gnbBar").css({"backgroundColor":"rgba(20,20,20,1)"});
				$(".gnbBar").css({"width":$("#gnb li").width()});
				$(".gnbBar").css({"left":$(this).offset().left-($("#headerWrap").width()-$("#header").width())/2});		
			});
			
			$("#gnb").on("mouseout focusout",function(){
				$(".gnbBar").hide();
			});

	/*################### pc search #####################*/
			$("#searchWrap").hide();
			$("#searchWrap").css({"width":$("#headerWrap").width(),"left":-($("#headerWrap").width()-$("#header").width())/2});
			$("#infoMenu .search").click(function(){
				$("#forSearch").animate({"height":"200px"},1);
				$("#searchWrap").toggle("slide",{"direction":"right"},800);

			});
			$("#searchWrap .closeBtn").click(function(){
				$("#forSearch").animate({"height":"120px"},2000);
				$("#searchWrap").toggle("slide",{"direction":"right"},800);				
			});


	/*################### mobile gnb #####################*/
			$("#sideMenu nav").css({"height":$("body").height()-$("#sideMenuBtn").height()});
			
			$("#sideMenuBtn a").click(function(){		
				$("#sideMenu nav").toggle("slide",{"direction":"right"});
			});

			var now = 0;	
			$("#sideMenuBtn a").click(function(){
				if(now==0){
					$("#sideMenuBtn a span").animate({"backgroundColor":"#603280"},200,"linear");
					$(".topBar").addClass("topBarX");
					$(".middleBar").addClass("middleBarX");
					$(".bottomBar").addClass("bottomBarX");
					now=1;
				}else{			
					$("#sideMenuBtn a span").animate({"backgroundColor":"#313131"},200,"linear");
					$(".topBar").removeClass("topBarX").addClass("topBarM");
					$(".middleBar").removeClass("middleBarX").addClass("middleBarM");
					$(".bottomBar").removeClass("bottomBarX").addClass("bottomBarM");
					now=0;
				}
			});

	
	/*####################  headerWrap 고정 ####################
			headerWrap = $("#headerWrap");
			container = $("#containter");
			headerWrapH = $("#headerWrap").height();
			$(window).scroll(function(){
				var nowScroll = $(document).scrollTop();
			
				// 네비게이션 고정
				if(nowScroll >= headerWrapH){
					headerWrap.css({"position":"fixed","top":"0"});
					
				}

			});	*/

	/*################### 검색어 골라서 검색창에 들어가게 #####################*/
		$("#searchWord ul li a").click(function(){
			var title = $(this).attr("title");
			var search = document.getElementById("search");
			search.value = title;
			$("#search").focus();
		});

		$(document).keypress(function(event) {
		 if (event.which == 13) {
			 searching();
			 
		 }  
	   });

});

	/*################### 검색어 입력시 #####################*/




		function searching(){

		  var search = document.getElementById("search");
		  var searchWord = ((search.value).replace(/ /gi, "")).toLowerCase();

		   switch(searchWord){
			case "" : alert("검색어를 입력해주세요."); break;

			case "vincentvangogh" : case "vincent" : case "gogh": case "vangogh": location.href="artists_vincent_van_gogh.html"; break;

			case "andywarhol" : case "warhol" : case "andywarhol" : case "andy" : location.href="artists_andy_warhol.html"; break;

			case "support" : location.href="support.html"; break;

			case "exhibition" : case "event" : location.href="ex_ev1.html"; break;

			case "renemagritte" : case "magritte" : case "rene" : location.href="artists_rene_magritte.html"; break;

			case "feministart" :
			case "feminist" : location.href="preparing.html"; break;

			case "popart" : location.href="preparing.html"; break;

			case "abstractart" :
			case "abstract" : location.href="preparing.htmll"; break;

			case "davidhockney" : case "hockney" : case "david" : location.href="artists_david_hockney.html"; break;

			default : alert("요청한 페이지를 찾을 수 없습니다."); break;
		  }

		

		}



		function sideSearching(){

		  var sideSearch = document.getElementById("sideSearch");
		  
		  var sideSearchWord = ((sideSearch.value).replace(/ /gi, "")).toLowerCase();
	

		  switch(sideSearchWord){
			case "" : alert("검색어를 입력해주세요."); break;

			case "vincentvangogh" : case "vincent" : case "gogh": case "vangogh": location.href="artists_vincent_van_gogh.html"; break;

			case "andywarhol" : case "warhol" : case "andywarhol" : case "andy" : location.href="artists_andy_warhol.html"; break;

			case "support" : location.href="support.html"; break;

			case "exhibition" : case "event" : location.href="ex_ev1.html"; break;

			case "renemagritte" : case "magritte" : case "rene" : location.href="artists_rene_magritte.html"; break;

			case "feministart" :
			case "feminist" : location.href="preparing.html"; break;

			case "popart" : location.href="preparing.html"; break;

			case "abstractart" :
			case "abstract" : location.href="preparing.html"; break;

			case "davidhockney" : case "hockney" : case "david" : location.href="artists_david_hockney.html"; break;

			default : alert("요청한 페이지를 찾을 수 없습니다."); break;
		  }

		}