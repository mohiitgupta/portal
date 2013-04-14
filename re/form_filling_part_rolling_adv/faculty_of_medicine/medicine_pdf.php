<?php


//echo "entered in the pdf form part";

//call for verification
include("../verification_part_rolling_adv/config.php");

 
//@@@@@@@@@ address for the image and signaturena


mysql_select_db($db_name);

//echo $table_name;
//@@@@  fetching data from the table
$result_fetch=mysql_query("SELECT * FROM $table_name");

if($result_fetch)
{
   
$rows=mysql_fetch_array($result_fetch);
$password=$rows['password'];
$name=$rows['name'];
$country=$rows['country'];

//echo $country;
}


$form_content="
<div class='general_information'>
<br/>
<br/>
<label id='main_title'>APPLICATION FORM(FACULTY REGISTRATION):</label><br/><br/><br/>
<div class='main_title_info'>
<div id='image'></div>
<p class='arrange_field' >1.Position applied for:<label class='arrange_text'>".$rows['applied_position']."</label></p>
<p class='arrange_field'>2.Name of Department:<label class='arrange_text'>".$rows['department_name']."</label></p>
<p class='arrange_field'>3.Name of the candidate:<label class='arrange_text'>".$rows['candidate_name']."</label></p>
<p class='arrange_field'>4.Father's name:<label class='arrange_text'>".$rows['fathers_name']."</label></p>
<p class='arrange_field'>5.Mother's Name:<label class='arrange_text'>".$rows['mothers_name']."</label></p>
<p>6.Address:<br/></p>
<p class='arrange_field'>a.Correspondence:<label class='arrange_text'>".$rows['correspondence_address']."</label></p><br/><br/><br/><br/>
<p class='arrange_field'>b.Permanent:<label class='arrange_text'>".$rows['permanent_address']."</label></p><br/><br/><br/><br/>
<p class='arrange_field'>c.Mobile Number:<label class='arrange_text'>".$rows['mobile_number']."</label></p>
<p class='arrange_field'>fax:<label class='arrange_text'>".$rows['fax_number']."</label></p>
<p class='arrange_field'>e-mail:<label class='arrange_text'>".$rows['_email']."</label></p>
<p class='arrange_field'>7.Date of Birth:(year/month/date)<label class='arrange_text'>".$rows['date_of_birth']."</label>
</p>

<p class='arrange_field'>8.Sex:<label class='arrange_text'>".$rows['_sex']."</label>
</p>

<p class='arrange_field'>9.Marital Status:<label class='arrange_text'>".$rows['marital_status']."</label>
</p>

