<?php 

class User{
	private $fname;
	private $lname;
	private $mail;
	private $pwd;
	private $array;

	public function __construct($aUser = array('fname'  => 'anonyme',
												'lname' => 'anonyme',
												'mail'  => 'mail@ano.xx',
												'pwd'   => 'azerty')){

		$this->array = array('fname'  => 'anonyme',
							 'lname' => 'anonyme',
							 'mail'  => 'mail@ano.xx',
							 'pwd'   => 'azerty');

		$this->fname = $aUser['fname'];
		$this->lname = $aUser['lname'];
		$this->mail  = $aUser['mail'];
		$this->pwd   = $aUser['pwd'];

		$this->noRespectUser($aUser);

	}

	private function noRespectUser($array){
		if (sizeof($array) > 4){
			throw new UserException("Array ne contient pas les bons éléments", 1);
		}else if (array_diff_key($this->array, $array) != array()){
			throw new UserException("Array différent de celui d'origine", 1);
		}
	}
}

?>