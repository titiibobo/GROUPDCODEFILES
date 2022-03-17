<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
      <title>Wrong Login - XYZ Airline Flight Schedule Portal</title>
<script type="text/javascript">


function submit_check()
{
	var email1 = document.forms[0].elements[2].value;
	var email2 = document.forms[0].elements[3].value;
	var amount = document.forms[0].elements[4].value;
	if (amount.length<1)
	{
	alert("Please, select a password. You have not selected a password");
	}
	if (amount.length<6)
	{
	alert("Your password must be at least 6 characters long. Please ensure you password is up to eight characters long before attempting to use the submit button");
	}
	if (email1.length<1)
	{
	alert("The Email field cannot be left blank. Please, input email.");
	}
		else if (email1 !== email2) {
			alert("The emails you have provided do not match. Please, ensure they match before continuing");
			}
}

function do_two()
{
	get_rate();
	calculate_price();
}
function firstNameCheck(inputtxt)
      { 
		  var firstnameletters = /^[A-Za-z]+$/;
		  if(inputtxt.value.length<1) 
		  	  {
				alert("The First Name field cannot be left blank. Please, input First Name.");
			  }
		  else if(inputtxt.value.match(firstnameletters))
			  {
			  //alert('Your name have accepted : you can try another');
			  return true;
			  }
		  else
			  {
			  alert('Please input alphabet characters only in the First Name field');
			  return false;
			  }
      }
function lastNameCheck(lastnameinput)
      { 
		  var lastnameletters = /^[A-Za-z]+$/;
		  if(lastnameinput.value.length<1) 
		  	  {
				alert("The Last Name field cannot be left blank. Please, input Last Name.");
			  }
		 else  if(lastnameinput.value.match(lastnameletters))
			  {
			  //alert('Your name have accepted : you can try another');
			  return true;
			  }
		  else
			  {
			  alert('Please input alphabet characters only in the Last Name field');
			  return false;
			  }
      }
	  
function check_email()
{
	var email1 = document.forms[0].elements[2].value;
	var email2 = document.forms[0].elements[3].value;
    var validEmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
	if (email1.match(validEmail))
	 {
	  return true;
	 }
	 else
	 {
	  alert('You have not entered a valid email address. Please, enter a valid email address to continue');
	  return false;
	 }
	if (email1.length<1)
	{
	alert("The Email field cannot be left blank. Please, input email.");
	}
		else if (email1 !== email2) 
		    {
			alert("The emails you have provided do not match. Please, ensure they match before continuing");
			}
}

function check_password()
{
	var amount = document.forms[0].elements[4].value;
	if (amount.length<1)
	{
	alert("Please, select a password. You have not selected a password");
	}
	else if (amount.length<6)
	{
	alert("Your password must be at least 6 characters long. Please ensure you password is up to eight characters long before attempting to use the submit button");
	}
	
}
function check_username()
{
	var username = document.forms[0].elements[5].value;
	var usernamepattern = /^[0-9a-zA-Z]+$/;
	if (username.length<1)
	{
	alert("Please, input a username. The username field cannot be left blank");
	}
	else if(username.match(usernamepattern))
	 {
	 //alert('A username cannot contain special characters. Only numbers and letters are allowed');
	 //alert('Did not macth');
	 return true;
	  }
	 else
	 {
	  alert('Special characters are not allowed in the username field. Use only alphabets and numbers');
		return false;
	 }
	
}


</script>      
      
</head>

<body>
    <!-- create a class showcase which encapulates it all -->
<section class="showcase">


<div align="center">
<video src="airplanevideo.mp4" muted loop autoplay></video>
<form  role="form" method="POST" action="process_login.php">

<!-- create a class in showcase to reveal what you want to be untop with css  -->
<div class = "loginform"> 
<div align="center"><h2>Login</h2></div>

<br />

   
<!-- <body background="">  
<br />
<div align="center">
  <h2 style="color:#F00000"> Error: Wrong Login </h2>
  <h3><u>Registration Form</u></h3>
  <h4 style="color:blue">The email-pasword combination you provided is incorrect. Please try again using the form below.</h4>
</div>

<div align="center">
<form  role="form" name="form1" method="POST" action="process_login.php"> -->
<!-- <table width="95%" border="0" align="center">
                                                  <tr>
                                                  <td width="50%" align="right"><label>Email:</label></td>
                                                    <td width="50%"><div align="left">
                                                    
                                                      <input id="email" type="text" class="form-control" name="email" value="" placeholder="Email" onMouseOut="return check_email()" >
                                                    </div></td>
                                                    
                                                  </tr>
                                                  <tr>
                                                  <td width="50%" align="right"><label>Password:</label></td>
                                                    <td><div align="left">
                                                      <input id="password" type="password" class="form-control" name="password" placeholder="Password" onMouseOut="return check_password()">
                                                    </div></td>
                                                  </tr>
                                                  <tr>
                                                    <td colspan="2" align="center"><span style="float:center;"><button type="submit" class="btn btn-custom" onMouseOver="return submit_check()" 
													style="background-color:#060; font-weight:bold; color:#FFF;">Submit</button></span>
</td>
                                                  </tr>
                                                </table>
</form>
       
</div>
</body>
</html>                                                 -->
<table width="95%" border="0" align="center">
 <tr>
<td width="50%" align="right"><label>Email:</label></td>
<td width="50%"><div align="left">
                                                    
 <input id="email" type="text" class="form-control" name="email" value="" placeholder="Email" onMouseOut="return check_email()" >
</div></td>
                                                    
</tr>
<tr>
<td width="50%" align="right"><label>Password:</label></td>
<td><div align="left">
<input id="password" type="password" class="form-control" name="password" placeholder="Password" onMouseOut="return check_password()">
</div></td>
</tr>
 <tr>
<td colspan="2" align="center"><span style="float:center;"><button type="submit" class="btn btn-custom" onMouseOver="return submit_check()" style="background-color:#060; font-weight:bold; color:#FFF;">Submit</button></span>
</td>
</tr>
</table>
</div>
<!-- create a class in showcase to reveal what you want to be untop with css ends here  -->
</section>
<!-- showcase class ends here -->
</form>
</body>

<style>
    /* very important for video full screen */
    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }
.showcase{
    position:absolute;
    right: 0;
    width: 100%;
    min-height: 100vh;
    padding-top: 150px;
    align-items: center;
    background: black;
    color: black;
    z-index: 2;
}

.showcase video{
    position: absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    object-fit: cover;

}

.loginform{
position: relative;
z-index: 4;

}
</style>
</html>
