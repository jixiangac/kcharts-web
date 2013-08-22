(function(S){
	S.use('core',function(){
		var $=S.all;
		//nav
		var oNav=$('#nav');
		var aLi=$('#nav li');
		var oBox=$('#nav .box');
		var oCur=$('#nav .cur')[0];
		var aPos=[];

		oBox[0].style.left=oCur.offsetLeft+20+'px';
		oBox[0].style.width=oCur.offsetWidth-40+'px';
		
		var left=0;
		    
		for(var i=0;i<aLi.length-1;i++)
		{
		  aLi[i].onmouseover=function()
		  {
		    oBox.stop().animate({'left':this.offsetLeft+20,'width':this.offsetWidth-40},0.4,'easeOutStrong');
		  }
		  
		  aLi[i].onmouseout=function()
		  {
		    oBox.stop().animate({'left':oCur.offsetLeft+20,'width':oCur.offsetWidth-40},0.4,'easeOutStrong');
		  }
		}
});
})(KISSY)