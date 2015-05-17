<?php 

error_reporting(E_ALL);      
ini_set('display_errors', 1);

require "simple_html_dom.php";

$lolArray = [];

 // gets rid of links
function remove_link($element) {
	       if ($element->tag=='a')
	                $element->outertext = '';        
}

function remove_span($element) {
	       if ($element->tag=='span')
	                $element->outertext = '';        
}

 // grabs the innertext of <span> elements and adds the to an array
for ($i=1; $i <= 16; $i++) {
	$lolHTML = file_get_html('http://www.lolcatbible.com/index.php?title=Mark_'.$i); 	
	$lolHTML->set_callback('remove_link');
	foreach ($lolHTML->find('span[id]') as $s) {
		$sentence = $s->innertext;
		array_push($lolArray, $sentence);
	}	
};

$lorenHTML = file_get_html('http://la.wikisource.org/wiki/De_finibus_bonorum_et_malorum/Liber_Primus');
$lorenHTML->set_callback('remove_link');	
$lorenHTML->set_callback('remove_span');
foreach ($lorenHTML->find('p') as $p) {
	$paragraph = $p->innertext;
	array_push($lolArray, $paragraph);
}
//print_r($lolArray);
	
?>