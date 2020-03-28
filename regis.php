

<?php
 // firstname validation
 
 $flabel=$llabel=$emal= $p= $u=$pws=$cp="";
 if(isset($_POST['submit']))
	{
 
  $Fname = $_POST['Fname'];
  $validfname=0;
  


  if($Fname=="")
  {
       $flabel="Name can't be empty";
  }
  elseif (strlen($Fname)>19) {
      $flabel="Name Length must be less than 20";
  }
  elseif ((ord($Fname[0])>=65&&ord($Fname[0])<=90)||(ord($Fname[0])>=97&&ord($Fname[0])<=122)) {
      $validfname=1;
      $flabel="Valid name";
  }
  else {
       $flabel="Name must start with  Letter";
  }


//--------------------------------------------------------------////65-90=capital letter ,97-122=small lttr,48-57=numbe

 // lastname validation
  $lname = $_POST['Lname'];
  $validlname=0;
  

  if($lname=="")
  {
       $llabel="Name can't be empty";
  }
  elseif (strlen($lname)>19) {
      $llabel="Name Length must be less than 20";
  }
  elseif ((ord($lname[0])>=65&&ord($lname[0])<=90)||(ord($lname[0])>=97&&ord($lname[0])<=122)) {
      $validlname=1;
      $llabel="Valid name";
  }
  else {
       $llabel="Name must start with a capital Letter";
  }
 //-----------------------------------------------------------------
 
  // email validation
 	$email=$_POST['email'];
	$flag=false;
	
	$validemail=0;
	
	if($email=="")
	{
		$emal="input  Email first.";
			
	}
	else
	{
		if((ord($email[0])>=65&&ord($email[0])<=90)||(ord($email[0])>=97&&ord($email[0])<=122)||(ord($email[0])>=48&&ord($email[0])<=57))
		{
			
			for($i=0;$i<strlen($email);$i++)
			{
				if(ord($email[$i])==64)
				{
                   $checkdot=substr($email, $i+1); 
					
					for($j=1;$j<strlen($checkdot);$j++)
					{

					
                         if(ord($checkdot[$j])==46 )
                              {

                              	$afterdot=substr($checkdot, $i+1); 

                              	if((ord($afterdot[0])>=97&&ord($afterdot[0])<=122)||(ord($afterdot[0])>=65&&ord($afterdot[0])<=90))
                              	{
                                  $flag=true;
                              	}

                             
                              }

					}
				}
				
			}
		}
		
	}


	if($flag==true)
	{
		
		$validemail=1;
		$emal="valid";
	}
	else
	{
		$emal ="Please Enter a Valid Email";
	}
 //-----------------------------------------------------------------
 
  // phone validation
  $phone = $_POST['phone'];
  $validphone=0;
  

  if($phone=="")
  {
      $p= "phone can't be empty";
  }
 
  elseif ( ord($phone[0])>=48 && ord($phone[0])<=57) {
	  
	  if(strlen($phone)<15)
	  {
      $validphone=1;
      $p=  "Valid phone";
	  }
  }
  else {
       $p=  "phone must start with number";
  }
 
 //-----------------------------------------------------------------
    // radio buton validation

    //  $terms=$_POST['gender'];
	
 
 
 //-----------------------------------------------------------------
 
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
        $pws="password Length must be less than 9";
  }
//-------------------------------------------------------------

 // confirm password validation  
    $validcpass=0; 
  $conpassword=$_POST['conpassword'];
  
  
    if($conpassword=="")
  {
     $cp="retype";
  }
  elseif ($password==$conpassword) {
	   $validcpass=1;
        $cp="password match";
  }

  else 
  {
         $cp="dont match";
  }
  
	 
        
 //-----------------------------------------------------------------
//storing value on variable
$dob=$_POST['dob'];





if($validfname==1 && $validlname==1  && $validemail==1 && $validphone==1  && $validuser==1 && $validpass==1  && $validcpass==1) //if condition true then query executes 
{
   

    echo "<script type='text/javascript'>alert('Successfull');</script>";

}

else
{
	 echo "<script type='text/javascript'>alert('unSuccessfull');</script>";
}

	}
	
	
 

 

?>

