<?php

//error_reporting(E_ALL);      
//ini_set('display_errors', 1);

$str=file_get_contents('lolLibrary.txt'); //grab scraped text
$lolLibrary = explode ( '. ' , $str); // break up text to add to array


if(isset($_GET['getLOL'])) {
    $numPar = $_GET['numPar'];
	$generatedText = [];
	$newParagraph = [];
	for($i=0; $i<= $numPar - 1; $i++){
		// generate three sentences for each paragraph
		for ($s = 0; $s<= 2; $s++){
			
			$sentencePosition = array_rand($lolLibrary);   // Randomly picking an index from the sentence list
			$newSentence = $lolLibrary[$sentencePosition];     // Get the value of the key at the random index's position in the array
			array_push($newParagraph, $newSentence); // add random sentence to paragraph array


		}
		array_push($generatedText, $newParagraph);      // Adding the paragraphs to an array to store the entire lol text   

		$newParagraph = []; // clean slate to add sentences to next paragraph
		
	}

}



