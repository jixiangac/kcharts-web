(function(S){
	var $ = S.all;
	$("#J_SelType").on("click",function(e){
		e.preventDefault();
		var $J_SelContent = $("#J_SelContent");
		if(!$J_SelContent.hasClass("isdown")){
			// $J_SelContent.addClass("isdown").stop().animate({height:"114px"},1,function(){});
			$J_SelContent.addClass("isdown").show().fadeIn();
		}else{
			// $J_SelContent.removeClass("isdown").stop().animate({height:0},1,function(){});
			$J_SelContent.removeClass("isdown").hide().fadeOut();
		}
	})

	$("li",$("#J_SelContent")).on("click",function(e){
		$("a",$(e.currentTarget)).addClass("cur")
		$(e.currentTarget).siblings().all("a").removeClass("cur");
		$("#J_TxtType").text($(e.currentTarget).attr("data-type"));
	})
})(KISSY);