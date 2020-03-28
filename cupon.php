
<!DOCTYPE html>
<html>
	<head>
		<title>cupon</title>
	</head>
	<body bgcolor="black">
		<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
			<table>
               
               

			</table>

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
			
			
			
		
			 <table  border="1"  bgcolor="black" align="center"   width="50%">		
		
	
				<tr>

               <th>				<fieldset>   <!--photo upload html position -->
					<legend> 	<font size="5" color="white">	add a cupon  </font> </legend>
			>
								<br/>
								<br/>
								 <input type="text" name="cup"  placeholder=" cupon code ">   
								<br/>
								<br/>
								<br/>
								
									 <input type="text" name="per" placeholder=" persentance  "> 
								<br/>
								<br/>
								 <font align="left" color="white"> Valid cupon till  :&nbsp;  &nbsp;   <input type="date" name="p" style="width: 20%" size="35" >   </font>
								<br/>
								<br/>
								
								
							
								<input type="submit" name="add" value= "add ">
								
								
						</fieldset>
						</th>
						</tr>
			
			         <table/>
			
			
	
			
			
			
	<img src="foot.png" width=100%"> 
    		</form>

	</body>
</html>
