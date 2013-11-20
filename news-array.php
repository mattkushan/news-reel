
<?php

$news = array
	(
	array('fox', 'http://feeds.foxnews.com/foxnews/latest?format=xml', '.article-text p'), 
	array('npr', 'http://www.npr.org/rss/rss.php?id=1004', '#storytext p'),
	array('cnn', 'http://rss.cnn.com/rss/cnn_topstories.rss', 'div.cnn_strycntntlft p'),
	array('associated press', 'http://hosted.ap.org/lineups/TOPHEADS.rss?SITE=AP&SECTION=HOME', 'span.entry-content p'),
	array('npr', 'http://www.npr.org/rss/rss.php?id=1004', '#storytext p')
	);

?>
