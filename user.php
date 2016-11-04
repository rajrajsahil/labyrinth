<?php
if(session_id() == '') {
  session_start();
  }
//session_start();
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
      			$stmt = $this->db->prepare("SELECT * FROM user_details WHERE username=:name OR email=:name AND password=:pass");
      			$stmt->execute(array(":name"=>$credentials, ":pass"=>$password));
      			$user=$stmt->fetch(PDO::FETCH_ASSOC);
      			
            if($stmt->rowCount() > 0)
          		{ 
                if($user['status']>0)
                {
                  if($password==$user['password'])
                  {
                    $_SESSION['username'] = $user['username'];
                    $level = $user['level'];
                    $_SESSION['level']=$level;
                    $stmt1 = $this->db->prepare("SELECT * FROM level_answer WHERE level=:level");
                    $stmt1->execute(array(":level"=>$level));
                    $levname=$stmt1->fetch(PDO::FETCH_ASSOC); 
                    $levelname=$levname['levelname'];   
                    $_SESSION['levelname']= $levelname;               
                    return $levelname;
                  }
                  else 
                  {
                    return false;
                  }
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

      public function checkuser($username)
      {
         try{
            $stmt = $this->db->prepare("SELECT * FROM user_details WHERE username=:username");
            $stmt->execute(array(":username"=>$username));
            $checkuser=$stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount()>0)
            {
              return "username already taken";
            }
            else
            {
              return true;
            }
         }
         catch(PDOException $e)
         {
            return "Error: " . $e->getMessage();
         }

      }
      public function checkemail($useremail)
      {
         try{
            $stmt = $this->db->prepare("SELECT * FROM user_details WHERE email=:useremail");
            $stmt->execute(array(":useremail"=>$useremail));
            $checkuser=$stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount()>0)
            {
              return "email already taken";
            }
            else
            {
              return true;
            }
         }
         catch(PDOException $e)
         {
            return "Error: " . $e->getMessage();
         }

      }
       public function checkcontact($usercontact)
      {
         try{
            $stmt = $this->db->prepare("SELECT * FROM user_details WHERE contact=:usercontact");
            $stmt->execute(array(":usercontact"=>$usercontact));
            $checkuser=$stmt->fetch(PDO::FETCH_ASSOC);
            if($stmt->rowCount()>0)
            {
              return "contact already taken";
            }
            else
            {
              return true;
            }
         }
         catch(PDOException $e)
         {
            return "Error: " . $e->getMessage();
         }

      }
	    public function signup ($username,$password,$email,$contact)
      {
        
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
            $_SESSION["levelname"]="level1";
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
          $level=$_SESSION['level'];
          $levelname = "level".$level;

          $stmt2 = $this->db->prepare("SELECT * FROM level_answer WHERE level=:level");
         	$stmt2->execute(array(":level"=>$level));
         	$ans=$stmt2->fetch(PDO::FETCH_ASSOC); 
         	$correctanswer=$ans['answer'];
         

         	if($answer==$correctanswer)
                {
                    $stmt3 = $this->db->prepare("UPDATE user_details SET level=level+1 WHERE username=:username");
             		    $stmt3->execute(array(":username"=>$username));

                    $stmt4 = $this->db->prepare("UPDATE timing SET `level`=level+1,current=:pass, $levelname=:pass WHERE username=:username");
                    $stmt4->execute(array(":username"=>$username, ":pass"=>time()));
                    
                    $level++;
                    $_SESSION['level']++;
                    if($level<21)
                    {
                        $stmt5 = $this->db->prepare("SELECT * FROM level_answer WHERE level=:level");
                        $stmt5->execute(array(":level"=>$level));
                        $levname=$stmt5->fetch(PDO::FETCH_ASSOC); 
                        $levelname=$levname['levelname'];  
                        $_SESSION['levelname']=$levelname;                  
                        return $levelname;
             		     }
                     else
                        {
                          $_SESSION['levelname']="congratulations";   
                          return "congratulations";
                        }
         
         	      }
         	else
             	{
             		   return "incorrect answer";
             	}


         	

	 }

      

	
}