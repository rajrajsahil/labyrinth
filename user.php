<?php
require "connect.php";
class User {

	protected $db;

	function __construct ($DB_conn) {
		$this->db = $DB_conn;
		
	}

	public function login ($credentials, $password) {

		try {

			$stmt = $this->db->prepare("SELECT * FROM `user_details` WHERE `username`=:uname OR `email`=:umail");
			$stmt->execute (array (':uname' => $credentials, ':umail' => $credentials));

			if ($stmt->rowCount () == 1) {

				$userRow = $stmt->fetchObject ();

				if ($password == $userRow->password) {

					$_SESSION['username'] = $userRow->username;
					$_SESSION['level'] = $userRow->level;
					$_SESSION['id'] = $userRow->id;



					return true;
				} else {
					return false;
				}
			} else {
				return false;
			}
		} catch (PDOException $error) {
			echo $error->getMessage ();
		}
	}
    
	public function logout() {
	session_destroy();
	return true;
	}


	public function signup ($username, $password , $email,$contact) {

      try 
        {
		    //$stmt = 'INSERT INTO user_details (username, password, email,contact,level)VALUES ("$username", "$password "," $email","$contact","1")';
		    // use exec() because no results are returned
    $conn=$GLOBALS['pdo'];
    $sql ="INSERT INTO user_details VALUES ($username, $password , $email,$contact,1)";    
    $conn->exec($sql);
    echo "New record created successfully";
         
         }
    catch(PDOException $e)
       {
       	    
            echo "Error: " . $e->getMessage();
 		}
     }
	/*public function isLoggedIn () {
		if (isset ($_SESSION['username'])) {
			//echo 'in';
			return true;
		}
		//echo 'out';
		return false;
	}

	public function redirect ($url) {
		header ("Location: ". $url);
	}
*/
	
}