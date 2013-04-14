<?php

						if(!empty($_POST['sex']))
						   {
							if($_POST['sex']=='male')
							
								{	$signal1='checked'; $signal2='';		}
							  else{$signal1=''; $signal2='checked';}
							}
						if(!empty($_POST['marital_status']))
						   {
							if($_POST['marital_status']=='yes')
							
								{	$msignal1='checked'; $msignal2='';		}
							  else{$msignal1=''; $msignal2='checked';}
							}
						if(!empty($_POST['category']))
						   {
							if($_POST['category']=='General')
							
								{	$csignal1='checked'; $csignal2='';$csignal3='';$csignal4='';		}
							  else if($_POST['category']=='OBC')
							  {$csignal1=''; $csignal2='checked';$csignal3='';$csignal4='';}
							else if($_POST['category']=='SC')
							  {$csignal1=''; $csignal2='';$csignal3='checked';$csignal4='';}
							else if($_POST['category']=='ST')
							  {$csignal1=''; $csignal2='';$csignal3='';$csignal4='checked';}
				
							
							}
							if(!empty($_POST['physicaly_challenged']))
						   {
							if($_POST['physicaly_challenged']=='yes')
							
								{	$psignal1='checked'; $psignal2='';		}
							  else{$psignal1=''; $psignal2='checked';}
							}							

 $form_content="
	<div class='general_information'>
		<br/>
		<br/>
		<label id='main_title'>APPLICATION FORM FOR Faculty of Dental Science</label><br/><br/><br/>
		<div class='main_title_info'>
			<div id='image'></div>
				<p style='padding-left:400px;'><input type='file' id='image_file' name='image_file' value=".h($_POST['image_file'])."/></p>
				<p id='alerts'> ". messageAlert('image_file')."</p>
				<p class='arrange_field' >1. Position applied for:<input type='text' name='position_applied' class='arrange_text' 					id='position_applied' value=".$positionApplied."></p>
				<p class='arrange_field'>2. Name of Department:<label class='arrange_text'>".$departmentName."</label></p>
				<p class='arrange_field'>3. Name of the candidate:<label class='arrange_text'> ".$name."</label></p>
				<p class='arrange_field'>4. Father's name:<input type='text' class='arrange_text' name='fathers_name' id='fathers_name' 					value=".h($_POST['fathers_name'])."></p>
				<p id='alerts'> ". messageAlert('fathers_name')."</p>
				<p class='arrange_field'>5. Mother's Name:<input type='text' class='arrange_text' name='mothers_name' id='mothers_name' 					value=".h($_POST['mothers_name'])."></p>
				<p id='alerts'> ". messageAlert('mothers_name')."</p>
				<p>6. Address:<br/></p>
				<p class='arrange_field'>a. Correspondence:<textarea name='correspondence' class='arrange_text' id='correspondence' 					rows='5' cols='40' /> ". h($_POST['correspondence'])." </textarea></p><br/><br/><br/><br/>
				<p class='arrange_field'>b. Permanent:<textarea name='permanent' id='permanent' class='arrange_text' rows='5' cols='40' 					> ". h($_POST['permanent'])."</textarea></p><br/><br/><br/><br/>
				<p id='alerts'>".messageAlert('permanent')." </p>
				<p class='arrange_field'>c. Mobile Number:(xxx-xxx-xxxx)<input type='text' name='mobile_number' class='arrange_text' 					id='mobile_number'value=".h($_POST['mobile_number'])."></p>
				<p id='alerts'> ". messageAlert('mobile_number')." </p>
				<p class='arrange_field'>fax:<input type='text' name='fax_number' id='fax_number' class='arrange_text' value= 					 ".h($_POST['fax_number'])."></p>
				<p class='arrange_field'>e-mail:<label class='arrange_text'>".$email."</label></p>
				<p class='arrange_field'>7. Date of Birth:(year/month/date)<select name='year' class='arrange_text' id='year'>
				<option value=".h($_POST['year'])."></option>
				<option value='1957'>1957</option>
				<option value='1958'>1958</option>
				<option value='1959'>1959</option>
				<option value='1960'>1960</option>
				<option value='1961'>1961</option>
				<option value='1962'>1962</option>
				<option value='1963'>1963</option>
				<option value='1964'>1964</option>
				<option value='1965'>1965</option>
				<option value='1966'>1966</option>
				<option value='1967'>1967</option>
				<option value='1968'>1968</option>
				<option value='1969'>1969</option>
				<option value='1970'>1970</option>
				<option value='1970'>1970</option>
				<option value='1971'>1971</option>
				<option value='1972'>1972</option>
				<option value='1973'>1973</option>
				<option value='1974'>1974</option>
				<option value='1975'>1975</option>
				<option value='1976'>1976</option>
				<option value='1977'>1977</option>
				<option value='1978'>1978</option>
				<option value='1979'>1979</option>
				<option value='1980'>1980</option>
				<option value='1981'>1981</option>
				<option value='1982'>1982</option>
				<option value='1983'>1983</option>
				<option value='1984'>1984</option>
				<option value='1985'>1985</option>
				<option value='1986'>1986</option>
				<option value='1987'>1987</option>
				<option value='1988'>1988</option></select>
				<select name='month' id='month' class='arrange_text'>
				<option value=".h($_POST['month'])."></option>
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				<option value='6'>6</option>
				<option value='7'>7</option>
				<option value='8'>8</option>
				<option value='9'>9</option>
				<option value='10'>10</option>
				<option value='11'>11</option>
				<option value='12'>12</option></select>
				<select name='day' id='day' class='arrange_text'>
				<option value=". h($_POST['day'])." ></option>
				<option value='1'>1</option>
				<option value='2'>2</option>
				<option value='3'>3</option>
				<option value='4'>4</option>
				<option value='5'>5</option>
				<option value='6'>6</option>
				<option value='7'>7</option>
				<option value='8'>8</option>
				<option value='9'>9</option>
				<option value='10'>10</option>
				<option value='11'>11</option>
				<option value='12'>12</option>
				<option value='13'>13</option>
				<option value='14'>14</option>
				<option value='15'>15</option>
				<option value='16'>16</option>
				<option value='17'>17</option>
				<option value='18'>18</option>
				<option value='19'>19</option>
				<option value='20'>20</option>
				<option value='21'>21</option>
				<option value='22'>22</option>
				<option value='23'>23</option>
				<option value='24'>24</option>
				<option value='25'>25</option>
				<option value='26'>26</option>
				<option value='27'>27</option>
				<option value='28'>28</option>
				<option value='29'>29</option>
				<option value='30'>30</option>
				<option value='31'>31</option></select></p>

				
						
				<p class='arrange_field'>8. Sex:
                                      
										
									  
                                 <input type='radio' name='sex' value='male' id='sex' class='arrange_text' ".$signal1."/><label class='arrange_text' >M</label>
								<input type='radio' name='sex' value='female' id='sex' class='arrange_text' ".$signal2."/><label class='arrange_text'>F</label></p>





				<p class='arrange_field'>9. Marital Status:
					
				<input type='radio' name='marital_status' id='marital_status' value='yes' class='arrange_text' ".$msignal1." /><label class='arrange_text'>Y</label>
				<input type='radio' name='marital_status' id='marital_status' value='no' class='arrange_text' ".$msignal2."/><label class='arrange_text'>N</label></p>
				<p class='arrange_field'>10. spouse Name:<input type='text' class='arrange_text' name='spousename' id='spousename' 					value=".h($_POST['spousename'])."></p>				
				<p class='arrange_field'>11. Nationality:<label class='arrange_text'> ". $country."</label></p>
				
				
				
				<p class='arrange_field'>12. Category:
				
					
				<input type='radio' name='category' class='arrange_text' value='General' id='category' ".$csignal1."/><label class='arrange_text'>General</label>
				<input type='radio' name='category' id='category' value='OBC' class='arrange_text' ".$csignal2."/><label class='arrange_text'>OBC</label>
				<input type='radio' name='category' id='category' value='SC' class='arrange_text' ".$csignal3."/><label class='arrange_text'>SC</label>
				<input type='radio' name='category' id='category' value='ST' class='arrange_text' ".$csignal4."/><label class='arrange_text'>ST</label>
				</p>

				<p class='arrange_field'>13. If Physically challenged:
				
				<input type='radio' name='physicaly_challenged' class='arrange_text' id='physicaly_challenged' value='yes' ".$psignal1."/><label class='arrange_text'>Y</label>
				<input type='radio' name='physicaly_challenged' id='physicaly_challenged' class='arrange_text' value='no' ".$psignal2."/><label class='arrange_text'>N</label></p><br/>
				<br/>
				
				
				
				
				
				<label id='main_title'>14.ACADEMIC QUALIFICATIONS:</label><br/><br/><br/>
				<p> 
				 </p>
				<table border='1px'>
				<tr>
				<th columnspan='1'>Name of the Class/degree</th>
				<th columnspan='1'>School/Institution</th>
				<th columnspan='1'>Board/University</th>
				<th columnspan='1'>Year of admission</th>
				<th columnspan='1'>Year of passing</th>
				<th columnspan='1'>Percentage</th>
				<th columnspan='1'>Extra Attempts</th>
				<th columnspan='1'>Distinction, if any</th>
				</tr>
				<tr><td>High School(10th)</td>
				<td><input type='text' name='high_school' size='10px' value=".  h($_POST['high_school']) ."></td>
				<td><input type='text' name='high_board' size='10px' value=".  h($_POST['high_board']) ."></td>
				<td><input type='text' name='high_year_admission' size='10px' value=".  h($_POST['high_year_admission']) ."></td>
				<td><input type='text' name='high_year_passing' size='10px' value=".  h($_POST['high_year_passing']) ."></td>
				<td><input type='text' name='high_percentage' size='10px' value=".  h($_POST['high_percentage']) ."></td>
				<td><input type='text' name='high_extra_attempts' size='10px' value=". h($_POST['high_extra_attempts']) ."></td>
				<td><input type='text' name='high_distinction' size='10px' value=".  h($_POST['high_distinction']) ."></td>
				<td rowspan='10'></td></tr>
				<tr><td>Intermediate(12th)</td>
				<td><input type='text' name='inter_school' size='10px' value=".  h($_POST['inter_school']) ."></td>
				<td><input type='text' name='inter_board' size='10px' value=".  h($_POST['inter_board']) ."></td>
				<td><input type='text' name='inter_year_admission' size='10px' value=".  h($_POST['inter_year_admission']) ."></td>
				<td><input type='text' name='inter_year_passing' size='10px' value=".  h($_POST['inter_year_passing']) ."></td>
				<td><input type='text' name='inter_percentage' size='10px' value=".  h($_POST['inter_percentage']) ."></td>
				<td><input type='text' name='inter_extra_attempts' size='10px' value=". h($_POST['inter_extra_attempts']) ."></td>
				<td><input type='text' name='inter_distinction' size='10px' value=".  h($_POST['inter_distinction']) ."></td>
				<tr><td>B.Sc.(for non medical graduates)*</td>
				<td><input type='text' name='bsc_school' size='10px' value=".  h($_POST['bsc_school']) ."></td>
				<td><input type='text' name='bsc_board' size='10px' value=".  h($_POST['bsc_board']) ."></td>
				<td><input type='text' name='bsc_year_admission' size='10px' value=".  h($_POST['bsc_year_admission']) ."></td>
				<td><input type='text' name='bsc_year_passing' size='10px' value=".  h($_POST['bsc_year_passing']) ."></td>
				<td><input type='text' name='bsc_percentage' size='10px' value=".  h($_POST['bsc_percentage']) ."></td>
				<td><input type='text' name='bsc_extra_attempts' size='10px' value=". h($_POST['bsc_extra_attempts']) ."></td>
				<td><input type='text' name='bsc_distinction' size='10px' value=".  h($_POST['bsc_distinction']) ."></td>
				<tr><td>BDS/MBBS 1st Prof*</td>
				<td><input type='text' name='bds1_school' size='10px' value=".  h($_POST['bds1_school']) ."></td>
				<td><input type='text' name='bds1_board' size='10px' value=".  h($_POST['bds1_board']) ."></td>
				<td><input type='text' name='bds1_year_admission' size='10px' value=".  h($_POST['bds1_year_admission']) ."></td>
				<td><input type='text' name='bds1_year_passing' size='10px' value=".  h($_POST['bds1_year_passing']) ."></td>
				<td><input type='text' name='bds1_percentage' size='10px' value=".  h($_POST['bds1_percentage']) ."></td>
				<td><input type='text' name='bds1_extra_attempts' size='10px' value=". h($_POST['bds1_extra_attempts']) ."></td>
				<td><input type='text' name='bds1_distinction' size='10px' value=".  h($_POST['bds1_distinction']) ."></td>
				<tr><td>BDS/MBBS 2nd Prof*</td>
				<td><input type='text' name='bds2_school' size='10px' value=".  h($_POST['bds2_school']) ."></td>
				<td><input type='text' name='bds2_board' size='10px' value=".  h($_POST['bds2_board']) ."></td>
				<td><input type='text' name='bds2_year_admission' size='10px' value=".  h($_POST['bds2_year_admission']) ."></td>
				<td><input type='text' name='bds2_year_passing' size='10px' value=".  h($_POST['bds2_year_passing']) ."></td>
				<td><input type='text' name='bds2_percentage' size='10px' value=".  h($_POST['bds2_percentage']) ."></td>
				<td><input type='text' name='bds2_extra_attempts' size='10px' value=". h($_POST['bds2_extra_attempts']) ."></td>
				<td><input type='text' name='bds2_distinction' size='10px' value=".  h($_POST['bds2_distinction']) ."></td>
				<tr><td>BDS/MBBS 3rd Prof*</td>
				<td><input type='text' name='bds3_school' size='10px' value=".  h($_POST['bds3_school']) ."></td>
				<td><input type='text' name='bds3_board' size='10px' value=".  h($_POST['bds3_board']) ."></td>
				<td><input type='text' name='bds3_year_admission' size='10px' value=".  h($_POST['bds3_year_admission']) ."></td>
				<td><input type='text' name='bds3_year_passing' size='10px' value=".  h($_POST['bds3_year_passing']) ."></td>
				<td><input type='text' name='bds3_percentage' size='10px' value=".  h($_POST['bds3_percentage']) ."></td>
				<td><input type='text' name='bds3_extra_attempts' size='10px' value=". h($_POST['bds3_extra_attempts']) ."></td>
				<td><input type='text' name='bds3_distinction' size='10px' value=".  h($_POST['bds3_distinction']) ."></td>
				<tr><td>BDS/MBBS Final Prof*</td>
				<td><input type='text' name='bdsfinal_school' size='10px' value=".  h($_POST['bdsfinal_school']) ."></td>
				<td><input type='text' name='bdsfinal_board' size='10px' value=".  h($_POST['bdsfinal_board']) ."></td>
				<td><input type='text' name='bdsfinal_year_admission' size='10px' value=".  h($_POST['bdsfinal_year_admission']) ."></td>
				<td><input type='text' name='bdsfinal_year_passing' size='10px' value=".  h($_POST['bdsfinal_year_passing']) ."></td>
				<td><input type='text' name='bdsfinal_percentage' size='10px' value=".  h($_POST['bdsfinal_percentage']) ."></td>
				<td><input type='text' name='bdsfinal_extra_attempts' size='10px' value=". h($_POST['bdsfinal_extra_attempts']) ."></td>
				<td><input type='text' name='bdsfinal_distinction' size='10px' value=".  h($_POST['bdsfinal_distinction']) ."></td>
				<tr><td>Aggregate of BDS/MBBS </td>
				<td colspan='4'>Marks obtained in all professionals/ Total marks of all professionals:<input type='text' name='aggregate_total_marks' size='35px' value=".  h($_POST['aggregate_total_marks']) ."><br/>
				
				<td><input type='text' name='aggregate_percentage'  value=".  h($_POST['aggregate_percentage']) ."></td>
				
				<td colspan='1'>Total:<input type='text' name='aggregate_total_extra_attempts' value=".  h($_POST['aggregate_total_extra_attempts']) ."><br/>
				
				
				<td colspan='1'>Total No of Distinctions:<input type='text' name='aggregate_total_distinctions' value=".  h($_POST['aggregate_total_distinctions']) ."><br/>
				
				<tr><td>Internship</td>
				<td><input type='text' name='intern_school' size='10px' value=".  h($_POST['intern_school']) ."></td>
				<td><input type='text' name='intern_board' size='10px' value=".  h($_POST['intern_board']) ."></td>
				<td><input type='text' name='intern_year_admission' size='10px' value=".  h($_POST['intern_year_admission']) ."></td>
				<td><input type='text' name='intern_year_passing' size='10px' value=".  h($_POST['intern_year_passing']) ."></td>
				<td><input type='text' name='intern_percentage' size='10px' value=".  h($_POST['intern_percentage']) ."></td>
				<td><input type='text' name='intern_extra_attempts' size='10px' value=". h($_POST['intern_extra_attempts']) ."></td>
				<td><input type='text' name='intern_distinction' size='10px' value=".  h($_POST['intern_distinction']) ."></td>
				<tr><td>MDS/MD/MS/DNB/M.Sc. </td>
				<td><input type='text' name='mds_school' size='10px' value=".  h($_POST['mds_school']) ."></td>
				<td><input type='text' name='mds_board' size='10px' value=".  h($_POST['mds_board']) ."></td>
				<td><input type='text' name='mds_year_admission' size='10px' value=".  h($_POST['mds_year_admission']) ."></td>
				<td><input type='text' name='mds_year_passing' size='10px' value=".  h($_POST['mds_year_passing']) ."></td>
				<td><input type='text' name='mds_percentage' size='10px' value=".  h($_POST['mds_percentage']) ."></td>
				<td><input type='text' name='mds_extra_attempts' size='10px' value=". h($_POST['mds_extra_attempts']) ."></td>
				<td><input type='text' name='mds_distinction' size='10px' value=".  h($_POST['mds_distinction']) ."></td>
				
				<tr rowspan='3'><td>Ph. D.</td>
				<td><input type='text' name='phd_school' size='10px' value=".  h($_POST['phd_school']) ."></td>
				<td><input type='text' name='phd_board' size='10px' value=".  h($_POST['phd_board']) ."></td>
				<td><input type='text' name='phd_year_admission' size='10px' value=".  h($_POST['phd_year_admission']) ."></td>
				<td><input type='text' name='phd_year_passing' size='10px' value=".  h($_POST['phd_year_passing']) ."></td>
				<td><input type='text' name='phd_percentage' size='10px' value=".  h($_POST['phd_percentage']) ."></td>
				<td><input type='text' name='phd_extra_attempts' size='10px' value=". h($_POST['phd_extra_attempts']) ."></td>
				<td><input type='text' name='phd_distinction' size='10px' value=".  h($_POST['phd_distinction']) ."></td>
				</td></tr>
				<tr><td>Any other degree</td>
				<td><input type='text' name='any_other_school' size='10px' value=".  h($_POST['any_other_school']) ."></td>
				<td><input type='text' name='any_other_board' size='10px' value=".  h($_POST['any_other_board']) ."></td>
				<td><input type='text' name='any_other_year_admission' size='10px' value=".  h($_POST['any_other_year_admission']) ."></td>
				<td><input type='text' name='any_other_year_passing' size='10px' value=".  h($_POST['any_other_year_passing']) ."></td>
				<td><input type='text' name='any_other_percentage' size='10px' value=".  h($_POST['any_other_percentage']) ."></td>
				<td><input type='text' name='any_other_extra_attempts' size='10px' value=". h($_POST['any_other_extra_attempts']) ."></td>
				<td><input type='text' name='any_other_distinction' size='10px' value=".  h($_POST['any_other_distinction']) ."></td>
				</tr></table>
				
				
				
				
				<p>The title/s of dissertation/s at PG examinations may be nored below:</p>
				<p><h3>15.Present Designation, Place and nature of work:</h3>
				<textarea name='present_designation' id='present_designation' rows='5' cols='80' />".  h($_POST['present_designation']) ."</textarea>
				</p>
				
				
				
				<p><h3>16.Registration Details: only for medical graduates:</h3>
						<table border='1px' id='professional_experience'>
				<tr>
				<th>Dental Council/Medical Council   </th>
				<th>Registration No.</th>
				<th>Dated</th>
				</tr>
				<tr>
				<td><input type='text' name='registration_details_council' value=". h($_POST['registration_details_council']) ."></td>
				<td><input type='text' name='registration_details_registration_no' value=".  h($_POST['registration_details_registration_no']) ."></td>
				<td><input type='text' name='registration_details_dated' value=".  h($_POST['registration_details_dated']) ."></td>
				</tr>
				</table><br/><br/>
				
				<!--code for professional experience-->
				<label id='main_title'>17.Professional Experience:</label><br/><br/><br/>
				<p><h3>a.Post BDS/MBBS experience</h3></p>
				
				<table border='1px' id='professional_experience_bdsmbbs'>
				<tr>
				<th>Position </th>
				<th>Department</th>
				<th>Institution </th>
				<th>From</th>
				<th>To</th>
				<th>Nature of Work</th>
				<th>Salary</th>
				</tr>
				<tr>
				<td><input type='text' name='professional_experience_bdsmbbs_position' size='6px' value=". h($_POST['professional_experience_bdsmbbs_position']) ."></td>
				<td><input type='text' name='professional_experience_bdsmbbs_department' size='6px' value=".  h($_POST['professional_experience_bdsmbbs_department']) ."></td>
				<td><input type='text' name='professional_experience_bdsmbbs_institution' size='6px' value=".  h($_POST['professional_experience_bdsmbbs_institution']) ."></td>
				<td><input type='text' name='professional_experience_bdsmbbs_from' size='6px' value=".  h($_POST['professional_experience_bdsmbbs_from']) ."></td>
				<td><input type='text' name='professional_experience_bdsmbbs_to' size='6px' value=".  h($_POST['professional_experience_bdsmbbs_to']) ."></td>
				<td><input type='text' name='professional_experience_bdsmbbs_nature_work' size='6px' value=".  h($_POST['professional_experience_bdsmbbs_nature_work']) ."></td>
				<td><input type='text' name='professional_experience_bdsmbbs_salary' size='6px' value=".h($_POST['professional_experience_bdsmbbs_salary']) ."></td>
				</tr>
				</table>
				<P><input type='button' value='more' onclick=addRow('professional_experience_bdsmbbs')></P>

				<p><h3>b.Post MDS/MD/MS/DNB experience: </h3></p>
				
				<table border='1px' id='professional_experience_mdsmdmsdnb'>
				<tr>
				<th>Position </th>
				<th>Department</th>
				<th>Institution </th>
				<th>From</th>
				<th>To</th>
				<th>Nature of Work</th>
				<th>Salary</th>
				</tr>
				<tr>
				<td><input type='text' name='professional_experience_mdsmdmsdnb_position' size='6px' value=". h($_POST['professional_experience_mdsmdmsdnb_position']) ."></td>
				<td><input type='text' name='professional_experience_mdsmdmsdnb_department' size='6px' value=".  h($_POST['professional_experience_mdsmdmsdnb_department']) ."></td>
				<td><input type='text' name='professional_experience_mdsmdmsdnb_institution' size='6px' value=".  h($_POST['professional_experience_mdsmdmsdnb_institution']) ."></td>
				<td><input type='text' name='professional_experience_mdsmdmsdnb_from' size='6px' value=".  h($_POST['professional_experience_mdsmdmsdnb_from']) ."></td>
				<td><input type='text' name='professional_experience_mdsmdmsdnb_to' size='6px' value=".  h($_POST['professional_experience_mdsmdmsdnb_to']) ."></td>
				<td><input type='text' name='professional_experience_mdsmdmsdnb_nature_work' size='6px' value=".  h($_POST['professional_experience_mdsmdmsdnb_nature_work']) ."></td>
				<td><input type='text' name='professional_experience_mdsmdmsdnb_salary' size='6px' value=".h($_POST['professional_experience_mdsmdmsdnb_salary']) ."></td>
				</tr>
				</table>
				<P><input type='button' value='more' onclick=addRow('professional_experience_mdsmdmsdnb')></P>
				
				<p><h3>c.Post Ph.D. experience: </h3></p>
				
				<table border='1px' id='professional_experience_phd'>
				<tr>
				<th>Position </th>
				<th>Department</th>
				<th>Institution </th>
				<th>From</th>
				<th>To</th>
				<th>Nature of Work</th>
				<th>Salary</th>
				</tr>
				<tr>
				<td><input type='text' name='professional_experience_phd_position' size='6px' value=". h($_POST['professional_experience_phd_position']) ."></td>
				<td><input type='text' name='professional_experience_phd_department' size='6px' value=".  h($_POST['professional_experience_phd_department']) ."></td>
				<td><input type='text' name='professional_experience_phd_institution' size='6px' value=".  h($_POST['professional_experience_phd_institution']) ."></td>
				<td><input type='text' name='professional_experience_phd_from' size='6px' value=".  h($_POST['professional_experience_phd_from']) ."></td>
				<td><input type='text' name='professional_experience_phd_to' size='6px' value=".  h($_POST['professional_experience_phd_to']) ."></td>
				<td><input type='text' name='professional_experience_phd_nature_work' size='6px' value=".  h($_POST['professional_experience_phd_nature_work']) ."></td>
				<td><input type='text' name='professional_experience_phd_salary' size='6px' value=".h($_POST['professional_experience_phd_salary']) ."></td>
				</tr>
				</table>
				<P><input type='button' value='more' onclick=addRow('professional_experience_phd')></P>
				
				
				
				
				
				<!--details of awards-->

				<p><h3>Details of Professional Recognitions, Awards, Fellowships, Honours received in last 12 years</h3></p>
				<table border='1px' id='professional_award'>
				<tr rowspan='2'>
				<th>Type of Award<br/>(International/National/State)</th>
				<th>Name of Award</th>
				<th>Awarding Institution or Body</th>
				<th>Award Date</th></tr>
				<tr>
				<td><input type='text' name='award_type' value=". h($_POST['award_type']) ."></td>
				<td><input type='text' name='award_name' value=".  h($_POST['award_name']) ."></td>
				<td><input type='text' name='award_institution' value=".  h($_POST['award_institution']) ."></td>
				<td><input type='text' name='award_date' value=". h($_POST['award_date']) ."></td></tr>
				</table>
          			<P><input type='button' value='more' onclick=addRow('professional_award')></P>
				
				
				
				
				
				<p><h3>19.Teaching Experience in years in concerned subject (details to be given only for DCI/MCI recognized teaching institutions)</h3></p>
				<p><h3> a. As Junior Resident/ Post BDS Tutor /Post MBBS Tutor/ Demonstrator:</h3>
				<textarea name='junior_resident' id='junior_resident' rows='5' cols='80' />".  h($_POST['junior_resident']) ."</textarea>
				</p>
				<p><h3> b. As Senior Resident/ Post PG demonstrator/ Tutor/ SSR:</h3>
				<textarea name='senior_resident' id='senior_resident' rows='5' cols='80' />".  h($_POST['senior_resident']) ."</textarea>
				</p>
				<p><h3> c. As Faculty in teaching institutions:</h3>
				<textarea name='faculty_teaching' id='faculty_teaching' rows='5' cols='80' />".  h($_POST['faculty_teaching']) ."</textarea>
				</p>
				
				
				<p><h3>20.Details of Work done so far (patient care experience/ Lab work/ professional work) and significance of the professional contribution[Maximum 1000 words]. You may bring summary of your log book/thesis if any, relevant to the subject at time of interaction with FAC-1)</h3>
				<textarea name='pro_details_work_done' id='pro_details_work_done' rows='5' cols='80' />".  h($_POST['pro_details_work_done']) ."</textarea>
				</p>
				<!--RESEARCH PART-->



				<label id='main_title'>21. Research Publications</label><br/><br/><br/>



				<!--NO OF PAPERS PUBLISHED-->




				<p><h3>a. Total No of Papers published/accepted in Indexed peer reviewed journals :</h3></p>
				<table border='1px' id='professional_research'>
				<tr rowspan='2'>
				<th>Category</th>
				<th>Total No</th>
				</tr>
				<tr>
				<td>Original articles/Review articles</td>
				<td><input type='text' name='research_original_articles' value=". h($_POST['research_original_articles']) ."></td>
				</tr>
				<tr>
				<td>Commentary / Letter to editor etc
				</td>
				<td><input type='text' name='research_commentary' value=". h($_POST['research_commentary']) ."></td>
				</tr>
				<tr>
				<td>Authored Books</td>
				<td><input type='text' name='research_authored' value=".  h($_POST['research_authored']) ."></td>
				</tr>
				<tr>
				<td>Books / chapters</td>
				<td><input type='text' name='research_books' value=". h($_POST['research_books']) ."></td>
				</tr>
				<tr>
				<td>Edited Books</td>
				<td><input type='text' name='research_edited' value=".  h($_POST['research_edited']) ."></td>
				</tr>
				</table>


