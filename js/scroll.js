
function scroll () {
var a = element;
if (a < 4) {
	 $("html, body").animate({scrollTop:0}, 300);
	} else if (a >= 4 && a <= 7 ) {
	 $("html, body").animate({scrollTop:290}, 300);
	} else if (a >= 8  && a <= 11 ) {
	 $("html, body").animate({scrollTop:535}, 300);
	} else if (a >= 12  && a <= 15 ) {
	 $("html, body").animate({scrollTop:795}, 300);
	} else if (a >= 16 && a <= 19 ) {
	 $("html, body").animate({scrollTop:1055}, 300);
	} else if (a >= 20  && a <= 23 ) {
	 $("html, body").animate({scrollTop:1315}, 300);
	} else if (a >= 24  && a <= 27 ) {
	 $("html, body").animate({scrollTop:2000}, 300);
	} else if (a => 28  && a <= 31 ) {
	 $("html, body").animate({scrollTop:2000}, 300);
	} 
	
}