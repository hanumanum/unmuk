document.captureEvents(Event.MOUSEDOWN | Event.MOUSEUP);
document.onmousedown = clickIE4;
document.onmouseup = clickIE4;

function clickIE4()
{
    //alert("ահա՜, բռնվեցի՞ր , ստեղաշարով արա")
    //return false; 
}


function toogleButton(condition,selector) //true or false
{
	if(condition)
	{
	  
	  $(selector).attr("disabled",false);
	  $(selector).unbind('click');
	}
	else
	{
	  $(selector).attr("disabled",true);
	  $(selector).bind('click', function(e) { e.preventDefault(); });

	}
}
