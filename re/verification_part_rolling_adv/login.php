<?php
   /**
    *validation for the form
   **/
$signal=0;
   
   $error_report=array();
   if(!$_POST['login'])
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
          if(empty($_POST['password_log'])) 
              {
                     
                  $error_report['password_log']="Please enter your password in the space given.";     
               }
          if(0==preg_match("/.+@.+\..+/",$_POST['email_log']))
              {
                       
                  $error_report['email_log']="Please enter a valid email address.";     
              }
         
        if(count($error_report)==0)
            { 
              
                $email_log=$_POST['email_log'];
                $password_log=$_POST['password_log'];   
  
                    
             
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
$uniqueid=$rows['unique_id'];
$name=$rows['name'];
$country=$rows['country'];

//echo $password;

}
else
{
 echo 'query failed';

}

if($password==$password_log)
{
//echo $email_log;


$signal=1;
echo $login_content;

}
else
{
  
   $error_report['password_log']="password incorrect";
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

<form action="login.php" ecntype='multipart/form-data' method='POST'>
	<?php include("../verification_part_rolling_adv/header.php"); echo $header_content;  ?>

	<?php include("../verification_part_rolling_adv/form_parts.php"); echo $login_content;  ?>
	 <?php include('../footer.php');echo $footer_content; ?>

</form>	
</div>
</body>
</html>
