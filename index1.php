<!DOCTYPE html>


<html>
<head>
<title>text</title>

<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
<link href='style.css' rel='stylesheet' type='text/css'>

<style>

</style>
<script>

loadContent();
function loadContent(id) {

    $.ajax({
    	type: "GET",
    	url: "index.php",
    	dataType: 'html',
    	data: {param: id},

    	success: function(html){
                 $("#container").html(html);
    	},

    	error: function(){
    	},

    	complete: function(){
    	}
    });

}
</script>
</head>



<body style="background: rgb(240,240,240);">
<div id="container">
 
<img src="loader.gif">

</div><!-- #wrapper-index -->


<script>
</script>

</body>
</html>

