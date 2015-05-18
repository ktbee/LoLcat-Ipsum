<?php

error_reporting(E_ALL);      
ini_set('display_errors', 1);

$str=file_get_contents('lolLibrary.txt');
$lolLibrary = explode ( '. ' , $str);


if(isset($_GET['getLOL'])) {
    $numPar = $_GET['numPar'];
	$generatedText = [];
	$newParagraph = [];
	for($i=0; $i<= $numPar - 1; $i++){
		// grab three sentences for each paragraph
		for ($s = 0; $s<= 2; $s++){
			$sentencePosition = array_rand($lolLibrary);   // Randomly picking an index from the sentence list
			$newSentence = $lolLibrary[$sentencePosition];     // Grabbing the value of the key at the random index's position in the array
			array_push($newParagraph, $newSentence);
		}

		array_push($generatedText, $newParagraph);      // Adding the paragraphs to an array    

	}

}



