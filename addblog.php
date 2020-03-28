
<!DOCTYPE html>
<html>
	<head>
		<title>my info</title>
	</head>
	<body bgcolor="black">
		<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype="multipart/form-data"">
		
		 
		
							<table  align="center" bgcolor="olive" width="100%">
                
				<tr>
				<th rowspan="2"><img src="logo.png"  width="400" height="100"></th>
				
               
               </tr>
                
                <th><a href="home.php">Home</a> </th>
                <th><a href="menu.php">Menu</a> </th>
                <th><a href="res.php">Restaurant</a> </th>
				
                <th><a href="regis.php">Register</a> </th>
				<th ><a href="blog.php"> Blog</a> </th>

            </table>
			
				<br/>
			
			<img src="sli.jpg" width="100%" >
			
			<br/>
			
			
			
			<br/>
					
		
	
						<fieldset>   <!--photo upload html position -->// grp element in a form
					<legend> 	<font size="5" color="white">	Add a blog </font> </legend>
							<img src="image.png" alt="upload image" height="90"><br/>              
								<input type="hidden" name="size" value="10000000"/><br/><br/>   //file read syntax
								&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image" /> <br/>
								
								<textarea name="cap" cols="40" rows="2" placeholder="write a caption"></textarea>
								<br/>
									<textarea name="des" cols="40" rows="3" placeholder="write a description"></textarea>
								<br/>
							
								<input type="submit" name="upload" value= "upload image">
								
								
						</fieldset>
			
			         
						
		
							<img src="foot.png" width=100%"> 
						 
		
    		</form>
			
	</body>
</html>