<p class='arrange_field'>10.Spouse Name:<label class='arrange_text'>".$rows['spouse_name']."</label>
</p>
<p class='arrange_field'>11.Nationality:<label class='arrange_text'>".$rows['_nationality']."</label></p>
<p class='arrange_field'>12.Category:<label class='arrange_text'>".$rows['_category']."</label>
</p>
<p class='arrange_field'>13.If Physically challenged:<label class='arrange_text'>".$rows['physically_challenged']."</label></p><br/>
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
				<td><label class='arrange_text'>".$rows['high_school']."</label></td>
				<td><label class='arrange_text'>".$rows['high_board']."</label></td>
				<td><label class='arrange_text'>".$rows['high_year_admission']."</label></td>
				<td><label class='arrange_text'>".$rows['high_year_passing']."</label></td>
				<td><label class='arrange_text'>".$rows['high_percentage']."</label></td>
				<td><label class='arrange_text'>".$rows['high_extra_attempts']."</label></td>
				<td><label class='arrange_text'>".$rows['high_distinction']."</label></td>
				<td rowspan='10'></td></tr>
				<tr><td>Intermediate(12th)</td>
				<td><label class='arrange_text'>".$rows['inter_school']."</label></td>
				<td><label class='arrange_text'>".$rows['inter_board']."</label></td>
				<td><label class='arrange_text'>".$rows['inter_year_admission']."</label></td>
				<td><label class='arrange_text'>".$rows['inter_year_passing']."</label></td>
				<td><label class='arrange_text'>".$rows['inter_percentage']."</label></td>
				<td><label class='arrange_text'>".$rows['inter_extra_attempts'] ."</label></td>
				<td><label class='arrange_text'>".$rows['inter_distinction']."</label></td>
				<tr><td>B.Sc.(for non medical graduates)*</td>
				<td><label class='arrange_text'>".$rows['bsc_school'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bsc_board'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bsc_year_admission'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bsc_year_passing'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bsc_percentage'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bsc_extra_attempts'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bsc_distinction'] ."</label></td>
				<tr><td>MBBS 1st Prof*</td>
				<td><label class='arrange_text'>".$rows['bds1_school'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bds1_board'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bds1_year_admission'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bds1_year_passing']."</label></td>
				<td><label class='arrange_text'>".$rows['bds1_percentage'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bds1_extra_attempts'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bds1_distinction'] ."</label></td>
				<tr><td>MBBS 2nd Prof*</td>
				<td><label class='arrange_text'>".$rows['bds2_school']."</label></td>
				<td><label class='arrange_text'>".$rows['bds2_board']."</label></td>
				<td><label class='arrange_text'>".$rows['bds2_year_admission'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bds2_year_passing']."</label></td>
				<td><label class='arrange_text'>".$rows['bds2_percentage'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bds2_extra_attempts'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bds2_distinction']."></label></td>
				<tr><td>MBBS 3rd Prof*</td>
				<td><label class='arrange_text'>".$rows['bds3_school'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bds3_board']."</label></td>
				<td><label class='arrange_text'>".$rows['bds3_year_admission']."</label></td>
				<td><label class='arrange_text'>".$rows['bds3_year_passing']."</label></td>
				<td><label class='arrange_text'>".$rows['bds3_percentage']."</label></td>
				<td><label class='arrange_text'>".$rows['bds3_extra_attempts']."</label></td>
				<td><label class='arrange_text'>".$rows['bds3_distinction']."</label></td>
				<tr><td>MBBS Final Prof*</td>
				<td><label class='arrange_text'>".$rows['bdsfinal_school']."</label></td>
				<td><label class='arrange_text'>".$rows['bdsfinal_board']."</label></td>
				<td><label class='arrange_text'>".$rows['bdsfinal_year_admission']."</label></td>
				<td><label class='arrange_text'>".$rows['bdsfinal_year_passing']."</label></td>
				<td><label class='arrange_text'>".$rows['bdsfinal_percentage']."</label></td>
				<td><label class='arrange_text'>".$rows['bdsfinal_extra_attempts'] ."</label></td>
				<td><label class='arrange_text'>".$rows['bdsfinal_distinction']."</label></td>
				<tr><td>Aggregate of MBBS </td>
				<td colspan='4'>Marks obtained in all professionals/ Total marks of all professionals:<label class='arrange_text'>".$rows['aggregate_total_marks']."</label></td>
				
				<td><label class='arrange_text'>".$rows['aggregate_percentage']."</label></td>
				
				<td colspan='1'>Total:<td><label class='arrange_text'>".$rows['aggregate_total_extra_attempts'] ."</label></td>
				
				
				<td colspan='1'>Total No of Distinctions:<td><label class='arrange_text'>".$rows['aggregate_total_distinctions']."</label></td>
				
				<tr><td>Internship</td>
				<td><label class='arrange_text'>".$rows['intern_school'] ."</label></td>
				<td><label class='arrange_text'>".$rows['intern_board'] ."</label></td>
				<td><label class='arrange_text'>".$rows['intern_year_admission'] ."</label></td>
				<td><label class='arrange_text'>".$rows['intern_year_passing'] ."</label></td>
				<td><label class='arrange_text'>".$rows['intern_percentage']."</label></td>
				<td><label class='arrange_text'>".$rows['intern_extra_attempts'] ."</label></td>
				<td><label class='arrange_text'>".$rows['intern_distinction'] ."</label></td>
				<tr><td>MD/MS/DNB/M.Sc. </td>
				<td><label class='arrange_text'>".$rows['mds_school'] ."</label></td>
				<td><label class='arrange_text'>".$rows['mds_board'] ."</label></td>
				<td><label class='arrange_text'>".$rows['mds_year_admission']."</label></td>
				<td><label class='arrange_text'>".$rows['mds_year_passing'] ."</label></td>
				<td><label class='arrange_text'>".$rows['mds_percentage']."</label></td>
				<td><label class='arrange_text'>".$rows['mds_extra_attempts']."</label></td>
				<td><label class='arrange_text'>".$rows['mds_distinction']."</label></td>
				<tr><td>DM / MCh </td>
				<td><label class='arrange_text'>".$rows['dmmch_school'] ."</label></td>
				<td><label class='arrange_text'>".$rows['dmmch_board'] ."</label></td>
				<td><label class='arrange_text'>".$rows['dmmch_year_admission']."</label></td>
				<td><label class='arrange_text'>".$rows['dmmch_year_passing'] ."</label></td>
				<td><label class='arrange_text'>".$rows['dmmch_percentage']."</label></td>
				<td><label class='arrange_text'>".$rows['dmmch_extra_attempts']."</label></td>
				<td><label class='arrange_text'>".$rows['dmmch_distinction']."</label></td>
				<tr rowspan='3'><td>Ph. D.</td>
				<td><label class='arrange_text'>".$rows['phd_school'] ."</label></td>
				<td><label class='arrange_text'>".$rows['phd_board']."</label></td>
				<td><label class='arrange_text'>".$rows['phd_year_admission']."</label></td>
				<td><label class='arrange_text'>".$rows['phd_year_passing'] ."</label></td>
				<td><label class='arrange_text'>".$rows['phd_percentage'] ."</label></td>
				<td><label class='arrange_text'>".$rows['phd_extra_attempts'] ."</label></td>
				<td><label class='arrange_text'>".$rows['phd_distinction']."</label></td>
				</td></tr>
				<tr><td>Any other degree</td>
				<td><label class='arrange_text'>".$rows['any_other_school'] ."</label></td>
				<td><label class='arrange_text'>".$rows['any_other_board'] ."</label></td>
				<td><label class='arrange_text'>".$rows['any_other_year_admission'] ."</label></td>
				<td><label class='arrange_text'>".$rows['any_other_year_passing']."</label></td>
				<td><label class='arrange_text'>".$rows['any_other_percentage'] ."</label></td>
				<td><label class='arrange_text'>".$rows['any_other_extra_attempts'] ."</label></td>
				<td><label class='arrange_text'>".$rows['any_other_distinction'] ."</label></td>
				</tr></table>
				
				
				
				
				<p>The title/s of dissertation/s at PG examinations may be nored below:</p>

