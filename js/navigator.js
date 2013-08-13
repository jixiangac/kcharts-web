//弹性运动的nav
var oNav=document.getElementById('nav');
var aLi=oNav.getElementsByTagName('li');
var oBox=getByClass(oNav,'box')[0];
var oCur=getByClass(oNav,'cur')[0];
oBox.style.left=oCur.offsetLeft+'px';

oBox.style.width=oCur.offsetWidth+'px';

var left=0;
	
for(var i=0;i<aLi.length-1;i++)
{
	aLi[i].index=i;
	aLi[i].onmouseover=function()
	{
		bufferMove(oBox,{left:this.offsetLeft,width:this.offsetWidth},4);
	}
	
	aLi[i].onmouseout=function()
	{
		bufferMove(oBox,{left:oCur.offsetLeft,width:oCur.offsetWidth},4);
	}
}

//运动类
function  setStyle(obj,name,value)
{
	if(name=='opacity')
	{
		obj.style.filter='alpha(opacity:'+value+')';
		obj.style.opacity=value/100;
	}
	else
	{
		obj.style[name]=value+'px';
	}
}

function getStyleMove(obj,name)
{
	var value=obj.currentStyle?obj.currentStyle[name]:getComputedStyle(obj,false)[name];
	
	if(name=='opacity')
	{
		return Math.round(parseFloat(value)*100);
	}
	else
	{
		return parseInt(value);
	}
}

function bufferMove(obj,json,level,fnEnd)
{
	if(!level)level=8;
	clearInterval(obj.timer);
	obj.timer=setInterval(function(){
		var isAll=true;
		for(var name in json)
		{
			var cur=getStyleMove(obj,name);
			var speed=(json[name]-cur)/level;
			speed=speed>0?Math.ceil(speed):Math.floor(speed);
			
			if(cur!=json[name])
			{
				isAll=false;
			}
			
			setStyle(obj,name,cur+speed);
		}
		
		if(isAll)
		{
			clearInterval(obj.timer);
			fnEnd && fnEnd();
			return;
		}
		
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