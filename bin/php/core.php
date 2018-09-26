<?php
	include './LynxBDD.php';
	include './Validate.php';

	session_start();

	$__main__ = 'starter';
	$lynx = new LynxBDD();
	$lx = $lynx;

	if (isset($_GET)){
		foreach (array_keys($_GET) as $key) {
			switch($key){
				case 'addUser':
					if($lx->addUsers($_GET[$key])){
						$fName = $_POST['userFName'];
						$_SESSION['user.fname'] = $fName;


						header("Location: ../../index.php?session=true");
					}else{

					}
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
