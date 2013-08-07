//弹性运动的nav
var oNav=document.getElementById('nav');
var aLi=oNav.getElementsByTagName('li');
var oBox=getByClass(oNav,'box')[0];
var oCur=getByClass(oNav,'cur')[0];
var offLeft=oCur.offsetLeft;
var liWidth=aLi[0].offsetWidth;
var now=offLeft/liWidth;
var old=offLeft/liWidth;
oBox.style.left=old*liWidth+'px';
var left=0;

for(var i=0;i<aLi.length-1;i++)
{
	aLi[i].index=i;
	aLi[i].onmouseover=function()
	{
		now=this.index;
		var _this=this;
		eleMove(oBox,now*aLi[0].offsetWidth);
	}
	
	aLi[i].onmouseout=function()
	{
		eleMove(oBox,old*aLi[0].offsetWidth);
	}
}

function eleMove(obj,target)
{
	clearInterval(obj.timer);
	speed=0;
	left=obj.offsetLeft;
	obj.timer=setInterval(function(){
		speed+=(target-left)/5;
		speed*=0.7;
			
		left+=speed;	
		obj.style.left=Math.round(left)+'px';	
	},30);
}

function getByClass(obj,sClass)
{
	if(obj.getElementsByClassName)return obj.getElementsByClassName(sClass);
	else
	{
		var arr=[];
		var aEle=obj.getElementsByTagName('*');
		
		var re=new RegExp('\\b'+sClass+'\\b');
		
		for(var i=0;i<aEle.length;i++)
		{
			if(re.test(aEle[i].className))
			{
				arr.push(aEle[i]);
			}
		}
		return arr;
	}
}