<?php

function stripPunc($string){
	printf("%s<br>", $string);
}

$string = preg_replace("#[[:punct:]]#", "", $_POST['lastname']);
echo $string;
?>
