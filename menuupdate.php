
<!DOCTYPE html>
<html>
	<head>
		<title>menu update </title>
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
			   
			   
					<legend> 	<font size="5" color="white"> Updatethe menu  </font> </legend>
					
					  <input type="id" name="menu" placeholder=" menu id  "> 
								<br/>
								
							<img src="image.png" alt="upload image" height="90"><br/>
								<input type="hidden" name="size" value="10000000"/><br/><br/>
								&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image" /> <br/>
								
								 <input type="text" name="name"  placeholder=" input name">   
								<br/>
								<br/>
								<select  align="right" Name="comvo" >
								<option value="null">  select type  </option>
									
									   <option value="Main Course"> Main Course </option>
									     <option value="Snacks"> Snacks </option>
										   <option value="Drinks"> Drinks </option>
									   
									  
									</select/>	
									
									<br/>
									<br/>
									 <input type="text" name="des" placeholder=" description "> 
								<br/>
								<br/>
								 <input type="text" name="price" placeholder=" input price "> 
								<br/>
								<br/>
								
								
							
								<input type="submit" name="upload" value= "update menu ">
								
								
						</fieldset>
						</th>
						</tr>
			
			         <table/>
					 
					 
					 		   
					   <table border=1 align="center" bgcolor="black" width="100%">
							 
							 
						<tr>	
								 <th><font size="3" color="white"> menuid</font></th>		
								<th><font size="3" color="white"> Name  </font></th>
								 <th><font size="3" color="white"> type  </font></th>
								  <th><font size="3" color="white"> description  </font></th>
								   <th><font size="3" color="white">price </font></th>
								      <th><font size="3" color="white">Photo </font></th>
								
						 </tr>

						
						 
							  <tr>
								  <td>  <font size="3" color="white">(1)</font></td>
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
