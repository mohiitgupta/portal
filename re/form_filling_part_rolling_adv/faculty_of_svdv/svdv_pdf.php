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
<p class='arrange_field' >Position applied for:<label class='arrange_text'>".$rows['applied_position']."</label></p>
<p class='arrange_field'>Name of Department:<label class='arrange_text'>".$rows['department_name']."</label></p>
<p class='arrange_field'>Name of the candidate:<label class='arrange_text'>".$rows['candidate_name']."</label></p>
<p class='arrange_field'>Father's name:<label class='arrange_text'>".$rows['fathers_name']."</label></p>
<p class='arrange_field'>Mother's Name:<label class='arrange_text'>".$rows['mothers_name']."</label></p>
<p>Address:<br/></p>
<p class='arrange_field'>Correspondence:<label class='arrange_text'>".$rows['correspondence_address']."</label></p><br/><br/><br/><br/>
<p class='arrange_field'>Permanent:<label class='arrange_text'>".$rows['permanent_address']."</label></p><br/><br/><br/><br/>
<p class='arrange_field'>Mobile Number:<label class='arrange_text'>".$rows['mobile_number']."</label></p>
<p class='arrange_field'>fax:<label class='arrange_text'>".$rows['fax_number']."</label></p>
<p class='arrange_field'>e-mail:<label class='arrange_text'>".$rows['_email']."</label></p>
<p class='arrange_field'>Date of Birth:(year/month/date)<label class='arrange_text'>".$rows['date_of_birth']."</label>
</p>

<p class='arrange_field'>Sex:<label class='arrange_text'>".$rows['_sex']."</label>
</p>

<p class='arrange_field'>Marital Status:<label class='arrange_text'>".$rows['marital_status']."</label>
</p>
<p class='arrange_field'>Nationality:<label class='arrange_text'>".$rows['_nationality']."</label></p>
<p class='arrange_field'>Category:<label class='arrange_text'>".$rows['_category']."</label>
</p>
<p class='arrange_field'>If Physically challenged:<label class='arrange_text'>".$rows['physically_challenged']."</label></p><br/>
<br/>
<label id='main_title'>ACADEMIC QUALIFICATIONS:</label><br/><br/><br/>
<table border='1px'>
<tr>
<th columnspan='1'>Name of the degree</th>
<th columnspan='1'>Board/University</th>
<th columnspan='1'>Year of passing</th>
<th columnspan='1'>Subjects</th>
<th columnspan='1'>% Marks or CGPA</th>
<th columnspan='1'>Distinction, if any</th>
</tr>
<tr><td>High School(10th)</td>
<td><label class='arrange_text'>".$rows['high_school_board']."</label></td>
<td><label class='arrange_text'>".$rows['high_school_year_completed']."</label></td>
<td><label class='arrange_text'>".$rows['high_school_marks']."</label></td>
<td><label class='arrange_text'>".$rows['high_school_distinction']."</label></td>
<td><label class='arrange_text'>".$rows['high_school_subjects']."</label></td>
<td rowspan='5'></td></tr>
<tr><td>Intermediate(12th)</td>
<td><label class='arrange_text'>".$rows['intermediate_board']."</label></td>
<td><label class='arrange_text'>".$rows['intermediate_year_completed']."</label></td>
<td><label class='arrange_text'>".$rows['intermediate_marks']."</label></td>
<td><label class='arrange_text'>".$rows['intermediate_distinction']."</label></td>
<td><label class='arrange_text'>".$rows['intermediate_subjects']."</label></td></tr>
<tr><td>Under-Graduate*</td>
<td><label class='arrange_text'>".$rows['under_graduate_board']."</label></td>
<td><label class='arrange_text'>".$rows['under_graduate_year_completed']."</label></td>
<td><label class='arrange_text'>".$rows['under_graduate_marks']."</label></td>
<td><label class='arrange_text'>".$rows['under_graduate_distinction']."</label></td>
<td><label class='arrange_text'>".$rows['under_graduate_subjects']."</label></td></tr>
<tr><td>Post-Graduate *</td>
<td><label class='arrange_text'>".$rows['post_graduate_board']."</label></td>
<td><label class='arrange_text'>".$rows['post_graduate_year_completed']."</label></td>
<td><label class='arrange_text'>".$rows['post_graduate_marks']."</label></td>
<td><label class='arrange_text'>".$rows['post_graduate_distinction']."</label></td>
<td><label class='arrange_text'>".$rows['post_graduate_subjects']."</label></td></tr>
<tr rowspan='3'><td>Ph. D.</td>
<td><label class='arrange_text'>".$rows['phd_board']."</label></td>
<td><label class='arrange_text'>".$rows['phd_year_completed']."</label></td>
<td><label class='arrange_text+-'>".$rows['phd_title_of_thesis']."</label></td>
</tr>
<tr><td>Any other qualification*</td>
<td><label class='arrange_text'>".$rows['any_other_quali_board']."</label></td>
<td><label class='arrange_text'>".$rows['any_other_quali_year_completed']."</label></td>
<td><label class='arrange_text'>".$rows['any_other_quali_marks']."</label></td>
<td><label class='arrange_text'>".$rows['any_other_quali_distinction']."</label></td>
<td><label class='arrange_text'>".$rows['any_other_quali_subjects']."</label></td></tr>
<tr rowspan='2'><td>NET JRF or Equivalent </td>
<td><label class='arrange_text'>".$rows['NET_JRF_year_qualified']."</label></td>
<td><label class='arrange_text'>".$rows['NET_JRF_name_of_agency']."</label></td>
</tr>
<tr rowspan='2'><td>NET LS or Equivalent</td>
<td><label class='arrange_text'>".$rows['NET_LS_year_qualified']."</label></td>
<td><label class='arrange_text'>".$rows['NET_LS_name_of_agency']."</label></td></tr></table>
<p><h3> Present Designation, Place and nature of work:</h3>
<label>".$rows['present_present_designation']."</label>
</p>

