(function(S){
	var $ = S.all,E = S.Event;
	E.delegate(document,"click",".attr-name",function(e){
		var	$tgt =$(e.currentTarget),$attrDetail = $tgt.next(".attr-detail");
		$attrDetail.slideDown(0.2).siblings(".attr-detail").slideUp(0.1);

		$tgt.addClass("attr-name-highlight").siblings(".attr-name").removeClass("attr-name-highlight");
	});
	$("#J_MoreConfig").on("click",function(){
		$("#J_MoreCfgPanel").animate({right:0},0.2,"easeOut");
	})
})(KISSY);