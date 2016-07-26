<?php
class User extends AppModel{
	public $name = "User";

	public function checkExistUser($user_email , $user_password) {
		$sql = "SELECT count(user_id) as count_user from users where user_email = '" . trim($user_email) . "' AND  user_password = '" . trim($user_password) . "' ";
	
		$result_arr = $this->query($sql);

		$result = $result_arr[0][0]['count_user'];

		if ($result == "1") {
			return true;
		} else {
			return false;
		}
	}
}