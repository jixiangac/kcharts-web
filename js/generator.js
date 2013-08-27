(function (S) {
    var $ = S.all, anim = S.Anim;
    var $J_SelContent = $("#J_SelContent");
    $("#J_SelType").on("click", function (e) {
        var tar = this;
        e.preventDefault();
        $(tar).all('.arrow').toggleClass('arrow-up arrow-down');
        if (!$J_SelContent.hasClass("isdown")) {
            // $J_SelContent.addClass("isdown").stop().animate({height:"114px"},1,function(){});
            $J_SelContent.addClass("isdown").show();
            anim('#J_SelContent', {"height": "114px"}, 0.5, 'swing',function () {
            }).run();
        } else {
            // $J_SelContent.removeClass("isdown").stop().animate({height:0},1,function(){});
            $J_SelContent.removeClass("isdown");
            anim('#J_SelContent', {"height": "0"}, 0.5, 'swing',function () {
                $J_SelContent.hide();
            }).run();
        }
    })

    $("li", $("#J_SelContent")).on("click", function (e) {
        $("a", $(e.currentTarget)).addClass("cur")
        $(e.currentTarget).siblings().all("a").removeClass("cur");
        $("#J_TxtType").text($(e.currentTarget).attr("data-type"));
        $J_SelContent.removeClass("isdown").hide().fadeOut();
    })
})(KISSY);