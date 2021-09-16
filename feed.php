<?php
$content = file_get_contents("https://www.ansa.it/sito/ansait_rss.xml");
// Instantiate XML element
$a = new SimpleXMLElement($content);
echo "News:\n";
$list=$a->channel->item;
$tot=5;
if(count($list)<$tot) $tot=count($list);
for($i=0;$i<$tot;$i++) {
	$entry = $list[$i];
	$dt = date("d/m/Y H:i:s",strtotime($entry->pubDate));
	echo "* ".$dt." * " . $entry->title . "\n";
}
$content = file_get_contents("http://www.liceococito.edu.it/feed/");
// Instantiate XML element
$a = new SimpleXMLElement($content);
echo "\n---------------\nNews dal Liceo:\n";
$list=$a->channel->item;
$tot=5;
if(count($list)<$tot) $tot=count($list);
for($i=0;$i<$tot;$i++) {
	$entry = $list[$i];
	$dt = date("d/m/Y H:i:s",strtotime($entry->pubDate));
	echo "* ".$dt." * " . $entry->title . "\n";
}
