<?php
	$data = file_get_contents("php://input");
	if ($data) {
		$fp = fopen('resources.json', 'w');
		fwrite($fp, $data);
		fclose($fp);
	}
?>