<p><h3>15.Present Designation, Place and nature of work:</h3><label>".$rows['present_present_designation']."</label>
</p>

<!--code for professional experience-->


				<p><h3>16.Registration Details: only for medical graduates:</h3>
						<table border='1px' id='professional_experience'>
				<tr>
				<th>Dental Council/Medical Council   </th>
				<th>Registration No.</th>
				<th>Dated</th>
				</tr>
				<tr>
				<td><label class='arrange_text'>".$rows['registration_details_council'] ."</label></td>
				<td><label class='arrange_text'>".$rows['registration_details_registration_no'] ."</label></td>
				<td><label class='arrange_text'>".$rows['registration_details_dated'] ."</label></td>
				</tr>
				</table><br/><br/>
				
				<!--code for professional experience-->
				<label id='main_title'>17.Professional Experience:</label><br/><br/><br/>
				<p><h3>a.Post MBBS experience</h3></p>
				
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
				<td><label class='arrange_text'>".$rows['professional_experience_bdsmbbs_position'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_bdsmbbs_department'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_bdsmbbs_institution']."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_bdsmbbs_from'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_bdsmbbs_to']."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_bdsmbbs_nature_of_work'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_bdsmbbs_salary'] ."</label></td>
				</tr>
				</table>
				
				<p><h3>b.Post MD/MS/DNB experience: </h3></p>
				
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
				<td><label class='arrange_text'>".$rows['professional_experience_mdsmdmsdnb_position'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_mdsmdmsdnb_department'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_mdsmdmsdnb_institution'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_mdsmdmsdnb_from'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_mdsmdmsdnb_to'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_mdsmdmsdnb_nature_of_work']."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_mdsmdmsdnb_salary'] ."</label></td>
				</tr>
				</table>
				
				
				<p><h3>c.Post DM/MCh experience:</h3></p>
				
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
				<td><label class='arrange_text'>".$rows['professional_experience_phd_position'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_phd_department'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_phd_institution'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_phd_from'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_phd_to'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_phd_nature_of_work'] ."</label></td>
				<td><label class='arrange_text'>".$rows['professional_experience_phd_salary']."</label></td>
				</tr>
				</table>
				
				
				

<!--details of awards-->

