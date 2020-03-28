
<!DOCTYPE html>
<html>
	<head>
		<title>menu delete</title>
	</head>
	<body bgcolor="black">
		<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data"">
		
		 
		
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
			
			<img src="sli.jpg" width="100%" >
			
			<br/>
			
			
			
			<br/>
			 <table  border="1"  bgcolor="black" align="center"   width="50%">		
		
	
				<tr>

               <th>			
			   
			

			   <fieldset>   <!--photo upload html position -->
			   
			   
					<legend> 	<font size="5" color="white"> Delete THE menu  </font> </legend>
					
					 
									<br/>
									 <input type="text" name="menu" placeholder=" menu id  "> 
								<br/>
								<br/>
								
								
								
							
								<input type="submit" name="upload" value= "delete menu ">
								
								
						</fieldset>
						</th>
						</tr>
			
			         <table/>
					 
					 
					 		   
					   <table border=1 align="left" bgcolor="black" width="100%">
							 
							 
						<tr>	
								 <th><font size="3" color="white"> menuid</font></th>		
								<th><font size="3" color="white"> Name  </font></th>
								 <th><font size="3" color="white"> type  </font></th>
								  <th><font size="3" color="white"> description  </font></th>
								   <th><font size="3" color="white">price </font></th>
								      <th><font size="3" color="white">Photo </font></th>
								
						 </tr>

						
						  <!--putting value from db to table -->
						 
							  <tr>
							
								   <td>  <font size="3" color="white"><1</font></td>
								   <td>  <font size="3" color="white">roll</font></td>
									<td> <font size="3" color="white">Snacks</font></td>
									 <td>  <font size="3" color="white">descripition</font></td>
									  <td><font size="3" color="white">80</font></td>
									    <td><font size="3" color="white">p11.jpg</font></td>
							  </tr>
					
									 

							</table>
					 
					 
						
		
							<img src="foot.png" width=100%"> 
						 
		
    		</form>
			
	</body>
</html>
