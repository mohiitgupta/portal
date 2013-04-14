
<?php

include("../verification_part_rolling_adv/config.php");

/**
   here we get the confirm code to verify the user
**/

//echo "varification starts";

$confirmCode=$_GET['confirmcode'];

//echo $confirmCode;

$tableName="registrationInformation";
//echo $tableName;

if(!mysql_select_db("$db_name"))
{

  echo "error database selection";
}

// check for confirm code if available in the table

$sql1="SELECT * FROM $tableName WHERE confirm_code='$confirmCode'";
$result1=mysql_query($sql1);

// If successfully queried

if($result1){

// Count how many row has this passkey
$count=mysql_num_rows($result1);


// if confirm code is found in the database we can trans fer verified member to the new table


if($count==1){

$rows=mysql_fetch_array($result1);
$name=$rows['name'];
$email=$rows['email'];
$password=$rows['password'];
$country=$rows['country'];

$tbl_name2="finalInformation";


// Insert data to the finalInformtion table from registrationInformation table

if(!mysql_select_db("$db_name"))
{

  echo "error database selection";
}


$result2=mysql_query("INSERT INTO finalInformation(unique_id,name, email, password, country)VALUES('$password','$name', '$email', '$password', '$country')");

}

// if not found passkey, display message "Wrong Confirmation code"
else {
echo "Wrong Confirmation code";
}

if($result2){

echo "<html>
<title>sign up form</title>
<style type='text/css'>
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
<body>";
include('../verification_part_rolling_adv/header.php'); echo $header_content; 
echo "<div>
<p style='text-align:center; font-size:20px; color:red;'>
Dear Sir/ Madam,
<br/>
<br/>
Thank you for Registering with our Database Portal.
<br/>
You may now proceed to fill-up your data/ application form by logging in our Database Portal using the following details and by clicking the link which follows as below:
<br/>
<br/>
Your registered e-mail ID:       $email
<br/>
Your registered password:     $password
<br/>
<br/>
Please login at:<a href='http://www.iitbhu.ac.in/rolling/login'>http://www.iitbhu.ac.in/rolling/login</a>
<br/>
[Note: After your first successful LOGIN, you will also get an option to reset your password or to resend your current password to your registered e-mail ID.]
<br/><br/><br/>
Thank you

</p>
";
 include('../footer.php');echo $footer_content;
echo "</div>
</body>
</html>";

// Delete information of this user from table "temp_members_db" that has this passkey
$sql3="DELETE FROM $tbl_name1 WHERE confirm_code = '$confirmCode'";
$result3=mysql_query($sql3);

}

}
mysql_close();
?>