<p><h3>17.Details of Professional Recognitions, Awards, Fellowships, Honours received in last 12 years</h3></p>
<table border='1px'>
<tr rowspan='2'>
<th>Type of Award<br/>(International/National/State)</th>
<th>Name of Award</th>
<th>Awarding Institution or Body</th>
<th>Award Date</th></tr>
<tr>
<td><label class='arrange_text'>".$rows['awards_type_of_award']."</label></td>
<td><label class='arrange_text'>".$rows['awards_name_of_award']."</label></td>
<td><label class='arrange_text'>".$rows['awards_awarding_institution']."</label></td>
<td><label class='arrange_text'>".$rows['awards_award_date']."</label></td>
</tr>
</table>



				<p><h3>19.Teaching Experience in years in concerned subject (details to be given only for DCI/MCI recognized teaching institutions)</h3></p>
				<p><h3> a. As Junior Resident/ Post BDS Tutor /Post MBBS Tutor/ Demonstrator:</h3>
				<label>".$rows['junior_resident']."</label>
				</p>
				<p><h3> b. As Senior Resident/ Post PG demonstrator/ Tutor/ SSR:</h3>
				<label>".$rows['senior_resident'] ."</label>
				</p>
				<p><h3> c. As Faculty in teaching institutions:</h3>
				<label>".$rows['faculty_teaching'] ."</label>
				</p>
				
				
				<p><h3>20.Details of Work done so far (patient care experience/ Lab work/ professional work) and significance of the professional contribution[Maximum 1000 words]. You may bring summary of your log book/thesis if any, relevant to the subject at time of interaction with FAC-1)</h3>
				<label>".$rows['pro_details_work_done'] ."</label>
				</p>

<!--RESEARCH PART-->

<label id='main_title'>18.RESEARCH:</label><br/><br/><br/>

<!--NO OF PAPERS PUBLISHED-->
<p><h3>a.Total No of Papers published/accepted in Indexed peer reviewed journals :</h3></p>
<table border='1px'>
<tr rowspan='2'>
<th>Category</th>
<th>Total No</th>
</tr>
<tr>
<td>Original articles/Review articles</td>
<td><label class='arrange_text'>".$rows['research_publications_total_papers_original_articles']."</label></td>
</tr>
<tr>
<td>Commentary / Letter to editor etc
</td>
<td><label class='arrange_text'>".$rows['research_publications_total_papers_commentary']."</label></td>
</tr>
<tr>
<td>Authored Books</td>
<td><label class='arrange_text'>".$rows['research_publications_total_papers_authored_books']."</label></td>
</tr>
<tr>
<td>Books / chapters</td>
<td><label class='arrange_text'>".$rows['research_publications_total_papers_books']."</label></td>
</tr>
<tr>
<td>Edited Books</td>
<td><label class='arrange_text'>".$rows['research_publications_total_papers_edited_books']."</label></td>
</tr>
</table>

<!--details of peer-reviewed research-->

<p><h3>b.List your peer-reviewed research (original and reviews) publications from latest to oldest in last 10 years  (Do not include Abstracts/Conference proceedings or other non-peer-reviewed publications)</h3></p>
<table border='1px'>
<tr rowspan='2'>
<th>Author/s</th>
<th>Year</th>
<th>Journal name</th>
<th>Vol. no.</th>
<th>pages</th>
<th>Impact factor (if any) or<br/> ISSN/ISBN no.</th>
</tr>
<tr>
<td><label class='arrange_text'>".$rows['research_publications_peer_author']."</label></td>
<td><label class='arrange_text'>".$rows['research_publications_peer_year']."</label></td>
<td><label class='arrange_text'>".$rows['research_publications_peer_journal_name']."</label></td>
<td><label class='arrange_text'>".$rows['research_publications_peer_vol_no']."</label></td>
<td><label class='arrange_text'>".$rows['research_publications_peer_pages']."</label></td>
<td><label class='arrange_text'>".$rows['research_publications_peer_ISSN']."</label></td>
</tr>
</table>

<!--details of Books Authored or Edited-->

<p><h3>c.Books Authored or Edited and Chapters contributed to Books in last 12 years</h3></p>
<table border='1px'>
<tr rowspan='2'>
<th>Author/s</th>
<th>Title of Book/Chapter</th>
<th>Editor/s</th>
<th>Publisher</th>
<th>pages</th>
<th>ISSN/ISBN no.</th>
</tr>
<tr>
<td><label class='arrange_text'>".$rows['research_publications_books_author']."</label></td>
<td><label class='arrange_text'>".$rows['research_publications_books_title']."</label></td>
<td><label class='arrange_text'>".$rows['research_publications_books_editor']."</label></td>
<td><label class='arrange_text'>".$rows['research_publications_books_publisher']."</label></td>
<td><label class='arrange_text'>".$rows['research_publications_books_pages']."</label></td>
<td><label class='arrange_text'>".$rows['research_publications_books_ISSN']."</label></td>
</tr>
</table>

