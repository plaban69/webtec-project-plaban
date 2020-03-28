

<?php
$unerr=$pwerr="";

      	 
	if(isset($_POST['Login']))
	{
		 $un=$_POST['username'];
		$pw=$_POST['password'];

		if($un=="")
		{
			
			//echo "Please provide username and password";
			$unerr="*Please give username";
		}
		else if($pw=="")
		{
			
			
			$pwerr="*Please give password";
		}

		else
		{
		    if($un=="admin" && $pw="5555")
				{
					header("location:homeadmin.php");
				}
				else
				{
					echo '<script>   alert("invalid username or password ")   </script>';
				}
		}
	}
	


?>
<html>
	<head>
		<title>My Rerstaurent</title>
	</head>
	<body bgcolor="black">
		<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
			
	
			
			<br/>
			
			<img src="kko.jpg" width="100%" >
			
		
			
				<table   bgcolor="silver" align="right"   width="100%">
			
			   <tr>
			     
               	 <th align="center" ><font size="5" color="black"> <b> Admin Login  </b></font> </th>
				 <th align="right" ><font size="5" color="white"> <b>  </font> </th>
               </tr>
			   
			     <tr>
			     
               	 
				 <td align="left" > <fieldset><font size="5" color="black"> userName : <input type="textbox" name="username" > </font></fieldset> 
				 <label> <br><span style="color:red"><?= $unerr; ?></label></th>
               </tr>
			   
			   
			   
			   
			   <tr>
			      <td align="left" ><fieldset><font size="5" color="black"> Password : <input type="password" name="password" > </fieldset> </font> <label><br><span style="color:red"><?= $pwerr; ?></label></th>	
			    </tr><br>
			    
			   
			   <tr>
			   
			 <td align="center" ><font size="6" color="black"> <input type="Submit" value="Submit" name="Login"/>   </font></td>
			  
			  </tr>
            </table>
			
			
  
	<img src="foot.png" width=100%"> 
    		</form>

	</body>
</html>
