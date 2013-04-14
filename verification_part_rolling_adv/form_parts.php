<?php




if($flag==0)
{
$verify_content="<div class='signupbox'>
<h2><p style='padding-left:220pt;'>ROLLING ADVERTISEMENT FOR FACULTY</P></h2>
<h2><p style='padding-left:245pt;'><i>(Version for demonstrating PoC)</i></P></h2>
<table width='350' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td><form name='form1' method='POST' action='index.php'>
<table width='100%' border='0' cellspacing='4' cellpadding='0'>
<tr>
<td colspan='3'><strong>Sign up</strong></td>
</tr>
<tr>
<td width='76'>Name</td>
<td width='3'>:</td>
<td width='305'><input name='name' type='text' id='name' size='30' value=".h($_POST['name'])."></td>
</tr>
".messageAlert('name')."
<tr>
<td>E-mail</td>
<td>:</td>
<td><input name='email' type='text' id='email' size='30' value=".h($_POST['email'])."></td>
".messageAlert('email')."
</tr>
<tr>
<td>Country</td>
<td>:</td>
<td><input name='country' type='text' id='country' size='30' value=". h($_POST['country'])."></td>
".messageAlert('country')."
</tr>
<tr>
<td><a href='./verification_part_rolling_adv/login.php'><strong>login</strong></a></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type='submit' name='verify' id='verify' value='Submit'> &nbsp;
<input type='reset' name='Reset' value='Reset'></td>
</tr>
</table>
</form></td>
</tr>
</table>
</div>";
}
else
{

$verify_content="
<div style='text-align:center;'>
<br/>
<br/>
<p style='text-align:center; font-size:20px; color:red;'>Your Confirmation link Has Been Sent To Your Email Address with your password.
<br/>click on the link to proceed for further registration
<br/><br/>Thankyou.
</p>
<input type='button' value='close' onclick=dohi()>
</div>";

}


if($signal==0)
{
$login_content="<div class='loginbox'>
<h2><p style='padding-left:220pt;'>ROLLING ADVERTISEMENT FOR FACULTY</P></h2>
<h2><p style='padding-left:245pt;'><i>(Version for demonstrating PoC)</i></P></h2>
<table width='350' border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td><form name='form1' method='POST' action='login.php'>
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
<td>password</td>
<td>:</td>
<td><input name='password_log' type='password' id='password_log' size='30' value=".h($_POST['password_log'])."></td>
".messageAlert('password_log')."
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type='submit' name='login' id='login' value='login'> &nbsp;
<input type='reset' name='Reset' value='Reset'></td>
</tr>
<tr>
<td><a href='../verification_part_rolling_adv/newpassword.php'><strong>FORGOT PASSWORD?</strong></a></td>
<td>..</td>
<td><a href='../verification_part_rolling_adv/changepassword.php'><strong>CHANGE PASSWORD?</strong></a></td>
</tr>
</table>
</form></td>
</tr>
</table>";

}
else
{
$login_content="<div>
<div style='text-align:center; font-size:20px;'>
<ul style='text-align:center; font-size:20px;'>
<li><a href='../form_filling_part_rolling_adv/formbase.php?stv=$email_log&&type=Faculty Of Science&&id=$uniqueid&&nme=$name&&cntr=$country'>Faculty Of Science</a><br/></li>
<li><a href='../form_filling_part_rolling_adv/formbase.php?stv=$email_log&&type=Arts Faculty&&id=$uniqueid&&nme=$name&&cntr=$country'>Faculty Of Arts</a><br/></li>
<li><a href='../form_filling_part_rolling_adv/formbase.php?stv=$email_log&&type=Faculty Of Commerce&&id=$uniqueid&&nme=$name&&cntr=$country'>Faculty Of Commerce</a><br/></li>
<li><a href='../form_filling_part_rolling_adv/formbase.php?stv=$email_log&&type=Faculty Of Dental Science&&id=$uniqueid&&nme=$name&&cntr=$country'>Faculty Of Dental Science</a><br/></li>
<li><a href='../form_filling_part_rolling_adv/formbase.php?stv=$email_log&&type=Faculty Of Education&&id=$uniqueid&&nme=$name&&cntr=$country'>Faculty Of Education</a><br/></li>
<li><a href='../form_filling_part_rolling_adv/formbase.php?stv=$email_log&&type=Faculty Of Law&&id=$uniqueid&&nme=$name&&cntr=$country'>Faculty Of Law</a><br/></li>
<li><a href='../form_filling_part_rolling_adv/formbase.php?stv=$email_log&&type=Faculty Of Management&&id=$uniqueid&&nme=$name&&cntr=$country'>Faculty Of Management</a><br/></li>
<li><a href='../form_filling_part_rolling_adv/formbase.php?stv=$email_log&&type=Faculty Of Medicine&&id=$uniqueid&&nme=$name&&cntr=$country'>Faculty Of Medicine</a><br/></li>
<li><a href='../form_filling_part_rolling_adv/formbase.php?stv=$email_log&&type=Faculty Of Performing Arts&&id=$uniqueid&&nme=$name&&cntr=$country'>Faculty Of Performing Arts</a><br/></li>
<li><a href='../form_filling_part_rolling_adv/formbase.php?stv=$email_log&&type=Faculty Of Social Sciences&&id=$uniqueid&&nme=$name&&cntr=$country'>Faculty Of Social Sciences</a><br/></li>
<li><a href='../form_filling_part_rolling_adv/formbase.php?stv=$email_log&&type=Faculty Of Visual Arts&&id=$uniqueid&&nme=$name&&cntr=$country'>Faculty Of Visual Arts</a><br/></li>
</ul>
</div>
<div style='text-align:center'>
<br/><br/>click on the link to proceed for further registration
<br/><br/>Thankyou.
</div>
</div>";

}








?>