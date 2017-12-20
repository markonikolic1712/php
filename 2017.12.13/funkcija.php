<?php
function hello(&$unos){
	$unos .= 'mmmm';
	return $unos;
}
$a = 'Marko';
echo $a."<hr>";
echo hello($a);
echo $a;