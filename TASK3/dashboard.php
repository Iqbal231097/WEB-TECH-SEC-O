  
<?php
	$title= " home page";
	 
?>
   <fieldset>
        <table width='100%' >
            <tr>
                 
                <td align='right'>
                    <nav>
                        <a href='./home.php'>Home Page </a> 
                       
						 
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <table width='100%' >
            <tr>
              
                <td align='right'>
                    <nav>
                      <b> <label> Thank you <?php echo $_COOKIE['username'] ?></a> </label> .Now your  Logged in  at  University website </b>   
                       
                    </nav>
                </td>
            </tr>
        </table>
    </fieldset>
    <table border="1px solid black" width='100%'>
        <tr>
            <td>
                <label> </label>
                <br>
                <hr>
                
            </td>
            <td>
                 <h1>we are so lucky to have you  <?php echo $_COOKIE['username'] ?></h1>
            </td>
        </tr>
    </table>
     
    
</body>
</html>


