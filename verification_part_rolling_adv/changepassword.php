<?php

//@@@@@@ code for forgot password
$error_report=array();
$flag=0;
if(!$_POST['change_password1'])
{

if(!$_POST['change_password'])

	{
		
   $_SERVER['REQUEST_METHOD']="GET";
    }
   else
   {
     $_SERVER['REQUEST_METHOD']="POST";
		
		
    }

 
   if($_SERVER['REQUEST_METHOD']=="POST")
      {
          
          if(0==preg_match("/.+@.+\..+/",$_POST['email_log']))
              {
                       
                  $error_report['email_log']="Please enter a valid email address.";     
              }
         
        if(count($error_report)==0)
            { 
              
               $email_log=$_POST['email_log'];
	
                    
									 
						/**
						*after validation for creating data into tables

						**/              
						include("../verification_part_rolling_adv/config.php");

						mysql_select_db($db_name);
						 
						$result=mysql_query("SELECT * FROM finalInformation where email='$email_log'");
						
						if($result)
						{
							$flag=1;
						}
						
						
			}
	
	}
	
	}
	
	else
	{
				if($_SERVER['REQUEST_METHOD']=="POST")
				{
						$_SERVER['REQUEST_METHOD']="POST";
						
							$oldPassword=$_POST['recent_password'];
							$newPassword=$_POST['new_password'];
							$confirmPassword=$_POST['confirm_password'];
							   if(empty($_POST['recent_password']))
							   {
								$error_report['recent_password']="Please Enter the Password";     
							   
							   }
							   if(empty($_POST['new_password']))
							   {
									$error_report['new_password']="Please Enter the new Password";
							   
							   }
							   if(empty($_POST['confirm_password']))
							   {
									$error_report['confirm_password']="Please Enter the confirm Password";
							   
							   }
							
							
						
										include("../verification_part_rolling_adv/config.php");
										mysql_select_db($db_name);
										$result=mysql_query("SELECT * FROM finalInformation where password='$oldPassword'");
						
											if(!$result)	
											{
												
												$error_report['recent_password']="Wrong Password Please Enter Correct Password.";     
												
												
											}
											else
											{
												if($newPassword==$confirmPassword)
													{
													
															
														$sql3="UPDATE finalInformation SET password='$newPassword' WHERE password='$oldPassword'";
														$result3=mysql_query($sql3);
														
														if($result3)
														{
																$flag=2;
														
														}
													
													}
													else
													{
															$error_report['confirm_password']="your new password and confirm password are not same.";     
												
													
													}
											
											
											}
						
						
							if(count($error_report)==0)
								{ 
											
								   		
								}
	
		}
	
	
	
	}


function messageAlert($string)
  {
      global $error_report;
     if($error_report[$string])
       {
          return "<tr id='formError'><td colspan='5'>".$error_report[$string]."</td></tr>";
        }
        
  }

function h($string)

 {
  return htmlspecialchars($string,ENT_QUOTES);
 }




?>

<html>
<title>sign up form</title>
<style type="text/css">
BODY { font-family: verdana,arial,helvetica,sans-serif; font-size: 10pt; background-color: #CBD1D5; color: #000; margin: 0; }
TD { font-family: verdana,arial,helvetica,sans-serif; font-size: 10pt; }
TH { font-family: verdana,arial,helvetica,sans-serif; font-weight: bold; font-size: 10pt; }
div{ background-color: #FFF;font-family: verdana,arial,helvetica,sans-serif;width:750pt; font-weight: bold; font-size: 10pt;margin: 0px auto 0px auto;padding: 0px 0px 0px 0px;}
A.confName:link { text-decoration: none; color: green; }	
A.confName:visited { text-decoration: none; color: green; }
A.confName:hover { color: red; }
A:link { text-decoration: none; color: green; }
A:visited { text-decoration: none; color: green; }
A:hover { color: red; }
em { font-style: italic; }
strong { font-weight: bold; }
.signupbox{padding-top:20pt;padding-bottom:50pt;}
.toptitle{font-weight: bold;color: #751E1E;font-size: 15pt;text-align:center;float:right;padding-right:100pt;}
#formError {font-weight:bold;color:red;text-align:center;    }
</style>
<body>
<div>

<form action="changepassword.php" ecntype='multipart/form-data' method='POST'>
	<?php include("../verification_part_rolling_adv/header.php"); echo $header_content;  ?>
			<?php
					if($flag==0)
					{
					echo "<div class='loginbox'>
<h2><p style='padding-left:220pt;'>ROLLING ADVERTISEMENT FOR FACULTY</P></h2>
<h2><p style='padding-left:245pt;'><i>(Version for demonstrating PoC)</i></P></h2>
<table width='350' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td>
<table width='100%' border='0' cellspacing='4' cellpadding='0'>
<tr>
<td colspan='3'><strong>Change Password:</strong></td>
</tr>
<td>E-mail</td>
<td>:</td>
<td><input name='email_log' type='text' id='email_log' size='30' value=". h($_POST['email_log'])."></td>
".messageAlert('email_log')."
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type='submit' name='change_password' id='change_password' value='reset password'></td>
</table>
</form></td>
</tr>
</table>";

}
else if($flag==1)
{
  echo "<div class='loginbox'>
<h2><p style='padding-left:220pt;'>ROLLING ADVERTISEMENT FOR FACULTY</P></h2>
<h2><p style='padding-left:245pt;'><i>(Version for demonstrating PoC)</i></P></h2>
<table width='350' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td><form name='form1' method='POST' action='login.php'>
<table width='100%' border='0' cellspacing='4' cellpadding='0'>
<tr>
<td colspan='3'><strong>Password Change:</strong></td>
</tr>
<td>Recent Password</td>
<td>:</td>
<td><input name='recent_password' type='text' id='recent_password' size='30' value=". h($_POST['recent_password'])."></td>
".messageAlert('recent_password')."
</tr>
<tr>
<td>New Password</td>
<td>:</td>
<td><input name='new_password' type='password' id='new_password' size='30' value=".h($_POST['new_password'])."></td>
".messageAlert('new_password')."
</tr>
<tr>
<td>Confirm Password</td>
<td>:</td>
<td><input name='confirm_password' type='password' id='confirm_password' size='30' value=".h($_POST['confirm_password'])."></td>
".messageAlert('confirm_password')."
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type='submit' name='change_password1' id='change_password1' value='login'> 
</tr>
</table>
</form></td>
</tr>
</table>";




}

else
{
		echo"<div style='text-align:center;'>
<br/>
<br/>
<p style='text-align:center; font-size:20px; color:red;'>Your password is changed.
<br/>
<br/><br/>Thankyou.
</p>
<input type='button' value='close' onclick=dohi()>
</div>";

	

}


			?>
	
	 <?php include('../footer.php');echo $footer_content; ?>

</form>	
</div>
</body>
</html>