<p>Attach pdf files of your 5 best research Publications</p>

				<!--details of peer-reviewed research-->



				<p><h3>b. List your peer-reviewed research (original and reviews) publications from latest to oldest in last 12 years  (Do not include Abstracts/Conference proceedings or other non-peer-reviewed publications)</h3></p>
				<table border='1px' id='professional_peer'>
				<tr rowspan='2'>
				<th>Author/s</th>
				<th>Year</th>
				<th>Journal name</th>
				<th>Vol. no.</th>
				<th>pages</th>
				<th>Impact factor (if any) or<br/> ISSN/ISBN no.</th>
				</tr>
				<tr>
				<td><input type='text' name='peer_author'  10px value=".  h($_POST['peer_author']) ."></td>
				<td><input type='text' name='peer_year'     value=".  h($_POST['peer_year']) ."></td>
				<td><input type='text' name='peer_journal'     value=".  h($_POST['peer_journal']) ."></td>
				<td><input type='text' name='peer_vol'     value=".  h($_POST['peer_vol']) ."></td>
				<td><input type='text' name='peer_pages'     value=".  h($_POST['peer_pages']) ."></td>
				<td><input type='text' name='peer_issn'     value=".  h($_POST['peer_issn']) ."></td>
				</tr>
				</table>
				<P><input type='button' value='more' onclick=addRow('professional_peer')></P>




				<!--details of Books Authored or Edited-->

				<p><h3>c. Books Authored or Edited and Chapters contributed to Books in last 12 years</h3></p>
				<table border='1px' id='professional_authored'>
				<tr rowspan='2'>
				<th>Author/s</th>
				<th>Title of Book/Chapter</th>
				<th>Editor/s</th>
				<th>Publisher</th>
				<th>pages</th>
				<th>ISSN/ISBN no.</th>
				</tr>
				<tr>
				<td><input type='text' name='authored_author'     value=".  h($_POST['authored_author']) ."></td>
				<td><input type='text' name='authored_title'     value=".  h($_POST['authored_title']) ."></td>
				<td><input type='text' name='authored_editor'     value=".  h($_POST['authored_editor']) ."></td>
				<td><input type='text' name='authored_publisher'     value=".  h($_POST['authored_publisher']) ."></td>
				<td><input type='text' name='authored_pages'     value=". h($_POST['authored_pages']) ."></td>
				<td><input type='text' name='authored_issn'     value=".  h($_POST['authored_issn']) ."></td>
				</tr>
				</table>
				<P><input type='button' value='more' onclick=addRow('professional_authored')></P>



					
				<!--19. Other Professional Activities-->




				<label id='main_title'>22. Other Professional Activities:</label><br/><br/><br/>


				<p><h3>a. List of International and National Conferences attended in last 12 years</h3></p>
				<table border='1px' id='professional_conference'>
				<tr rowspan='2'>
				<th>Name of the event</th>
				<th>Category <br/>(International/National/State )</th>
				<th>Date</th>
				<th>Venue</th>
				<th>pages</th>
				<th>Type of presentation<br/>(Poster/oral etc ) </th>
				</tr>
				<tr>
				<td><input type='text' name='conference_name'     value=". h($_POST['conference_name']) ."></td>
				<td><input type='text' name='conference_category'     value=".  h($_POST['conference_category'])."></td>
				<td><input type='text' name='conference_date'     value=".  h($_POST['conference_date']) ."></td>
				<td><input type='text' name='conference_venue'     value=".  h($_POST['conference_venue']) ."></td>
				<td><input type='text' name='conference_pages'     value=". h($_POST['conference_pages']) ."></td>
				<td><input type='text' name='conference_presentation'     value=". h($_POST['conference_presentation']) ."></td>
				</tr>
				</table>				
				<P><input type='button' value='more' onclick=addRow('professional_conference')></P>




				<!--details of Conferences/Workshops/Training programme-->



				<p><h3>b. List of Conferences/Workshops/Training programme organized in last 12 years</h3></p>
				<table border='1px' id='professional_programme'>
				<tr rowspan='2'>
				<th>Name of the event</th>
				<th>Category <br/>(International/National/State )</th>
				<th>Date</th>
				<th>Venue</th>
				<th>pages</th>
				<th>Role as Organizer </th>
				</tr>
				<tr>
				<td><input type='text' name='programme_name_event'     value=". h($_POST['programme_name_event']) ."></td>
				<td><input type='text' name='programme_category'     value=".  h($_POST['programme_category']) ."></td>
				<td><input type='text' name='programme_date'     value=". h($_POST['programme_date']) ."></td>
				<td><input type='text' name='programme_venue'     value=".  h($_POST['programme_venue']) ."></td>
				<td><input type='text' name='programme_pages'     value=".  h($_POST['programme_pages']) ."></td>
				<td><input type='text' name='programme_role'     value=".  h($_POST['programme_role']) ."></td>
				</tr>
				</table>
				
				<P><input type='button' value='more' onclick=addRow('professional_programme')></P>




				<!--details of Research projects undertaken-->




				<p><h3>c. Research projects undertaken in last 12 years</h3></p>
				<table border='1px' id='professional_projects'>
				<tr rowspan='2'>
				<th>Title</th>
				<th>Total amount</th>
				<th>Funding agency</th>
				<th>Duration</th>
				<th>Current Status  (Ongoing/Completed )</th>
				</tr>
				<tr>
				<td><input type='text' name='projects_title'     value=".  h($_POST['projects_title']) ."></td>
				<td><input type='text' name='projects_total'     value=". h($_POST['projects_total']) ."></td>
				<td><input type='text' name='projects_funding'     value=".  h($_POST['projects_funding']) ."></td>
				<td><input type='text' name='projects_duration'     value=".  h($_POST['projects_duration']) ."></td>
				<td><input type='text' name='projects_current_status'     value=".  h($_POST['projects_current_status']) ."></td>
				</tr>
				</table>
				<P><input type='button' value='more' onclick=addRow('professional_projects')></P>


   <!--d. Technology Transfer and Patents (granted), if any -->

