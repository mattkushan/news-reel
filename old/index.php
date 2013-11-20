<!DOCTYPE html>


<?php 


?>

<html>
<head>
<title>NEWS</title>

<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="jquery.animate-colors.js"></script>
<link href='style.css' rel='stylesheet' type='text/css'>
</head>



<body style="background: rgb(240,240,240);">
<div id="wrapper-index">

<?php include 'get-news.php'; ?>

</div><!-- #wrapper-index -->




<script type="text/javascript">

var hue = function(){

		var hue = 'rgba(' + (Math.floor((0,100)*Math.random()) + 100) + ',' + (Math.floor((254-150)*Math.random())+ 100) + ',' + (Math.floor((254-150)*Math.random())+100) + ',0.9)'; 
		return hue;
};

$(document).ready(function(){

	var originalAttributes = $('.title').attr('style');
	var time = 0;
	$('.stories').hide();
	$('.title').hide();
	$('.title').each(function() {
	    $(this).delay(time).fadeIn(1000);
	    time += 100;
	});


$(".title").hover(function(){
    $(this).animate({color: '#FFF'}, 100);	
    $(this).css({opacity: '0.7'}, 100);
	//$('body').animate({backgroundColor: hue()}, 500);
	},function(){
    $(this).css({opacity: '1'}, 100);
    $(this).animate({color: '#000'},100);
});

	$('.title').click(function() {

		$('.stories').slideUp('normal');
	
		if($(this).next().is(':hidden') == true) {
			  
			//OPEN THE SLIDE
			$(this).next().slideDown('normal');
		 } 

	 });

});

</script>
</body>
</html>
