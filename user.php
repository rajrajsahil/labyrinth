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
      			$stmt = $this->db->prepare("SELECT * FROM user_details WHERE username=:name AND password=:pass");
      			$stmt->execute(array(":name"=>$credentials, ":pass"=>$password));
      			$user=$stmt->fetch(PDO::FETCH_ASSOC);
      			
            if($stmt->rowCount() > 0)
          		{ 
                if($user['status']>0)
                {
                  $_SESSION['username'] = $user['username'];
                  $level = $user['level'];
                  $_SESSION['level']=$level;
                 return $level;
                }
                else
                {
                  return false;
                }
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
         	  $checkuser=$stmt->fetch(PDO::FETCH_ASSOC);
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
            $stmt1 = "INSERT INTO timing (username,current,regtime) VALUES ('$username','$time','$time')";
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
     //  public function getusername()
	    // {
     //     return $_SESSION['username'];
     //  }
      public function winner()
      {
        $stmt = $this->db->prepare("SELECT username FROM timing ORDER BY level DESC,current ASC LIMIT 10");
        $stmt->execute();
        $winnerlist = $stmt->fetchAll();
        return $winnerlist;
      }
      public function nextlevel($answer)
	     {
	   	    $username=$_SESSION['username'];
          //$stmt1 = $this->db->prepare("SELECT * FROM user_details WHERE username=:username");
         	//$stmt1->execute(array(":username"=>$username));
         	//$userRow1=$stmt1->fetch(PDO::FETCH_ASSOC);

          $level=$_SESSION['level'];
          $levelname = "level".$level;
         	//$nextlevel=$level+1;

            
          $stmt2 = $this->db->prepare("SELECT * FROM level_answer WHERE level=:level");
         	$stmt2->execute(array(":level"=>$level));
         	$ans=$stmt2->fetch(PDO::FETCH_ASSOC); 
         	$correctanswer=$ans['answer'];
          //return $correct_answer;

         	if($answer==$correctanswer)
                {
                    $stmt3 = $this->db->prepare("UPDATE user_details SET level=level+1 WHERE username=:username");
             		    $stmt3->execute(array(":username"=>$username));

                    $stmt4 = $this->db->prepare("UPDATE timing SET `level`=level+1,current=:pass, $levelname=:pass WHERE username=:username");
                    $stmt4->execute(array(":username"=>$username, ":pass"=>time()));

                    // $stmt5 = $this->db->prepare("UPDATE timing SET current=:pass, $pass=:pass WHERE username=:username");
                    // $stmt5->execute(array(":username"=>$username, ":pass"=>time()));
                    $_SESSION['level']++;
             		    return  $level+1;
         
         	      }
         	else
             	{
             		   return "incorrect answer";
             	}


         	

	 }

      

	
}