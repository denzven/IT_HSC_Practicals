<?php
if(isset($_POST['submit'])){
	$s = strtolower($_POST['str']);
	count1($s);
}

function count1($s){
	$vowels = array('a','e','i','o','u');
	$len1 = strlen($s);
	$count = 0;
	for($i=0;$i<$len1;$i++){
		if(in_array($s[$i],$vowels)){
			$count++;
		}
	}
	echo"Number of vowels.$count";
} 
?>