<p><h3>d. Technology Transfer and Patents (granted), if any</h3>
				<textarea name='patents' id='patents' rows='5' cols='80' />  ".h($_POST['patents']) ."</textarea>
				</p>




				<!--details of Editor or Member of Editorial Board -->

				<p><h3>e. Editor or Member of Editorial Board of Indexed journal/s during the last 12 years</h3></p>
				<table border='1px' id='professional_editor'>
				<tr rowspan='2'>
				<th>Name of Journal</th>
				<th>Publisher</th>
				<th>Editor/Member of Editorial Board</th>
				<th>Duration</th>
				</tr>
				<tr>
				<td><input type='text' name='editor_name'     value=".  h($_POST['editor_name']) ."></td>
				<td><input type='text' name='editor_publisher'     value=".  h($_POST['editor_publisher']) ."></td>
				<td><input type='text' name='editor_member'     value=".  h($_POST['editor_member']) ."></td>
				<td><input type='text' name='editor_duration'     value=".  h($_POST['editor_duration']) ."></td>
				</tr>
				</table>
					<P><input type='button' value='more' onclick=addRow('professional_editor')></P>





				<!--details of M.Phil./Ph.D./M.Ch./DM/MD/MS thesis -->

				<p><h3>f. M.Phil./Ph.D./M.Ch./DM/MD/MS thesis  supervised during the last 12 years</h3></p>
				<table border='1px' id='professional_supervised'>
				<tr rowspan='2'>
				<th>Title of thesis</th>
				<th>Name of the degree</th>
				<th>Year of award</th>
				<th>Supervisor/Co-supervisor</th>
				</tr>
				<tr>
				<td><input type='text' name='supervised_title'     value=".  h($_POST['supervised_title']) ."></td>
				<td><input type='text' name='supervised_name'     value=".  h($_POST['supervised_name']) ."></td>
				<td><input type='text' name='supervised_award'     value=".  h($_POST['supervised_award']) ."></td>
				<td><input type='text' name='supervised_supervisor'     value=".  h($_POST['supervised_supervisor']) ."></td>
				</tr>
				</table>
				<P><input type='button' value='more' onclick=addRow('professional_supervised')></P>





				<p><h3>23. Details of any administrative work carried out during last 12 years:</h3>
				<textarea name='administrarive_work' id='administrarive_work' rows='5' cols='80' /> ". h($_POST['administrarive_work'])."</textarea>
				</p>






				<p><h3>24. Statement about Work done (teaching, research and/or other professional activities related to the discipline) so far and<br/> significance of the professional contribution (Maximum 500 words) :</h3>
				<textarea name='teaching_work' id='teaching_work' rows='5' cols='80' />  ".h($_POST['teaching_work']) ."</textarea>
				</p>




				<p><h3>25. A brief statement on your philosophy about teaching (Maximum 500 words):</h3>
				<textarea name='philosophy_teaching' id='philosophy_teaching' rows='5' cols='80' />".  h($_POST['philosophy_teaching'])." </textarea>
				</p>





				<p><h3>26. Statement about proposed Research/Professional activity and brief outline of proposal. If selected, how you would like to<br/> develop your department and your area of interest (Maximum 500 words) :</h3>
				<textarea name='professional_activity' id='professional_activity' rows='5' cols='80' /> ". h($_POST['professional_activity'])." </textarea>
				</p>





				<p><h3>27. Extracurricular interests:</h3>
				<textarea name='extracurricular_interests' id='extracurricular_interests' rows='5' cols='80' />".  h($_POST['extracurricular_interests']) ."</textarea>
				</p>

				<p><h3>28. If your spouse is also applying add his/her name and subject he/she is applying.</h3>
				<table border='1px'>
				<tr rowspan='2'>
				<td>Spouse Name:</td>
				<td><input type='text' name='spouse_name' value=".  h($_POST['spouse_name']) ."></td>
				</tr>
				<tr>
				<td>Post Applied for:</td>
				<td><input type='text' name='spouse_post' value=". h($_POST['spouse_post']) ."></td>
				</tr>
				<tr>
				<td>Subject:
				</td>
				<td><input type='text' name='spouse_subject' value=".  h($_POST['spouse_subject']) ."></td>
				</tr>
				</table>
				</p>


				<p><h3>29. If you have ever been convicted by any court of law or administrative body in India or abroad? If yes, provide details:</h3>
				<textarea name='convicted_court' id='convicted_court' rows='5' cols='80' />  ". h($_POST['convicted_court']) ."</textarea>
				</p>
				
				
				<p><h3>30.If any member of your existing/past professional team has also applied, please provide details</h3>
				<table border='1px'>
				<tr rowspan='2'>
				<td>Name:</td>
				<td><input type='text' name='existing_team_name' value=".  h($_POST['existing_team_name']) ."></td>
				</tr>
				<tr>
				<td>Post Applied for:</td>
				<td><input type='text' name='existing_team_post' value=". h($_POST['existing_team_post']) ."></td>
				</tr>
				<tr>
				<td>Subject:
				</td>
				<td><input type='text' name='existing_team_subject' value=".  h($_POST['existing_team_subject']) ."></td>
				</tr>
				</table>
				</p>
				


				<p><h3>31.Names and addresses (including e-mail id and telephone number) of three or more Referees who can provide reference on<br/> the basis of personal knowledge of the applicant one of the Referees in the case of those applying for a post of Assistant<br/> Professor must be either the thesis supervisor or who taught the candidate for the qualifying examination</h3></p>
				<table border='1px' id='professional_referees'>
				<tr rowspan='2'>
				<th>Name</th>
				<th>Address</th>
				<th>Professional relationship</th>
				<th>e-mail address</th>
				<th>Telephone no.</th>
				</tr>
				<tr>
				<td><input type='text' name='referees_name'     value=". h($_POST['referees_name']) ."></td>
				<td><input type='text' name='referees_address'     value=".h($_POST['referees_address']) ."></td>
				<td><input type='text' name='referees_relationship'     value=". h($_POST['referees_relationship']) ."></td>
				<td><input type='text' name='referees_email'     value=". h($_POST['referees_email']) ."></td>
				<td><input type='text' name='referees_telephone'     value=". h($_POST['referees_telephone']) ."></td>
				</tr>
				</table>
                                <P><input type='button' value='more' onclick=addRow('professional_referees')></P>

				<br/><br/>




				<p><h3><U>DECLARATION:</U>It is certified that all information given by me above is true to the best of my knowledge. If any information were found false or concealed, I am aware that my application/appointment is liable for cancellation.I have fully read and clearly understood the rules and procedure governing recruitment of faculty at B.H.U ,<br/>to which i agree.</h3></p>





				<p>date:(dd/mm/yy)<input type='text' name='date_submit' value=".  h($_POST['date_submit']) ."></td> <br/>
				Place:<input type='text' name='place_submit' value=".  h($_POST['place_submit'])."></td></p>
				<p align='center'><input type='file' name='signature_file' value=".  h($_POST['signature_file'])."></td><br/>(Signature of the Applicant)</p>
				<p id='alerts'> ". messageAlert('signature_file')."</p>

			</div>
		</div>
	<hr/>
	<div id='next_previous'>
		<input type='submit' name='dental_submit' id='dental_submit' value='submit'/>
	</div>";

?>
 


