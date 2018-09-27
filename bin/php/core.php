<?php
<<<<<<< HEAD
	include 'bin/php/LynxBDD.php';
	include 'bin/php/Validate.php';

	//session_start();
=======
	require './LynxBDD.php';
>>>>>>> parent of 12a9df3... warn:phase de test des enregistrement données

	$__main__ = 'starter';
	$lynx = new LynxBDD();

	if (isset($_GET)){
		foreach (array_keys($_GET) as $key) {
			switch($key){
				case 'addUser':
<<<<<<< HEAD
					if($lx->addUsers($_GET[$key])){
						$fName = $_POST['userFName'];
						$_SESSION['user.fname'] = $fName;


						header("Location: /index.php?session=true");
					}else{

					}
=======
					echo 'envoie user its okay? :: '.$_GET[$key];
>>>>>>> parent of 12a9df3... warn:phase de test des enregistrement données
					break;
				case 'session':
					var_dump($key);die();
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
