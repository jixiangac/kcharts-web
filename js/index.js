(function (S) {
    var $ = S.all;

    var $J_Iframe = $("#J_Iframe"),
        $J_ChartName = $("#J_ChartName"),
        $J_ChartContent = $("#J_ChartContent");

    $("li", $("#J_MenuBar")).on("mouseenter", function (e) {
        var $content = $(".hide-content", $(e.currentTarget)),
            height = $content.height();
        $content.stop().animate({marginTop: -height, opacity: 1}, 0.4, "easeOut");
    });

    $("li", $("#J_MenuBar")).on("mouseleave", function (e) {
        $(".hide-content", $(e.currentTarget)).stop().animate({marginTop: 0, opacity: 0}, 0.3, "easeIn");
    });


    // KISSY.use('gallery/slide/1.1/',function(S,Slide){
    //   var s = new Slide('JSlide',{
    //     triggerSelector:'li',//触碰节点为a
    //     eventType:'click',//点击触碰点切换
    //     autoSlide:true,
    //       effect:'hSlide', //垂直切换
    //       timeout:4000,
    //       speed:700,
    //       selectedClass:'current'
    //   });
    // });

    //轮播
    (function () {
        var oJSlide = $('#JSlide')[0];
        var aBtn = $('#JSlide li');
        var oDiv = $('#JSlide .tab-content')[0];
        var aDiv = $('#JSlide .tab-pannel');
        var next = $('#JSlide .b-next'), prev = $('#JSlide .b-prev'), min = 0, max = aBtn.length;
        var cWidth = aDiv[0].offsetWidth;
        var now = sel = 0;
        for (var i = 0; i < aBtn.length; i++) {
            aBtn[i].index = i;
            aBtn[i].onclick = function () {
                now = this.index;
                sel = now;
                tab();
            }
        }

        function tab() {
            if (now == min) {
                prev.addClass('disable');
                next.removeClass('disable');
            } else if (now + 1 == max) {
                next.addClass('disable');
                prev.removeClass('disable');
            } else {
                prev.removeClass('disable');
                next.removeClass('disable');
            }
            for (var i = 0; i < aBtn.length; i++) {
                aBtn[i].className = '';
            }
            aBtn[sel].className = 'selected';
            startMove(oDiv, {left: -sel * cWidth});
        }

        prev.on('click', function (e) {
            e.preventDefault();
            if (!$(this).hasClass('disable')) {
                now--;
                sel--;
                tab();
            }
        });

        next.on('click', function (e) {
            e.preventDefault();
            if (!$(this).hasClass('disable')) {
                now++;
                sel++;
                tab();
            }
        })

        function toNext() {
            sel++;
            now++;
            if (sel == max) sel = now = 0;
            tab();
        }


        var timer = setInterval(toNext, 3000);
        oJSlide.onmouseover = function () {
            clearInterval(timer);
        }

        oJSlide.onmouseout = function () {
            timer = setInterval(toNext, 3000);
        }
    })();

    KISSY.use("event,switchable", function (S, Event, Switchable) {
        var Carousel = Switchable.Carousel;

        var carousel = new Carousel('#J_ChartList', {
            effect: 'scrollx',
            easing: 'easeOutStrong',
            viewSize: [131],
            circular: true,
            prevBtnCls: 'prev',
            nextBtnCls: 'next',
            disableBtnCls: 'disable'
        });

        $(".chart-icon", $("#J_ChartIcons")).on("click", function (e) {
            var $tgt = $(e.currentTarget),
                $a = $("a", $tgt),
                name = $tgt.attr("chartname"),
                content = $tgt.attr("chartcontent");
            $J_ChartName.text(name);
            $J_ChartContent.text(content);
            $J_Iframe.attr("src", "demos/" + $tgt.attr("charttype") + ".html");
            $("a", $("#J_ChartIcons")).removeClass("cur");
            $a.addClass("cur");
        });

    });
})(KISSY);