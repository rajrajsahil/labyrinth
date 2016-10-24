<?php
session_start();
class User {
      private $db;
      function __construct ($DB_conn)
      {
		    $this->db = $DB_conn;
		  }
      //public function redirect($username);
	    public function login ($credentials, $password)
      {
		    try{
      			$stmt = $this->db->prepare("SELECT * FROM user_details WHERE username=:name OR email=:email AND password=:pass");
      			$stmt->execute(array(":name"=>$credentials, ":email"=>$credentials, ":pass"=>$password));
      			$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
      			if($stmt->rowCount() > 0)
          		{ 
                $_SESSION['username'] = $userRow['username'];
                $level = $userRow['level'];
                $_SESSION['level']=$level;
                return $level;
          		}
          	else{
          		  return false;
          	}
		  }
		    catch(PDOException $error){
			      echo "Error: " . $error->getMessage();
	      }

	    }
    
	    public function logout()
      {
    	  session_destroy();
    	  return false;
	    }


	    public function signup ($username,$password,$email,$contact)
      {
        try{
         	  $stmt = $this->db->prepare("SELECT * FROM user_details WHERE username=:username");
         	  $stmt->execute(array(":username"=>$username));
         	  $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount()>0)
         	  {
         		  return "This username already exist";
         	  }
         }
         catch(PDOException $e)
         {
         	  return "Error: " . $e->getMessage();
         }
         $level=1;
        try{
            $stmt = "INSERT INTO user_details (username, password, email,contact,level)VALUES ('$username', '$password', '$email','$contact','$level')";
    		    // use exec() because no results are returned
    	      $this->db->exec($stmt);
            $time =time();
            $stmt1 = "INSERT INTO timing (username,current) VALUES ('$username','$time')";
            $this->db->exec($stmt1);
   		      //echo "New record created successfully";
    	      $_SESSION["username"]=$username;
            $_SESSION["level"]=$level;
    	      return true;
        }
        catch(PDOException $e)
        {
       	  echo "Error: " . $e->getMessage();
 		    }
      }
      public function getusername()
	    {
         return $_SESSION['username'];
      }
      public function winner()
      {
        $stmt = $this->db->prepare("SELECT username FROM timing ORDER BY level DESC,current ASC LIMIT 10");
        $stmt->execute();
        $userRow = $stmt->fetchAll();
        return $userRow;
      }
      public function nextlevel($answer)
	     {
	   	    $username=$_SESSION['username'];
          //$stmt1 = $this->db->prepare("SELECT * FROM user_details WHERE username=:username");
         	//$stmt1->execute(array(":username"=>$username));
         	//$userRow1=$stmt1->fetch(PDO::FETCH_ASSOC);

          $level=$_SESSION['level'];
          $pass = "level".$level;
         	//$nextlevel=$level+1;

            
          $stmt2 = $this->db->prepare("SELECT * FROM level_answer WHERE level=:level");
         	$stmt2->execute(array(":level"=>$level));
         	$userRow2=$stmt2->fetch(PDO::FETCH_ASSOC); 
         	$correct_answer=$userRow2['answer'];
          //return $correct_answer;

         	if($answer==$correct_answer)
                {
                    $stmt3 = $this->db->prepare("UPDATE user_details SET level=level+1 WHERE username=:username");
             		    $stmt3->execute(array(":username"=>$username));

                    $stmt4 = $this->db->prepare("UPDATE timing SET `level`=level+1 WHERE username=:username");
                    $stmt4->execute(array(":username"=>$username));

                    $stmt5 = $this->db->prepare("UPDATE timing SET current=:pass WHERE username=:username");
                    $stmt5->execute(array(":username"=>$username, ":pass"=>time()));
                    $_SESSION['level']++;
             		    return  $level+1;
         
         	      }
         	else
             	{
             		   return "incorrect answer";
             	}


         	

	 }

      

	
}