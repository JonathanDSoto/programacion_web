<?php 


if (!isset($_SESSION)) {
	session_start();
}
include_once "connectionController.php";

class AuthController
{
	public function access($email,$password)
	{
		"select * from users where email = ? and password = ?";

		if($user){

			$_SESSION['id'] = $user['id'];
			$_SESSION['name'] = $user['name'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['role'] = $user['role'];

			if ($_SESSION['role']=="admin") {
				//header(string)
			}else{
				
			}

		}

	}

	public function logout()
	{

	}

}



?>