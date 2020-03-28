
<html>
	<head>
		<title>users</title>
	</head>
	<body bgcolor="black">
		<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
			
	
				<table  align="center" bgcolor="olive" width="100%">
                
				<tr>
				<th rowspan="2"><img src="logo.png"  width="400" height="100"></th>
				
               
               </tr>
                
                  <th><a href="homeadmin.php">sells report</a> </th>
                <th><a href="menuup.php">Menu</a> </th>
                <th><a href="cupon.php">Cupon</a> </th>
				<th><a href="users.php">users</a> </th>
               

            </table>
			<br/>
			
			
			
			 
			 <br/>
			 <br/>
			 <br/>
			 <br/>
			
			<img src="kko.jpg" width="100%" >
			
			
			 <table  align="left" bgcolor="black" width="100%">
			  <tr>
			      <th>   <font size="7" color="white"> block a user </font> </th>
			</tr>
			<tr>
			                <th ><input type="text" name="username" placeholder=" username "> </th>
							
			</tr>				
					<tr>			
							
						<th>		<input type="submit" name="block" value= "Block USer  "> </th>
			 </tr>
			 </table>
			 
			 <table border=1 align="left" bgcolor="black" width="100%">
			 <tr>
			      <th>   <font size="7" color="white"> user details </font> </th>
			</tr>
			</table>
			
		 <table border=1 align="left" bgcolor="gray" width="100%">
							 
							 
						<tr>	
									
								<th><font size="3" color="white"> First Name  </font></th>
								 <th><font size="3" color="white"> Last Name  </font></th>
								  <th><font size="3" color="white"> email  </font></th>
								   <th><font size="3" color="white"> phone  </font></th>
								<th><font size="3" color="white"> username  </font></th>
								 <th><font size="3" color="white"> password  </font></th>
								  <th><font size="3" color="white"> gender  </font></th>
								   <th><font size="3" color="white"> dateofbirth  </font></th>
								   <th><font size="3" color="white"> Status  </font></th>
						 </tr>

						
						  <!--putting value from db to table -->
						 
							  <tr>
								
								   <td>  <font size="3" color="white">plaban</font></td>
									<td> <font size="3" color="white">aziz</font></td>
									 <td>  <font size="3" color="white">yoyokid</font></td>
									  <td><font size="3" color="white">0177</font></td>
									     <td>  <font size="3" color="white">dsd</font></td>
									<td> <font size="3" color="white">hjkgk</font></td>
									 <td>  <font size="3" color="white">male</font></td>
									  <td><font size="3" color="white">19/2/1995</font></td>
									    <td><font size="3" color="white">valid</font></td>
							  </tr>
						 

							</table>
							
							<br/><br/><br/>
			
		
			
			
  
	<img src="foot.png" width=100%"> 
    		</form>

	</body>
</html>
