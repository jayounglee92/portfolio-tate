jQuery(document).ready(function(){

	/*################### footer accordion for mobile #####################*/
		$("#m_footer1 ul").hide();
		$("#m_footer1 .emailBox").hide();
		$("#m_footer1 h3").click(function(){
			$(this).find(".plus").toggle();
			$(this).next().slideToggle();
		});

		
	/*####################  위로버튼 스크롤에 맞춰 생기게  ####################*/	
		bodyHalf = $("body").height()/3; //바디의 중간쯤 스크롤하면 화살표생김
		//console.log(totoalH);
		$(".gotoTop").hide();
		$(window).scroll(function(){

			var nowScroll = $(document).scrollTop();
			if(nowScroll < bodyHalf){
				$(".gotoTop").hide();
				
			}else{
				$(".gotoTop").show();
			}
			
		});

	/*####################  스크롤 맨위로 스르르올라가게  ####################*/
		$(".gotoTop").bind("focus click", function(){
			var gotoTop = $("body").offset().top;
			$("html, body").animate({scrollTop:gotoTop},600);
		});



	/*####################  basket out of servive #################*/
		$("#emailBtn").click(function(){
			alert("Sorry, this service is being prepared");
		});


});