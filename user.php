<?php
session_start();
class User {

	private $db;

	function __construct ($DB_conn) {
		$this->db = $DB_conn;
		
	}

	public function login ($credentials, $password) {
		try{
			$stmt = $this->db->prepare("SELECT * FROM user_details WHERE username=:name OR email=:email AND password=:pass");
			$stmt->execute(array(":name"=>$credentials, ":email"=>$credentials, ":pass"=>$password));
			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
			if($stmt->rowCount() > 0)
          		{ 
             
                $_SESSION['username'] = $userRow['username'];
                $level = $userRow['level'];
                return $level;
             
             
          		}
          	else{
          		return false;
          	}
		}
		catch(PDOException $error){
			echo "Error: " . $error->getMessage();
		}
		/*try {

			$stmt = $this->db->prepare("SELECT * FROM checks WHERE username=:uname AND pasword=:pass");
			$stmt->execute (array (':uname' => $credentials,':pass' => $password));
			if($stmt->rowCount ()>0){
				return true;
			}

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
		}*/

	}
    
	public function logout() {
	session_destroy();
	return false;
	}


	public function signup ($username,$password,$email,$contact) {

      /*try 
        {
		    //$stmt = 'INSERT INTO user_details (username, password, email,contact,level)VALUES ("$username", "$password "," $email","$contact","1")';
		    // use exec() because no results are returned
    $conn=$GLOBALS['pdo'];
    $sql ="INSERT INTO user_details VALUES ($username, $password , $email,$contact,1)";    
    $conn->exec($sql);
    echo "New record created successfully";
         
         }*/
         try{
         	$stmt = $this->db->prepare("SELECT password FROM user_details WHERE username=:username");
         	$stmt->execute(array(":username"=>$username));
         	$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
         	if($stmt->rowCount>0)
         	{
         		return "This username already exist";
         	}
         }
         catch(PDOException $e)
         {
         	echo "Error: " . $e->getMessage();
         }


       try{
         $stmt = "INSERT INTO user_details (username, password, email,contact)VALUES ('$username', '$password', '$email','$contact')";
    		// use exec() because no results are returned
    	$this->db->exec($stmt);
   		 //echo "New record created successfully";
    	$_SESSION["username"]=$username;
    	return true;
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