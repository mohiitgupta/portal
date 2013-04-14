<?php

//@@@@@@ code for forgot password
$error_report=array();
$flag=0;
if(!$_POST['password_reset'])

	{
		
   $_SERVER['REQUEST_METHOD']="GET";
    }
   else
   {
     $_SERVER['REQUEST_METHOD']="POST";
		
		
    }
//echo $_SERVER['REQUEST_METHOD'];
 
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

//echo "tables created";

mysql_select_db($db_name);
 
$result=mysql_query("SELECT * FROM finalInformation where email='$email_log'");

if($result)
{
   
$rows=mysql_fetch_array($result);
$password=$rows['password'];

$newPassword=rand(1,10000000000);


$sql3="UPDATE finalInformation SET password='$newPassword' WHERE password='$password'";
$result3=mysql_query($sql3);

if($result3)
{
$to=$email_log;

	// Your sub										
	$subject="Your new password for faculty registration";
	$header="from: response@itbhu.net";
			

$message="your new password for login your account:\r $newPassword";
$message.="\r\n\r\nThankyou.";

// send email
												$sentmail = mail($to,$subject,$message,$header);
												}
											
											}
// if not found 
										else {
												echo "Not found your email in our database";
											}

// if your email succesfully sent

						if($sentmail){

									
							$flag=1;
                                                     //  include("./verification_part_rolling_adv/mail_message.php");


						}
						else {


						echo "Cannot send Confirmation link to your e-mail address";
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

<form action="newpassword.php" ecntype='multipart/form-data' method='POST'>
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
<td colspan='3'><strong>Log In:</strong></td>
</tr>
<td>E-mail</td>
<td>:</td>
<td><input name='email_log' type='text' id='email_log' size='30' value=". h($_POST['email_log'])."></td>
".messageAlert('email_log')."
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type='submit' name='password_reset' id='password_reset' value='reset password'></td>
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
<p style='text-align:center; font-size:20px; color:red;'>Your New Password  Has Been Sent To Your Email Address .
<br/>Please change the password before login into your account.
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