<?php

session_start();

if(isset($_SESSION['user'])!="")
{
	header("location: index.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Signup</title>
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>

</head>

<body>
    
<div>

	<div>
     
        
       <form method="post" id="signup-form" action="signup_redirect.php">
      
        <h2>Sign Up</h2><hr />
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
        <div>
        <input type="text"  placeholder="Username" name="user" id="user" />
        <span id="check-e"></span>
        </div>

        <div>
        <input type="text"  placeholder="Name" name="name" id="name" />
        <span id="check-e"></span>
        </div>
        
        <div>
        <input type="password" placeholder="Password" name="pass" id="pass" />
        </div>
        <div>                    
       <input type="checkbox" name="role" value="chef" id="role"><label for="role"> Check if you're a chef</label>
     	<hr />
        
        <div>
            <button type="submit" class="btn btn-default" name="btn-signup" id="btn-signup">
    		 &nbsp; Sign Up
			</button> 
        </div>  
      
      </form>

    </div>
    
</div>
</body>
</html>
