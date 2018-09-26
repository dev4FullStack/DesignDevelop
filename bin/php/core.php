<?php
	require './LynxBDD.php';

	$__main__ = 'starter';
	$lynx = new LynxBDD();

	if (isset($_GET)){
		foreach (array_keys($_GET) as $key) {
			switch($key){
				case 'addUser':
					echo 'envoie user its okay? :: '.$_GET[$key];
					break;
				default:
					break;
			}
		}
		// if($_GET['posData']){
		// 	//var_dump(array_keys($_GET));

		// 	//var_dump($_POST);
		// }
	}
	


?>