<!DOCTYPE html>
<html>
	<head>
		<title> Register user</title>
		

 
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
  


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
			
			<img src="kko.jpg" width="100%" >
			
			<table   bgcolor="black" align="left"   width="30%">
			
			
			     
               	  <th align="left" ><font color="white">	<img src="rf.png"  > </th>
               
			
            </table>
			
			 <table align="center" width="50%">  <!-- inside this table there are all textboxs-->
										 <tr>
											   
												 <th align="left"><font size="6" color="white"> Register your Information</font> </th>
										 </tr>
										 
										  <tr>
											   
												 <th align="left"><br/><br/><br/></th>
										 </tr>
										
										 
										  <tr>
										  
											   <td> <font align="right" color="white">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
											   First Name :  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
											   <input type="text" name="Fname" id="fname" >  </font> 
											  &nbsp;<font  color="white"><label><?= $flabel; ?>   </label> </font></td>
										 </tr>
										 
										 
										 
										 
										  <tr>
										       <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
										  <tr>
										       <td>  <font align="left" color="white">    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
											   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Last Name :  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; 
											   &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="Lname"  id="lname"  / >  </font> <font  color="white"><label><?= $llabel; ?> </label></font> </td>
										   <tr/>
										 
										  <tr>
										       <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
										 
										 <tr>
										        <td> <font align="left" color="white">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
												&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												<input type="text" name="email"  size="35" id="email" />  </font><font  color="white"><label><?= $emal; ?> </label></font> </td>
										  <tr/>
										  
										   <tr>
										         <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
										  
										   <tr>
										         <td> <font align="left" color="white">     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
												 Phone : &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
												 <input type="text" name="phone" id="phone"  /> <font  color="white"><label><?= $p; ?> </label> </font> </font> </td>
										  <tr/>
										   <tr>
										         <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
										  
										  <tr>
										          <td> 
												  <div class="container box">
												    <div class="form-group">
												  <font align="left" color="white">    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; UserName :&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; <input type="text" name="username"  size="35" id="username" class="form-control"> <font  color="white"><label><?= $u; ?> </label></font> </font> 
												 </div>
												 </div>
												 </td>
										  <tr/>
										  
										  
										  <tr>
										          <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
										  
										   <tr>
										           <td> <font align="left" color="white">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
												   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
												   &nbsp;  &nbsp;&nbsp;&nbsp;  &nbsp;  <input type="password" name="password" /> <font  color="white"><label><?= $pws; ?> </label>   </font> </font> </td>
										  <tr/>
										  
										  <tr>
										            <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
										  
										   <tr>
										            <td> <font align="left" color="white">    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Confirm Password :&nbsp;  &nbsp;   <input type="password" name="conpassword"  id="cpassword" ><font  color="white"><label><?= $cp; ?> </label> </font>  </font> </td>
										  <tr/>
										  
										  <tr>
										            <td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
											  
											  <tr>
												<td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender :&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="radio" name="gender"  value="male"> Male 
													&nbsp; <input type="radio" name="gender" value="female"> Female 
													&nbsp; <input type="radio" name="gender" value="other"  id="radio" > Other </font> </br>
													<span id="r">  </span>
													
												</td>	
												  
											  </tr>
										  
										   
										  <tr>
															<td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
										  
										   <tr>
															<td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Date OF Birth :&nbsp;  &nbsp;   <input type="date" name="dob" style="width: 20%" size="35" >   </font> </td>
										  <tr/>
										  
											<tr>
																<td> <font align="left" color="white"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font> </td>
										  <tr/>
										  
											<tr>
											
															<td> <font align="left" color="white">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="submit" value="submit" >  </font>  </td>
														 
											<tr/>
										  
									
										  
										  
						 
						 </table>
						 
						 </br></br></br></br>
					
			<fieldset>
			<font  align="center" size="5"  color="white"> <b><i> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;	register and enjoy cupons codes </b><i/> </font>
			
				 <table align="center" width="50%" border=2>  <!-- inside this table there are all textboxs-->
								
										 
										 		<tr>	
								 <th align="center" ><font size="3" align="center"  color="white"> cupon code  </font></th>		
								<th align="center" ><font size="3" align="center"  color="white"> persentage  </font></th>
								 <th align="center" ><font size="3" align="center"  color="white"> valid till   </font></th>
								  
								
						 </tr>

						
						 
							  <tr>
								  <td>  <font size="3" align="center" color="white">cupon</font></td>
								   <td>  <font size="3" align="center"  color="white">10%</font></td>
									<td> <font size="3" align="center"  color="white">20/20/20</font></td>
									 
							  </tr>
					
										 
				</table>
				
				
             </fieldset>
				
				 
               </tr>
			   
			
            </table>
						
			
  
	<img src="foot.png" width=100%"> 
    		</form>
			


	</body>
</html>




 