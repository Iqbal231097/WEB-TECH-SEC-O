 
 
<?php
session_start();
 
 
 ?>
 
  <html>
 <head> </head>
<body>

       <table width='100%' >
            <tr>
             
                <td align='right'>
                    <nav>
                        <a href='./home.php'>Home</a> |
                        <a href=' ./login.php'>Log In</a> |
                        <a href=' ./registration.php'>Registration</a>
                    </nav>
                </td>
            </tr>
        </table>
 <fieldset>
        <legend>
            LOGIN 
        </legend>

 <form action="checklogin.php" method="post" style="border: 2px dotted blue; text-align:center; width: 400px;">
	<p>
	
		Username: <input name="username" type="text" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
	</p>
	<p>Password: <input name="password" type="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
	</p>
	<p><input type="checkbox" name="remember" /> Remember me  
	</p>
	<p><input type="submit" value="Login"></span> <br><br> <a href='./recover.php'> Forget Password?</a></p>  
     	
</form>
 
</fieldset>
</body>
</html>

 

<?php
 
 
?>