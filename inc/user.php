<?php
class User {
	public function __construct(){}
	public function __destruct(){}

	public function checkInfo($input){
		$input = trim($input);
  		$input = stripslashes($input);
  		$input = htmlspecialchars($input);
 		return $input;
	}
	public function sameUser($type, $data){
		global $connect;
		$check = "SELECT $type FROM user WHERE $type = '$data';";
		$query = mysqli_query($connect, $check);
		$exist = mysqli_num_rows($query);

		if($exist > 0)
			return 0;
		return 1;
	}
	public function confirmEmail($email, $username, $password){
		$_SESSION['email'] = $email;
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		$_SESSION['number'] = rand(100000,999999);

		$_SESSION['sure'] = true;
		header('Location: /done.php');
	}
	public function login($username, $password){
		global $connect;
		$login = "SELECT * FROM user WHERE username = '$username' and password = '$password';";
		$query = mysqli_query($connect, $login);
		$check = mysqli_num_rows($query);

		if($check == 0)
			return 0;
		else
			while($store = mysqli_fetch_array($query)){
				$_SESSION['id'] = $store['id'];
				$_SESSION['email'] = $store['email'];
				$_SESSION['username'] = $store['username'];
				$_SESSION['fullname'] = $store['fullname'];
				$_SESSION['phone'] = $store['phone'];
				$_SESSION['birthday'] = $store['birthday']; 
				$_SESSION['level'] = $store['level'];  
			}
		return 1;
		
	}
	public function insertData($email, $username, $password){
		global $connect;
		$insert = "INSERT INTO user(email, username, password)
			VALUES('$email', '$username', '$password');";
		$query = mysqli_query($connect, $insert);
		
	}

}

$user = new User();
?>
