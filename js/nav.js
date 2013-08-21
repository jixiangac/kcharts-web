(function(S){
	var $=S.all;
	//nav
	var oNav=$('#nav');
	var aLi=$('#nav li');
	var oBox=$('#nav .box');
	var oCur=$('#nav .cur')[0];
	oBox[0].style.left=oCur.children[0].offsetLeft+'px';
	oBox[0].style.width=oCur.children[0].offsetWidth+'px';
	var left=0;
	    
	for(var i=0;i<aLi.length-1;i++)
	{
	  aLi[i].onmouseover=function()
	  {
	    oBox.stop().animate({'left':this.children[0].offsetLeft,'width':this.children[0].offsetWidth},0.4,'easeOutStrong');
	  }
	  
	  aLi[i].onmouseout=function()
	  {
	    oBox.stop().animate({'left':oCur.children[0].offsetLeft,'width':oCur.children[0].offsetWidth},0.4,'easeOutStrong');
	  }
	}

})(KISSY)