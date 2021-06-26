<?php
    session_start();
     
   
?>

 
 
 <html>
<head>
 
    <title>Registration Form </title>
</head>
<body>
 
    <fieldset>
        <table width='100%' >
            <tr>
                 
                <td align='right'>
                    <nav>
                        <a href='./home.php'>Home</a> |
                        <a href='./login.php'>Log In</a> |
                        <a href='./registration.php'>Registration</a>
						 
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
  
    <fieldset>
        <fieldset>
            <legend>
                <b>REGISTRATION FORM </b>
            </legend>
			 
			 <nav>
			  <a href='./profile.php'> Add Profile Picture here </a>
			 </nav>
            <form action='./checkreg.php' method='POST' >
                <table align=""> 
				
				
				
				
				
									  <?php  
 if(isset($_POST['Submit1']))
{ 
         $filepath = "ima" . $_FILES["file"]["name"];

if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
echo "<img src=".$filepath." height=150 width=200 />";
} 
else 
{
echo "Error !!";
}
} 
?>   
				
				
				
				            <tr>
					
                        <td>
						 
					   
              
 
                       </form>
                    </tr>
				
				
                    <tr>
					
                        <td>
                            Name:
                        </td>
                        <td>
                            <input type="text" name='name'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Email:
                        </td>
                        <td>
                            <input type="email" name='email'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Username:
                        </td>
                        <td>
                            <input type="text" name='username'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password:
                        </td>
                        <td>
                            <input type="password" name='password'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Confirm Password:
                        </td>
                        <td>
                            <input type="password" name='confirmpassword'>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>
                                    <b>Gender</b>
                                </legend>
                                <input type='radio' name='gender'value='male'>Male
                                <input type='radio' name='gender' value='female'>Female
                                <input type='radio' name='gender'value='others'>Others
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <fieldset>
                                <legend>
                                    <b>Date of Birth</b>
                                </legend>
                                <input type='number' name=date max=31 min=1>/
                                <input type='number' name=month max=12 min=1>/
                                <input type='number' name=year max=3000 min=1950>
                                <label><i>dd/mm/yyyy</i></label>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type='submit' value='submit'>
                            <input type='reset' value='Reset'>
                        </td>
                    </tr>
                </table>
            </form>
			  
			   
        </fieldset>
    </fieldset>
  
</body>
</html>