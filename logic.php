<?php

include 'wordscrape.php';

if(isset($_GET['getLOL'])) {
    $numPar = $_GET['numPar'];
	$generatedText = [];
	$newParagraph = [];
	for($i=0; $i<= $numPar - 1; $i++){
		// grab three sentences for each paragraph
		for ($s = 0; $s<= 2; $s++){
			$sentencePosition = array_rand($lolArray);   // Randomly picking an index from the paragraph list
			$newSentence = $lolArray[$sentencePosition];     // Grabbing the value of the key at the random index's position in the array
			array_push($newParagraph, $newSentence);
		}

		array_push($generatedText, $newParagraph);      // Adding the paragraphs to an array    

	}
}

