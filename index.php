<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>	LoLCat Ipsum</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
	<link href="custom.css" rel="stylesheet">
	<?php require 'logic.php'; ?>
			
	
</head>

<body>
	<div class="container">
		
		<h1 class="text-center">LOLcat Ipsum Generator</h1>
		<br>
		<span class="narrow-paragraph">
			<p>Check out this tool for walls of text you can copy and paste to test your app. The lolspeak comes from the <a href="http://www.lolcatbible.com/index.php?title=Gospel_of_Mark">LOLcat Bible Book of Mark</a> and the latin text comes from <a href="http://la.wikisource.org/wiki/De_finibus_bonorum_et_malorum/Liber_Primus">a chunk of real Latin.</a> See if you can see the difference!</p>
			<br>
			<br>
			<form method='GET' action="/">
				<label for='numPar'>How many paragraphs would you like? (max 15)</label>
				<input type='number' name='numPar' id='numPar' max='15' min='1' required><br>
				<br>
				<label for='purrist'>Are you a purrist?</label>
				<br>
				<input type='radio' name='purrist' value='lolspeak'> Yes, I just want lolspeak
				<br>
				<input type='radio' name='purrist' value='latin'> Yes, I just want latin
				<br>
				<br>
				<button type='submit' name='getLOL' class='btn btn-lg'>Click here to Laugh Out Latin</button>
			</form>
		</span>
		<br>
		<br>
		<br>
		
					</span>
		<img src="grumpy-latin-cat.png" class="hidden-sm hidden-xs">

		<?php 
				if(isset($_GET['getLOL'])) {
					
					echo "<span id=\"LOLoutput\" class=\"output\">";
					
					for($i = 0;  $i < $numPar; $i++){
						echo "<p>".$generatedText[$i]['0'].". ".$generatedText[$i]['1'].". ".$generatedText[$i]['2'].".</p>";	
					}
					echo "</span><br><br>";
				}
		?>


	</div> <!-- end container -->
</body>
</html>