<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);


if(isset($_GET['getLOL'])) {
	// Check if user has selected to generate justlolspeak or latin, else use text file that contains both.
	if(isset($_GET['purrist'])){
		$purrist = $_GET['purrist'];

		// Grab text from lolspeak.txt file for generated text.
		if($purrist == 'lolspeak'){
			$str=file_get_contents('lolspeak.txt'); //grab scraped text
			$textFile = explode ( '. ' , $str); // break up text to add to array
	    $numPar = $_GET['numPar'];
			$generatedText = [];
			$newParagraph = [];
			for($i=0; $i<= $numPar - 1; $i++){
				// Generate three sentences for each paragraph.
				for ($s = 0; $s<= 2; $s++){
					$sentencePosition = array_rand($textFile);   // Randomly picking an index from the sentence list
					$newSentence = $textFile[$sentencePosition];     // Get the value of the key at the random index's position in the array
					array_push($newParagraph, $newSentence); // add random sentence to paragraph array
				}
				array_push($generatedText, $newParagraph);      // Adding the paragraphs to an array to store the entire lol text   
				$newParagraph = []; // clean slate to add sentences to next paragraph
			}
		// grab text from latin.txt file for generated text
		}else if($purrist == 'latin'){
			$str=file_get_contents('latin.txt'); //grab scraped text
			$textFile = explode ( '. ' , $str); // break up text to add to array
	    	$numPar = $_GET['numPar'];
			$generatedText = [];
			$newParagraph = [];
			for($i=0; $i<= $numPar - 1; $i++){
				// generate three sentences for each paragraph
				for ($s = 0; $s<= 2; $s++){
					$sentencePosition = array_rand($textFile);   // Randomly picking an index from the sentence list
					$newSentence = $textFile[$sentencePosition];     // Get the value of the key at the random index's position in the array
					array_push($newParagraph, $newSentence); // add random sentence to paragraph array
				}
				array_push($generatedText, $newParagraph);      // Adding the paragraphs to an array to store the entire lol text   
				$newParagraph = []; // clean slate to add sentences to next paragraph
			}
		}
	// no purrist selection made, so use lolLibrary.txt for both options
	} else{
		$str=file_get_contents('lolLibrary.txt'); //grab scraped text
		$textFile = explode ( '. ' , $str); // break up text to add to array
	    $numPar = $_GET['numPar'];
		$generatedText = [];
		$newParagraph = [];
		for($i=0; $i<= $numPar - 1; $i++){
			// generate three sentences for each paragraph
			for ($s = 0; $s<= 2; $s++){
				$sentencePosition = array_rand($textFile);   // Randomly picking an index from the sentence list
				$newSentence = $textFile[$sentencePosition];     // Get the value of the key at the random index's position in the array
				array_push($newParagraph, $newSentence); // add random sentence to paragraph array
			}
			array_push($generatedText, $newParagraph);      // Adding the paragraphs to an array to store the entire lol text   
			$newParagraph = []; // clean slate to add sentences to next paragraph
		}
	}// end if isset($_GET['purrist'])
} // end if isset($_GET['getLOL'])



