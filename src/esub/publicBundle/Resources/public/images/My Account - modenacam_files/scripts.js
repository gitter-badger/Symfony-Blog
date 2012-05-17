jQuery(function($){
	var isInIFrame = (window.location != window.parent.location) ? true : false;
		
	//menu hover script
	var src = '';
	$('#menu .item').hover(function(){
		$(this).find('span').addClass('hover')
	}, function(){
		$(this).find('span').removeClass('hover')
	});
	
	
	if(!isInIFrame){
		
	
		
	}

	

});


function two(x) {return ((x>9)?"":"0")+x}

function time(ms) {
var sec = Math.floor(ms/1000)
ms = ms % 1000
//t = three(ms)

var t = '';
var min = Math.floor(sec/60)
sec = sec % 60
t = two(sec)

var hr = Math.floor(min/60)
min = min % 60
t = two(min) + ":" + t

var day = Math.floor(hr/60)
hr = hr % 60
t = two(hr) + ":" + t
//t = day + ":" + t
//console.log(t);
return t
}