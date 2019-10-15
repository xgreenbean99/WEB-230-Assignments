<?php
$string = ' this is an example <img src="img.jpg"> of a string ';
$string_slashes = htmlentities(addslashes($string));

echo $string_slashes;


?>