<?php include 'simple_html_dom.php'; ?>
<?php include 'news-array.php'; ?>
<?php
// Array of symbols and words that need to be replace in $data
$patterns = array('/\&[0-9a-z]+/i', '/\&#[0-9a-z]+/i', "/[^0-9a-zA-Z\'-\s+]/i", '/\b,/', '/--/');

$title = $_GET['title'];

// Link used to retrieve new article   
$place = $_GET['link'];

// Tells the index of the array that should be used
$select = $_GET['select'];

// This defines what tag should be used in search of NEWS content (beginning to end)
$mineTag = $news[$select][2];

// Tell parser which URL to use
$html = file_get_html($place);

// mines data to form news article
foreach($html->find($mineTag) as $article) {
//echo $article->p . ' ';
$data .= $article->plaintext;
}

$data = PREG_REPLACE($patterns, ' ', $data);
$data = rtrim($data, ",");
$data = strtoupper($data);
$headlines = explode (" ", $data);
    
/////////////////

function CenterImage($imgURL){
$sizeInfo = getimagesize($imgURL);
return  '<img src="' . $imgURL .'" width="' . $sizeInfo[0] . '" height="' . $sizeInfo[1] . '" style="margin-top: -' . $sizeInfo[1] / 2 . 'px; margin-left: -' . $sizeInfo[0] / 2 . 'px;">';
}

function styleText($item){

	/////////////// BEGIN TEXT STYLING ////////////////////

	if($item == "A"){
		$class = "normalFont-whiteText-redBackground";
	}
	if($item == "AFGHANISTAN"){
		$img = 'img/afghanistan/00'. rand(1,1) .'.png';
	}
	if($item == "BAD"){
		$class = "normalFont-whiteText-redBackground";
	}
	if($item == "BOMB" || $item == "BOMBER" || $item == "BOMBIMG"){
		$class = "normalFont-blackText-underline";
		$img = "http://fc08.deviantart.net/fs70/i/2011/150/0/d/explosion_by_dbszabo1-d3hmssu.png";
	}	
	if($item == "CASH"){
		$class = "normalFont-whiteText-greenBackground";
	}
	if($item == "GOOD"){
		$class = "normalFont-whiteText-greenBackground";
	}
	if($item == "KILLED"){
		$class = "normalFont-whiteText-redBackground";
	}
	if($item == "RADICAL"){
		$class = "cursiveFont-blackText-whiteBackground";
	}
	if($item == "SLOW"){
		$class = "normalFont-blackText-letterSpaced";
	}
	if($item == "THE"){
		$class = "normalFont-whiteText-underline delay";
		$img = "http://www.doctorramey.com/wp-content/uploads/2011/05/Race_Horse_Animation_by_AkiCheval.gif";
		$delay = "1000";
	}
	if($item == "THIER"){
		$class = "normalFont-blackText-italics";
	}
	/////////////// END TEXT STYLING ////////////////////
	if(isset($class)){ return $class;}
	if(isset($img)){ return $img;}
	if(isset($delay)){ return $delay;}
	

}

?> 



<!DOCTYPE html>   
<html>
<head>
<title><?php echo $title; ?></title>
<meta HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=.3"/>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
<script src="animate-text.js"></script>
<link href='http://fonts.googleapis.com/css?family=Raleway:700' rel='stylesheet' type='text/css'>
<link href='style.css' rel='stylesheet' type='text/css'>
</head>

<body>
<?php
$wordIndex = 1;
?>
<div id="wrapper">
<div id="text">
<?php foreach ($headlines as $item) : ?>
	<?php $headlines[] = $item; ?>
	<?php echo styleText($item, $wordIndex); ?>
<?php $wordIndex++; ?>	
<?php endforeach; ?>
</div><!-- text -->
</div><!-- #wrapper -->
</body>
</html>
