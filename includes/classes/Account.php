<?php 
	
	/**
	 * Create Account Class
	 */
	class Account
	{
		private $errorArray;
		
		public function __construct(){
			$this -> errorArray = array();

			
		}

		public function register($un, $fn, $ln, $em, $em2, $pw, $pw2){
			$this->validateUserName($un);
			$this->validateFirstName($fn);
			$this->validateLastName($ln);
			$this->validateEmails($em, $em2);
			$this->validatePasswords($pw, $pw2);

			if (empty($this -> errorArray) == true){
				//insert into db
				return true;

			}
			else{
				return false;
			}
		}

		public function getError($error){
			if (!in_array($error, $this -> errorArray)) {
				$error = "";
			}
			return "<span class='errorMessage'>$error</span>";

		}

		private function validateUserName($un){
			if (strlen($un)>25 || strlen($un)<5) {
				array_push($this -> errorArray, "Your username must be 5 to 25 characters");
				return;
			}
			//Check if username exists

		}

		private function validateFirstName($fn){
			if (strlen($fn)>25 || strlen($fn)<2) {
				array_push($this -> errorArray, "Your first name must be 2 to 25 characters");
				return;
			}
		}

		private function validateLastName($ln){
			if (strlen($ln)>25 || strlen($ln)<2) {
				array_push($this -> errorArray, "Your last name must be 2 to 25 characters");
				return;
			}
		}

		private function validateEmails($em, $em2){
			if ($em != $em2){
				array_push($this -> errorArray, "Your email don't match");
				return;
			}

			if (!filter_var($em, FILTER_VALIDATE_EMAIL)){
				array_push($this -> errorArray, "Your email is not valid");
				return;
			}
			//check that email already used
		}

		private function validatePasswords($pw, $pw2){
			if ($pw != $pw2){
				array_push($this -> errorArray, "Your password don't match");
				return;
			}

			if (preg_match('/[^A-Za-z0-9]/', $pw)){
				array_push($this -> errorArray, "Your password can only contain number and letters");
				return;
			}

			if (strlen($pw)>30 || strlen($pw)<8) {
				array_push($this -> errorArray, "Your password must be 8 to 30 characters");
				return;
			}

		}
	}

 ?>