<!--code for professional experience-->

<p><h3>Professional Experience (most recent first):</h3></p>
<table border='1px'>
<tr rowspan='2'>
<th>Position </th>
<th>Department</th>
<th>Institution </th>
<th>From</th>
<th>To</th>
<th>Nature of Work</th>
<th>Contractual or<br/>Permanent</th>
<th>Salary</th>
</tr>
<tr>
<td><label class='arrange_text'>".$rows['professional_experience_position']."</label></td>
<td><label class='arrange_text'>".$rows['professional_experience_department']."</label></td>
<td><label class='arrange_text'>".$rows['professional_experience_institution']."</label></td>
<td><label class='arrange_text'>".$rows['professional_experience_from']."</label></td>
<td><label class='arrange_text'>".$rows['professional_experience_to']."</label></td>
<td><label class='arrange_text'>".$rows['professional_experience_nature_of_work']."</label></td>
<td><label class='arrange_text'>".$rows['professional_experience_contractual_or_permanent']."</label></td>
<td><label class='arrange_text'>".$rows['professional_experience_salary']."</label></td>
</tr>
</table>

<!--details of awards-->

<p><h3>Details of Professional Recognitions, Awards, Fellowships, Honours received in last 12 years</h3></p>
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

<!--RESEARCH PART-->

<label id='main_title'>RESEARCH:</label><br/><br/><br/>

<!--NO OF PAPERS PUBLISHED-->
<p><h3>Total No of Papers published/accepted in Indexed peer reviewed journals :</h3></p>
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

<p><h3>List your peer-reviewed research (original and reviews) publications from latest to oldest in last 10 years  (Do not include Abstracts/Conference proceedings or other non-peer-reviewed publications)</h3></p>
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

<p><h3>Books Authored or Edited and Chapters contributed to Books in last 12 years</h3></p>
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

<label id='main_title'>Other Professional Activities:</label><br/><br/><br/>
<p><h3>List of International and National Conferences attended in last 12 years</h3></p>
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

<p><h3>List of Conferences/Workshops/Training programme organized in last 12 years</h3></p>
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

<p><h3>Research projects undertaken in last 12 years</h3></p>
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
<p><h3>Technology Transfer and Patents (granted), if any</h3>
				<label>".$rows['other_patents_patents']."</label>
				</p>


<!--details of Editor or Member of Editorial Board -->

<p><h3>Editor or Member of Editorial Board of Indexed journal/s during the last 12 years</h3></p>
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

<p><h3>M.Phil./Ph.D./M.Ch./DM/MD/MS thesis  supervised during the last 12 years</h3></p>
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


<p><h3>Details of any administrative work carried out during last 12 years:</h3>
<label>".$rows['details_administration']."</label>
</p>

<p><h3>Statement about Work done (teaching, research and/or other professional activities related to the discipline) so far and<br/> significance of the professional contribution (Maximum 500 words) :</h3>
<label>".$rows['details_work_done']."</label></p>

<p><h3>A brief statement on your philosophy about teaching (Maximum 500 words):</h3>
<label>".$rows['details_philosophy']."</label></p>

<p><h3>Statement about proposed Research/Professional activity and brief outline of proposal. If selected, how you would like to<br/> develop your department and your area of interest (Maximum 500 words) :</h3>
<label>".$rows['details_proposed_research']."</label></p>

<p><h3>Extracurricular interests:</h3>
<label>".$rows['details_extracurricularr']."</label></p>

<p><h3>If your spouse is also applying add his/her name and subject he/she is applying.</h3>
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


<p><h3>If you have ever been convicted by any court of law or administrative body in India or abroad? If yes, provide details:</h3>
<label>".$rows['convict_details']."</label></p>


<p><h3>Names and addresses (including e-mail id and telephone number) of three or more Referees who can provide reference on<br/> the basis of personal knowledge of the applicant; one of the Referees in the case of those applying for a post of Assistant<br/> Professor must be either the thesis supervisor or who taught the candidate for the qualifying examination</h3></p>
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
<input type='button' value='log out' onclick='onclick=window.location='http://www.example.com'/>
</div>";


?>
