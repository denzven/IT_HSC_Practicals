<?php
if(isset($_POST['submit'])){
	$inputString = strtolower($_POST['str']);
	getNumberOfVowels($inputString);
}

function getNumberOfVowels($inputString){
	$Vowels = array('a','e','i','o','u');
	$lengthOfString = strlen($inputString);
	$numberOfVowels = 0;
	for($i=0; $i<$lengthOfString; $i++){
		if(in_array($inputString[$i],$Vowels)){
			$numberOfVowels++;
		}
	}
	echo"Number of vowels.$count";
} 
?>