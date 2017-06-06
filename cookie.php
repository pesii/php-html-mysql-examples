<?php
# Setting and Printing cookie for a user session
# Code samples taken from PHP, MySQL and Apache by Julie Meloni

setcookie("vegetable", "artichoke", time()+3600, "/", "127.0.0.1", 0);

if(isset($_COOKIE[vegetable])){
	echo "<p>Hello again, your chosen vegetable is $_COOKIE[vegetable].</p>";
} else {
	echo "<p> Hello you. This may be your first visit.</p>";
}

?>
