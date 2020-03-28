 <?php
session_start();
$fog="1";
 $item=$_SESSION["shopping_cart"];
$con=mysqli_connect("localhost","root","","restaurant");

	if(!$con)
	{
		die("Database Not Connected: ".mysqli_connect_error()."<br/>");
	}
	else
	{
		//echo "Database connected Successfully...<br/>";
	}
//Row Insert
 


?>
			
					
<?php
$u=$pws="";
	if(isset($_POST['submit']))
	{
		
		//-----------------------
		
			
		 // username validation
			   $validuser=0;
			  $username=$_POST['username'];
			  if($username=="")
			  {
				 $u="username can't be empty";
			  }
			  elseif (strlen($username)>19) {
				  
					$u="username Length must be less than 20";
						 
			  }

			  else 
			  {
				  $validuser=1;
					 $u="valid";
				   
			  }
 
 //-----------------------------------------------------------------
 
  // password validation
     $validpass=0; 
					
				  $password=$_POST['password'];
				  
				  if($password=="")
				  {
					 $pws="password can't be empty";
				  }
				  elseif (strlen($password)<9) {
					  
					 
						 $validpass=1; 
					   $pws="valid";
				  }

				  else 
				  {
						$pws="password Length must be less than 20";
				  }
					
	
	//--------------------------------------------------------
	$log=0;
	$ipt="";
	
	$cup=$_POST['cup'];
	 $sql="SELECT * FROM users where username='$username' and password='$password'";	
 $result=mysqli_query($con,$sql);
 if(mysqli_num_rows($result)>0)
 {
	 $row12=mysqli_fetch_array($result);
	 
	 if($row12["status"]=="block")
	 {
		 echo '<script>alert("SORRY !! you are blocked by Admin")</script>';
	 }
    else
	{	
	 $log=1;
 	$sql22="SELECT * FROM cupon ";
	 $result22=mysqli_query($con,$sql22);	
	if(mysqli_num_rows($result22)>0)
			 {
							while($row=mysqli_fetch_array($result22))
							{
										
												if($cup==$row["name"])
												{
													$d=$row["pers"];
													$din=$row["validdate"];
													
													$today =date ('Y-m-d');
													
													if($today<=$din)
													{
														
														 $log=1;
														
														
													
														
													}
													
												}
						
							}
			 }
	}
	

 }
 
 else
 {
	 
	 echo '<script>alert("invalid username of password")</script>';
 }

 }
	
 
 //-------------------------------------
 

 if(isset($_POST["buy"]))
{
	
	foreach($_SESSION["shopping_cart"] as $keys )
						{
							$sql2="select * from sell";
						    $result1=mysqli_query($con,$sql2);
							
							 if(mysqli_num_rows($result1)>0)
							  {	 
						
								 for($row1=0;$row1=mysqli_fetch_array($result1);$row1++)
								 {
									if( $row1["name"]==$keys["item_name"] )
									{
										$num=$row1["quan"]+$keys["item_quantity"];
										
										$sql3="update sell set quan='$num' where name='".$row1["name"]."'";
										mysqli_query($con,$sql3);
										
									
								
									}
									else
									{
										
										  
									}
								 }
								 
							
							  }
								   
							else
							{
								     
							}
							
							
							$sql3="select * from sell where name='".$keys["item_name"]."'";
						    $result3=mysqli_query($con,$sql3);
							
							 if(mysqli_num_rows($result3)>0)
							  {	 
						
							  }
								   
							else
							{
								     $sql="insert into sell(name,quan,price) values('".$keys["item_name"]."','".$keys["item_quantity"]."','".$keys["item_price"]."')";
						   
						                mysqli_query($con,$sql);
									
							}
							
					
						 
						}
 $fog="0";
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			
				unset($_SESSION["shopping_cart"][$keys]);
		
				
			
		}
		
			echo '<script>alert("ORDER TAKEN")</script>';
			session_destroy();
	
}
	

?>					
<!DOCTYPE html>
<html>
	<head>
	<title> Shopping Cart</title>
	  <script>
	  
	  
			function myFunction() {

			  alert("order taken ");
			}