<!--19. Other Professional Activities-->
<br/><br/>
<label id='main_title'>19.Other Professional Activities:</label><br/><br/><br/>
<p><h3>a.List of International and National Conferences attended in last 12 years</h3></p>
<table border='1px'>
<tr rowspan='2'>
<th>Name of the event</th>
<th>Category <br/>(International/National/State )</th>
<th>Date</th>
<th>Venue</th>
<th>pages</th>
<th>Type of presentation<br/>(Poster/oral etc ) </th>
</tr>
<tr>
<td><label class='arrange_text'>".$rows['other_conferences_name']."</label></td>
<td><label class='arrange_text'>".$rows['other_conferences_category']."</label></td>
<td><label class='arrange_text'>".$rows['other_conferences_date']."</label></td>
<td><label class='arrange_text'>".$rows['other_conferences_venue']."</label></td>
<td><label class='arrange_text'>".$rows['other_conferences_pages']."</label></td>
<td><label class='arrange_text'>".$rows['other_conferences_type']."</label></td>
</tr>
</table>

<!--details of Conferences/Workshops/Training programme-->

<p><h3>b.List of Conferences/Workshops/Training programme organized in last 12 years</h3></p>
<table border='1px'>
<tr rowspan='2'>
<th>Name of the event</th>
<th>Category <br/>(International/National/State )</th>
<th>Date</th>
<th>Venue</th>
<th>pages</th>
<th>Role as Organizer </th>
</tr>
<tr>
<td><label class='arrange_text'>".$rows['other_programme_name']."</label></td>
<td><label class='arrange_text'>".$rows['other_programme_category']."</label></td>
<td><label class='arrange_text'>".$rows['other_programme_date']."</label></td>
<td><label class='arrange_text'>".$rows['other_programme_venue']."</label></td>
<td><label class='arrange_text'>".$rows['other_programme_pages']."</label></td>
<td><label class='arrange_text'>".$rows['other_programme_role']."</label></td>
</tr>
</table>

<!--details of Research projects undertaken-->

<p><h3>c.Research projects undertaken in last 12 years</h3></p>
<table border='1px'>
<tr rowspan='2'>
<th>Title</th>
<th>Total amount</th>
<th>Funding agency</th>
<th>Duration</th>
<th>Current Status  (Ongoing/Completed )</th>
</tr>
<tr>
<td><label class='arrange_text'>".$rows['other_projects_tile']."</label></td>
<td><label class='arrange_text'>".$rows['other_projects_total_amount']."</label></td>
<td><label class='arrange_text'>".$rows['other_projects_funding_agency']."</label></td>
<td><label class='arrange_text'>".$rows['other_projects_duration']."</label></td>
<td><label class='arrange_text'>".$rows['other_projects_current_status']."</label></td>
</tr>
</table>
<p><h3>d.Technology Transfer and Patents (granted), if any</h3>
				<label class='arrange_text'>".$rows['patents']."</label>
				</p>


<!--details of Editor or Member of Editorial Board -->

<p><h3>e.Editor or Member of Editorial Board of Indexed journal/s during the last 12 years</h3></p>
<table border='1px'>
<tr rowspan='2'>
<th>Name of Journal</th>
<th>Publisher</th>
<th>Editor/Member of Editorial Board</th>
<th>Duration</th>
</tr>
<tr>
<td><label class='arrange_text'>".$rows['other_editorial_name']."</label></td>
<td><label class='arrange_text'>".$rows['other_editorial_publisher']."</label></td>
<td><label class='arrange_text'>".$rows['other_editorial_editor']."</label></td>
<td><label class='arrange_text'>".$rows['other_editorial_duration']."</label></td>
</tr>
</table>

<!--details of M.Phil./Ph.D./M.Ch./DM/MD/MS thesis -->

