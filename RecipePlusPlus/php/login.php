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
<title>Login</title>
<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="validation.min.js"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript">
    function redirect()
    {
        var timer = setTimeout(function() {
            window.location='index.php'
        }, 3000);
    }
</script>
</head>

<body>
    
<div>

	<div>
     
        
       <form method="post" id="login-form" onsubmit="redirect()">
      
        <h2>Log In</h2><hr />
        
        <div id="error">
        <!-- error will be shown here ! -->
        </div>
        
        <div>
        <input type="text"  placeholder="Username" name="user" id="user" />
        <span id="check-e"></span>
        </div>
        
        <div>
        <input type="password" placeholder="Password" name="pass" id="pass" />
        </div>
       
     	<hr />
        
        <div>
            <button type="submit" class="btn btn-default" name="btn-login" id="btn-login">
    		 &nbsp; Sign In
			</button> 
        </div>  
      
      </form>

    </div>
    
</div>
</body>
</html>