</script>
	</head>
	<body bgcolor="black">
		<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
		
		
		 
		
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
			
		
			 <table align="left" width="30%" bgcolor="black">  <!-- inside this table there are all textboxs-->
										 <tr>
											   
												 <th align="center"><font size="6" color="white"> give your address </font> </th>
										 </tr>
										 
										  <tr>
											   
												 <th align="left"><br/><br/><br/></th>
										 </tr>
										
										 
										  
										 
										  
										  <tr>
										       <td>  <font align="left" color="white"> Block :  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="block" >  </font>  </td>
										   <tr/>
										 
										  <tr>
										       <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
										 
										 <tr>
										        <td> <font align="left" color="white"> Road : &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="road"  >  </font>  </td>
										  <tr/>
										  
										   <tr>
										         <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
										  
										   <tr>
										         <td> <font align="left" color="white">  House : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="house"  > </font> </td>
										  <tr/>
										   <tr>
										         <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
										  
										  <tr>
										          <td> <font align="left" color="white">  Phone :&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="phone"  >  </font> </td>
										  <tr/>
										  
										  
										  <tr>
										          <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
										  
										   <tr>
										           <td> <font align="left" size="4" color="white"> &nbsp;&nbsp; Basundhara Residential Area , Dhaka
  </td>
										  <tr/>
										  
										      <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										
										  
									
										  
										  
						 
						 </table>
					
					
	<table align="left" width="30%" bgcolor="gray" border=1>  <!-- inside this table there are all textboxs-->
										 <tr>
											   
												 <th align="center"><font size="6" color="white"> order details </font> </th>
										 </tr>
										 
					
										<tr>
										<th >Item Name</th>
										<th >Quantity</th>
										<th >Price</th>
										<th >Total</th>
							
									</tr>
									
										<?php
											
					if(!empty($_SESSION["shopping_cart"]))
					{
					
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys)
						{
				
						 $itname=$keys["item_name"];
						
						 
						
						$itq= $keys["item_quantity"]; 
						$itpr= $keys["item_price"];
						$itt= number_format($keys["item_quantity"] * $keys["item_price"], 2);
					
						?>
				
									
					<tr>
									<td><?php echo $itname; ?></td>
									<td><?php echo $itq; ?></td>
									<td>$ <?php echo $itpr; ?></td>
									<td>$ <?php echo $itt;?></td>
								
					</tr>
					
						<?php	
					
				
					
					
					      
							$total = $total + ($keys["item_quantity"] * $keys["item_price"]);
						
							  
						}
						$itp= $total; 
					
					
					}
					?>
					
					<?php
					   if($log==1)
					   {  
				           
						   
				          $itp=$itp - ($itp*($d/100));
					
						   
						   
						   
						 
					   }
					   else
					   {
						   
					   }
						   ?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php if($fog==0)
						                               {
														   echo  $itp=0;
													   }
												else	   
                        							echo  $itp;
												
												
												?></td>
						<td></td>
					</tr>
														  
										  
						 
						 </table>
						 
						 
						 
						 
				 <table align="right" width="30%" bgcolor="black">  <!-- inside this table there are all textboxs-->
										 <tr>
											   
												 <th align="center"><font size="6" color="white"> Use cupons </font> </th>
										 </tr>
										 
										  <tr>
											   
												 <th align="left"><br/><br/><br/></th>
										 </tr>
										
										 
										  
										 
										  
										  <tr>
										       <td>  <font align="left" color="white"> Cupon code :  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="cup" >  </font>  </td>
										   <tr/>
										 
										  <tr>
										       <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
										 
										 <tr>
										        <td> <font align="left" color="white"> username : &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="username"  >  </font>  <font align="left" color="white"><label><?= $u; ?></label></font> </td>
										  <tr/>
										  
										   <tr>
										         <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
										  
										   <tr>
										         <td> <font align="left" color="white">  password : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password"  > <font align="left" color="white"> </font> <label><?= $pws; ?></label> </font></td>
										  <tr/>
										   <tr>
										         <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
								
										  
										      <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
											  
											  	<tr>
											
															<th> <font align="center" size="100" color="white"> <input type="submit" name="submit"  value="Apply code " size="40" >  </font>  </th>
														 
											<tr/>
										  
										
										  
									
										  
										  
						 
						 </table>
						 
						 
						  <table align="left" width="100%" bgcolor="black">  <!-- inside this table there are all textboxs-->
							
										  
										<tr>
											   <form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']);?>">
											   
															<th> <font align="center" size="100" color="white"></font> <input type="submit" name="buy"  value="Order FOOD " size="40" > </th>
															
												</form>			
											<tr/>
										  
										  
						 
						 </table>
						 
			
					
	
			
			



       </form>
						<img src="foot.png" width=100%"> 
							
							
						 
		
    	
			
	</body>
</html>
