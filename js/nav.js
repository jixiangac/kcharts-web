(function(S){
	S.use('core',function(){
		var $=S.all;
		//nav
		var oNav=$('#nav');
		var aLi=$('#nav li');
		var oBox=$('#nav .box');
		var oCur=$('#nav .cur')[0];
		var aPos=[];

		oBox[0].style.left=oCur.children[0].offsetLeft+'px';
		oBox[0].style.width=oCur.children[0].offsetWidth+'px';
		
		for(var i=0;i<aLi.length;i++){
			aLi[i].style.left=aLi[i].offsetLeft+'px';
			aLi[i].style.top=aLi[i].offsetTop+'px';
			aPos[i]=aLi[i].offsetTop;
		}
		for(var i=0;i<aLi.length;i++){
			aLi[i].style.position='absolute';
			aLi[i].style.top=-100+'px';
		}
		$(aLi[0]).stop().animate({'top':aPos[0]},1,'elasticOut');
		var a=1;
		var timer=setInterval(function(){
			$(aLi[a]).stop().animate({'top':aPos[a]},1,'elasticOut');
			a++;
			if(a==aLi.length-1){
				clearInterval(timer);
				$(aLi[aLi.length-1]).stop().animate({'top':aPos[aLi.length-1]},0.4,'easeOutStrong');
			}
		},80);

		
		var left=0;
		    
		for(var i=0;i<aLi.length-1;i++)
		{
		  aLi[i].onmouseover=function()
		  {
		    oBox.stop().animate({'left':this.offsetLeft+20,'width':this.children[0].offsetWidth},0.4,'easeOutStrong');
		  }
		  
		  aLi[i].onmouseout=function()
		  {
		    oBox.stop().animate({'left':oCur.offsetLeft+20,'width':oCur.children[0].offsetWidth},0.4,'easeOutStrong');
		  }
		}
});
})(KISSY)