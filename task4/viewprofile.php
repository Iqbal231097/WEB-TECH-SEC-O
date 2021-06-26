  
<?php
	$title= " view profile page";
	include('header.php');
?>
 <html>
<head>
    
    <title>view PROFILE</title>
</head>
<body>
    <fieldset>
        <table width='100%' >
 
    <table border="1px solid black" width='100%'>
        <tr>
            <td width='40%'>
               
                <br>
                <hr>
                <ul>
                    <li><a href='./dashboard.php'>Dashboard</a></li>
              
                </ul>
            </td>
            <td>
                <fieldset>
				 
                    <legend><b>  View PROFILE</b></legend>
                    <table width='100%'>
                        <tr>
                            <td>
                                Name:
                            </td>
                            <td>
                                <?php echo $_SESSION['name']; ?>    
                            </td>
                            
                            
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>
						 
                        <tr>
                            <td>
                                User Name:
                            </td>
                            <td>
                                <?php echo $_SESSION['username']; ?>    
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
                                <?php echo $_SESSION['email']; ?>    
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <hr>
                            </td>
                        </tr>
                       
                        <tr>
                            <td>
                                Date of Birth:
                            </td>
                            <td>
                                <?php echo $_SESSION['date']."/".$_SESSION['month']."/".$_SESSION['year']; ?>    
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                
                            </td>
                        </tr>
                        
                    </table>
                </fieldset>
            </td>
        </tr>
    </table>
   
    
</body>
</html>