<p><h3>f.M.Phil./Ph.D./M.Ch./DM/MD/MS thesis  supervised during the last 12 years</h3></p>
<table border='1px'>
<tr rowspan='2'>
<th>Title of thesis</th>
<th>Name of the degree</th>
<th>Year of award</th>
<th>Supervisor/Co-supervisor</th>
</tr>
<tr>
<td><label class='arrange_text'>".$rows['other_thesis_title']."</label></td>
<td><label class='arrange_text'>".$rows['other_thesis_name']."</label></td>
<td><label class='arrange_text'>".$rows['other_thesis_award']."</label></td>
<td><label class='arrange_text'>".$rows['other_thesis_supervisor']."</label></td>
</tr>
</table>


<p><h3>20.Details of any administrative work carried out during last 12 years:</h3>
<label>".$rows['details_administration']."</label>
</p>

<p><h3>21.Statement about Work done (teaching, research and/or other professional activities related to the discipline) so far and<br/> significance of the professional contribution (Maximum 500 words) :</h3>
<label>".$rows['details_work_done']."</label></p>

<p><h3>22.A brief statement on your philosophy about teaching (Maximum 500 words):</h3>
<label>".$rows['details_philosophy']."</label></p>

<p><h3>23.Statement about proposed Research/Professional activity and brief outline of proposal. If selected, how you would like to<br/> develop your department and your area of interest (Maximum 500 words) :</h3>
<label>".$rows['details_proposed_research']."</label></p>

<p><h3>24.Extracurricular interests:</h3>
<label>".$rows['details_extracurricular']."</label></p>

<p><h3>25.If your spouse is also applying add his/her name and subject he/she is applying.</h3>
<table border='1px'>
<tr rowspan='2'>
<td>Spouse Name:</td>
<td><label class='arrange_text'>".$rows['spouse_name']."</label></td>
</tr>
<tr>
<td>Post Applied for:</td>
<td><label class='arrange_text'>".$rows['spouse_post']."</label></td>
</tr>
<tr>
<td>Subject:
</td>
<td><label class='arrange_text'>".$rows['spouse_subject']."</label></td>
</tr>
</table>
</p>


<p><h3>26.If you have ever been convicted by any court of law or administrative body in India or abroad? If yes, provide details:</h3>
<label>".$rows['convict_details']."</label></p>

<p><h3>30.If any member of your existing/past professional team has also applied, please provide details</h3>
				<table border='1px'>
				<tr rowspan='2'>
				<td>Name:</td>
				<td><label class='arrange_text'>".$rows['existing_team_name'] ."</label></td>
				</tr>
				<tr>
				<td>Post Applied for:</td>
				<td><label class='arrange_text'>".$rows['existing_team_post']."</label></td>
				</tr>
				<tr>
				<td>Subject:
				</td>
				<td><label class='arrange_text'>".$rows['existing_team_subject']."</label></td>
				</tr>
				</table>
				</p>


<p><h3>27.Names and addresses (including e-mail id and telephone number) of three or more Referees who can provide reference on<br/> the basis of personal knowledge of the applicant; one of the Referees in the case of those applying for a post of Assistant<br/> Professor must be either the thesis supervisor or who taught the candidate for the qualifying examination</h3></p>
<table border='1px'>
<tr rowspan='2'>
<th>Name</th>
<th>Address</th>
<th>Professional relationship</th>
<th>e-mail address</th>
<th>Telephone no.</th>
</tr>
<tr>
<td><label class='arrange_text'>".$rows['referees_name']."</label></td>
<td><label class='arrange_text'>".$rows['referees_address']."</label></td>
<td><label class='arrange_text'>".$rows['referees_professional_relationship']."</label></td>
<td><label class='arrange_text'>".$rows['referees_email']."</label></td>
<td><label class='arrange_text'>".$rows['referees_telephone']."</label></td>
</tr>
</table>
<br/><br/>
<p><h3><U>DECLARATION::</U>I have fully read and clearly understood the rules and procedure governing recruitment of faculty at B.H.U ,<br/>to which i agree.</h3></p>
<p>date:<label>".$rows['registration_date']."</label></td> <br/>
Place:<label>".$rows['registration_place']."</label></td></p>
<p align='center'><br/>(Signature of the Applicant)
<div id='signature_box'>
</div>
</p>

</div>
</div>
</div>

<hr/>
<div id='next_previous'><input type='submit' name='generatepdf' id='generatepdf' value='Generate pdf' onclick='window.print();'/>
<input type='submit' name='edit_pdf' id='edit_pdf' value='edit'/>
</div>";


?>
