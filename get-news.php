
<?php
//unset($_SESSION['news']);

include 'news-array.php';

//session_start();   
//$_SESSION['news'] = $news;
    
foreach($news as $key => $newssource){
    $rss = new DOMDocument();
    $rss->load($newssource[1]);
    $feed = array();
    
    foreach ($rss->getElementsByTagName('item') as $node) {
    	$item = array (
    	'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
    	'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
    	'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
    	'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue, );
    	array_push($feed, $item);
   		}
    
    // Limit how many articles are displayed
    $limit = rand(12,15);
    
    // Randomly choose container color
    //$columncolor = rand(150,255) . ','. rand(150,255) .','. rand(150,255);
   
    // Pull from rss feed and create an individial box containing new headline
    //echo '<div class="title" ">'.$newssource[0].'</div>' . "\n";
    //echo '<div class="stories">' . "\n";
	$R;
	$G;
	$B;    
	
	for($x=0;$x<$limit;$x++) {

		$columncolor = $R . ','. $G .','. $B;    
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    	$link = $feed[$x]['link'];
    	$description = $feed[$x]['desc'];
    	$date = date('h:m F d, Y', strtotime($feed[$x]['date']));
    	echo '<div class="story">';
    	echo '<p><a style="color: rgb(' . $columncolor .');" title="' . $date .'" href="news-reel2.php?select='. $key  . '&link=' . $link . '&title=' . $title .  '">'.$title.'</a></p>';
    	//echo '<span class="date"><em>'.$date.'</em></span></p>';    
    	echo '</div><!-- .story -->' . "\n";
		//$R=5+$R; $G=5+$G; $B=5+$B; 
    	
    }
    //echo '</div><!-- stories -->' . "\n";
}
?>
