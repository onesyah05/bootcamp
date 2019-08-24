<?php 
function check($dataKey,$word)
{
	foreach ($dataKey as $data) {
	    if (strpos($word, $data) !== FALSE) {
	        echo $data. " => true <br>";
	    }else{
	    	 echo $data. " => false <br>";
	    }
	}
}
$dataKey = array('out','stand','king','and');
$word = 'outstanding';

echo check($dataKey,$word);