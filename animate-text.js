

$(window).resize(function(){
    $('div #text span').css('font-size',($(window).width()*0.07)+'px');
});

$(window).load(function(){
    $('div #text span').css('font-size',($(window).width()*0.07)+'px');
});

$(document).ready(function() { 

// First hide them all
$("#text div").hide();
function fades($div, cb) {
    $div.fadeIn( 1, function () {
    getImage($div);
	changeStyle($div);
	delay($div);
    //var delayResult = delay($div);
    //if(delayResult == true){
    	//$('body').css('border-top','10px solid #000');
    //}
    //if(delayResult == false){
    	  //  $('body').css('border-top','none');
   // }


	$div.fadeOut( 1,function() {
		var $next = $div.next();
		if ($next.length > 0) {
			fades($next, cb);
		}
		else {
			// The last element has faded away, call the callback
			cb();
		}
	});
    }).delay(200);
    
}

function startFading($firstDiv) {
    fades($firstDiv, function () {
        startFading($firstDiv);
    });
}

startFading($("#text div:first-child"));

}); 

function changeStyle($div){
	if ($div.is('.cursiveFont-blackText-whiteBackground') == true) {
		$('#text div').css('font-family',"'Clicker Script', cursive");
	}
	
	//else if ($div.has('img') == true){
	//	$('body').css('color','white');
	//	$('#text div').css('font-size','0px');
	//}
	else if ($div.is('.hideText') == true) {
		$('#text div').css('font-size','0px');
	}
	else if ($div.is('.normalFont-whiteText-redBackground') == true) {
		$('body').css('background-color','#E80C0C');
		$('#text div').css('color','white');
	}
	else if ($div.is('.normalFont-whiteText-underline') == true) {
		$('#text div').css('color','#FFF');
		$('#text div').css('font-style','underline');
	}
	else if ($div.is('.normalFont-whiteText-blackBackground') == true) {
		$('body').css('background-color','#000');
		$('#text div').css('color','white');
	}
	else if ($div.is('.normalFont-whiteText-blueBackground') == true) {
		$('body').css('background-color','#0099f3');
		$('#text div').css('color','white');
	}
	else if ($div.is('.normalFont-whiteText-greenBackground') == true) {
		$('body').css('background-color','#09DE17');
		$('#text div').css('color','white');
	}
	else if ($div.is('.normalFont-whiteText-orangeBackground') == true) {
		$('body').css('background-color','#fe7421');
		$('#text div').css('color','white');
	}
	else if ($div.is('.normalFont-whiteText-whiteBackground') == true) {
		$('body').css('background-color','#fff');
		$('#text div').css('color','white');
	}
	else if ($div.is('.normalFont-whiteText-pinkBackground') == true) {
		$('body').css('background-color','#e162da');
		$('#text div').css('color','white');
	}
	else if ($div.is('.normalFont-backgroundImage-sun') == true) {
		$('body').css('background-image', 'url(' + "http://upload.wikimedia.org/wikipedia/commons/thumb/8/81/Sky_over_Washington_Monument.JPG/300px-Sky_over_Washington_Monument.JPG" + ')');
		$('#text div').css('color','white');
	}
	else if ($div.is('.normalFont-blackText-underline') == true) {
		$('#text div').css('text-decoration','underline');
	}
	else if ($div.is('.normalFont-yellowText-redBackground') == true) {
		$('#text div').css('color','#f6eb14');
		$('body').css('background-color','#ff0000');
	}
	else if ($div.is('.normalFont-blackText-letterSpaced') == true) {
		$('#text div').css('letter-spacing','5px');
	}
	else if ($div.is('.clearFont') == true) {
		$('#text div').css('font-family',"'Raleway', sans-serif");
		$('body').css('background-color','white');
		$('#text div').css('color','black');
		$('#text div').css('font-size','1em');
		$('#text div span').css('background-color','transparent');
		$('#text div').css('top','0');
	}
	else if ($div.is('.clearBackground') == true) {
		$('body').css('background-image','url("null")');
		$('body').css('background-color','white');
		$('#text div').css('color','black');
		$('#text div').css('top','0');
	}
	else if ($div.is('.normalFont-blackText-italics') == true) {
		$('#text div').css('font-style','italic');
	}
	else if ($div.is('.computerFont-greenText-blackBackground') == true ) {
		$('#text div').css('font-family',"'VT323', cursive");
		$('#text div').css('font-size','1.5em');
		$('#text div').css('color','#22e246');
		$('body').css('background-color','#000');
	}
	else if ($div.is('.typewriterFont-blackText-whiteTextBackground') == true ) {
		$('#text div').css('font-family',"'Special Elite', cursive");
		$('#text div').css('font-size','1.5em');
		$('#text div').css('color','#000');
		$('#text div span').css('background-color','#FFF');
	}
	else if ($div.is('.funFont-pinkText-blackBackground') == true ) {
		$('#text div').css('font-family',"'Monoton', cursive");
		$('#text div').css('color','#de068c');
		$('body').css('background-color','#0b0720');
	}
	else if ($div.is('.funFont-greenText-blackBackground') == true ) {
		$('#text div').css('font-family',"'Monoton', cursive");
		$('#text div').css('color','#49f222');
		$('body').css('background-color','#081000');
	}
	else if ($div.is('.blackText-blackTextBackground') == true ) {
		$('#text div').css('color','#000');
		$('#text div span').css('background-color','rgb(10,10,10)');
	}
	else if ($div.is('.blackText-blackBackground') == true ) {
		$('#text div').css('color','#000');
		$('body').css('background-color','rgb(10,10,10)');
	}
	else if ($div.is('.yellowText-orangeTextBackground') == true ) {
		$('#text div').css('color','#fff21f');
		$('#text div span').css('background-color','#f7911e');
	}
	else if ($div.is('.yellowText-orangeBackground') == true ) {
		$('#text div').css('color','#fff21f');
		$('body').css('background-color','#f7911e');
	}	
	else if ($div.is('.funFont-greenText-blackBackground') == true ) {
		$('#text div').css('font-family',"'Monoton', cursive");
		$('#text div').css('color','#49f222');
		$('body').css('background-color','#081000');
	}
	else if ($div.is('.blueText-blueBackground') == true ) {
		$('#text div').css('color','#79d4ff');
		$('body').css('background-color','#43a0ef');
	}
	else if ($div.is('.whiteText-forestgreenBackground') == true ) {
		$('#text div').css('color','#ffffff');
		$('body').css('background-color','#007202');
	}
	else if ($div.is('.brownText-forestgreenBackground') == true ) {
		$('#text div').css('color','#6e5126');
		$('body').css('background-color','#007202');
	}
	else if ($div.is('.skinnyFont-brownText-forestgreenBackground') == true ) {
		$('#text div').css('color','#6e5126');
		$('body').css('background-color','#007202');
		$('#text div').css('font-family',"'Pompiere', cursive");
	}
	else if ($div.is('.whiteText-darkblueBackground') == true ) {
		$('#text div').css('color','#ffffff');
		$('body').css('background-color','#0047a9');
	}
	else if ($div.is('.lightpurpleText-purpleBackground') == true ) {
		$('#text div').css('color','#c322db');
		$('body').css('background-color','#520d5c');
	}
	else if ($div.is('.classicFont-blackText-lightgreyBackground') == true ) {
		$('#text div').css('font-family',"'Abril Fatface', cursive");
		$('#text div').css('color','#000000');
		$('body').css('background-color','#EFEFEF');
	}
	else if ($div.is('.fingerFont-blackText-whiteBackground') == true ) {
		$('#text div').css('font-family',"'Finger Paint', cursive");
		$('#text div').css('color','#000000');
		$('body').css('background-color','#FFFFFF');
	}
	else if ($div.is('.yellowText-blueBackground') == true ) {
		$('#text div').css('color','#ffda49');
		$('body').css('background-color','#0045aa');
	}
	else if ($div.is('.cowboyFont-blackText-brownBackground') == true ) {
		$('#text div').css('font-family',"'Sancreek', cursive");
		$('#text div').css('color','#000000');
		$('body').css('background-color','#e6b244');
	}
	else if ($div.is('.darkblueText-darkblueBackground') == true ) {
		$('#text div').css('color','#0d1c47');
		$('body').css('background-color','#081326');
	}
	else if ($div.is('.falldown') == true) {
		$('#text div').css('top','200px');
	}
	else
	{     //CLEAR
		//$('body').css('background-image','url(' + "none" + ')');
		//$('#text div').css('font-family',"'Raleway', sans-serif");
		//$('#text div').css('text-decoration','none');
		//$('#text div').css('font-style','normal');
		$('#text div').css('text-decoration','none');
	
	}
}


function getImage($div){

	if ($div.has('img').length == true) {
		$('#text div').css('color','white');
		var src = $div.children('img').attr('src');
		$('body').css('background-image', 'url(' + src + ')');
		//$('body').html(src);
	}


}

function delay($div){
	//var i;
	if ($div.is('[class*="delay"]') == true) {
		var timeDelay = $div.data('delay');
		var frameID = $(this).attr('id')
		$div.delay(timeDelay);
		i = 1;
		return true;
	}
	//
	//if ($div.is('[class*="delay"]') != true){
		//if(i === 1){
			//return true;
		//	var x = x + 1;
			//if(x > 4){
				//i = 0;
				//x = 0;
				//return false;
		//	}
		//}
		//else{
		//	return false;
		//}
	//}
}
