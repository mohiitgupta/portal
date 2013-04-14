<?php
   /**
    *validation for the form
   **/


  
	$error_report=array();

$flag=0;
   if(!$_POST['verify'])
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
    		      if(empty($_POST['name'])) 
    		          {
    		              $error_report['name']="Please enter your name in the space given.";     
    		           }
				  else if(is_numeric($_POST['name']))
						{
							$error_report['name']="your name should only contains alphabets.Please enter again.";
						}
				else if(strlen($_POST['name']) < 4)
						{
							$error_report['name']="your name contains less characters. Please enter a valid name.";
						}
						
    		      if(0==preg_match("/.+@.+\..+/",$_POST['email']))
    		          {                   
		                  $error_report['email']="Please enter a valid email address.";     
             		 }
       	              if(empty($_POST['country']))
              		{
                 
                		 $error_report['country']="Please enter your country name";    
             		 }
				
              
        				if(count($error_report)==0)
            				{ 
                			 $name=mysql_real_escape_string($_POST['name']);
               				 $email=mysql_real_escape_string($_POST['email']);
               				 $country=mysql_real_escape_string($_POST['country']);   
                                          
/**
*after validation for creating data into tables

**/              
						include("./verification_part_rolling_adv/config.php");


//echo "after config";


// table name 

						$tbl_name="registrationInformation";


// Random confirmation code 
						$confirm_code=md5(uniqid(rand(5,2))); 


// values sent from form 
						$name=$_POST['name'];
						$email=$_POST['email'];
						$country=$_POST['country'];
								
						$uniqueid=str_replace(" ", "", $name);
						$uniqueid=str_replace(".", "", $uniqueid);
							
					    //secho $uniqueid;
						$password=$uniqueid.rand(1,100000);


						include("./verification_part_rolling_adv/verification_tables.php");


//echo "tables created";

						mysql_select_db($db_name);

// Insert data into database 
						$sql_info="INSERT INTO registrationInformation(confirm_code, name, email, password, 							country)VALUES('$confirm_code', '$name', '$email', '$password', '$country')";
						$result=mysql_query($sql_info);
 
//echo $result;
 // echo mysql_errno();
      						if(mysql_errno()==0)
           						{
// if suceesfully inserted data into database, send confirmation link to email 
										if($result){
// send e-mail to ...
							$to=$email;

	// Your sub										
	$subject="Your confirmation link here";
	$header="from: response@itbhu.net";
			

$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account and proceed further \r\n";
$message.="http://iitbhu.ac.in/rolling/verification_part_rolling_adv/verify_your_account.php?confirmcode=$confirm_code \r\n";
$message.="your password for login your account:\r $password";
$message.="\r\n\r\nThankyou.";

// send email
												$sentmail = mail($to,$subject,$message,$header);
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
             //include('signup-ac.php');
      				     }
       else
            {
                $error_report['email']="email address already exist.";
                
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
A.confName:link { text-decoration: none; color: #000000; }	
A.confName:visited { text-decoration: none; color: #000000; }
A.confName:hover { color: #666666; }
A:link { text-decoration: none; color: #0000ff; }
A:visited { text-decoration: none; color: #0000ff; }
A:hover { color: #ff0000; }
em { font-style: italic; }
strong { font-weight: bold; }
.signupbox{padding-top:20pt;padding-bottom:50pt;}

.toptitle{font-weight: bold;color: #751E1E;font-size: 15pt;text-align:center;float:right;padding-right:100pt;}
#formError {font-weight:bold;color:red;text-align:center;    }
</style>
<script type="text/javascript">
function dohi()
{
  window.opener =self;
window.close();
}

</script>
<body>
<div>

<form action="index.php" ecntype='multipart/form-data' method='POST'>
	<?php  include('./verification_part_rolling_adv/header.php'); echo $header_content;  ?>

	<?php  include('./verification_part_rolling_adv/form_parts.php'); echo $verify_content;  ?>
	 <?php include('./footer.php');echo $footer_content; ?>
</form>	
</div>
</body>
</html>
