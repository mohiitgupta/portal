<?php

//echo "entered in the enter_form";
//code for testing the form data 
//echo $uniqueid;

 include("../verification_part_rolling_adv/data_variables.php");
/**
   FROM HERE WE CREATE THE TABLE FOR THE 
   FACULTY REQRITMENT

**/
//echo $table_name;



if (!file_exists("../upload/$table_name"))
{
    mkdir("../upload/$table_name", 0777, true);
}
$dir="../upload/$table_name/";
if ($_FILES["image_file"]["error"] > 0) {



    echo "Error: " . $_FILES["image_file"]["error"] . "<br>";

	
	}


 else if ($_FILES["image_file"]["name"]) {
    
 
    if (file_exists("$dir" . $_FILES["image_file"]["name"])) {
        echo $_FILES["image_file"]["name"] . " already exists. ";
    } else {
        move_uploaded_file($_FILES["image_file"]["tmp_name"], "$dir".'image.jpeg');
        //echo "Stored in: " . "$dir" .'image.jpeg';
    }




}
if (!file_exists("../upload/$table_name"))
{
    mkdir("../upload/$table_name", 0777, true);
}
$dir="../upload/$table_name/";
if ($_FILES["signature_file"]["error"] > 0) {



    echo "Error: " . $_FILES["signature_file"]["error"] . "<br>";

	
	}


 else if ($_FILES["signature_file"]["name"]) {
    
 
    if (file_exists("$dir" . $_FILES["signature_file"]["name"])) {
        echo $_FILES["signature_file"]["name"] . " already exists. ";
    } else {
        move_uploaded_file($_FILES["signature_file"]["tmp_name"], "$dir".'signature.jpeg');
        //echo "Stored in: " . "$dir" .'signature.jpeg';
    }




}


 mysql_select_db($db_name);

$query1="INSERT INTO $table_name(unique_id,
applied_position,
department_name,
candidate_name,
fathers_name,
mothers_name,
correspondence_address,
permanent_address,
mobile_number,
fax_number,
_email,
date_of_birth,
_sex,
marital_status,
_nationality,
_category,
physically_challenged,
high_school_board ,
high_school_year_completed ,
high_school_marks ,
high_school_distinction ,
high_school_subjects ,
intermediate_board ,
intermediate_year_completed ,
intermediate_marks ,
intermediate_distinction ,
intermediate_subjects ,
under_graduate_board ,
under_graduate_year_completed ,
under_graduate_marks ,
under_graduate_distinction ,
under_graduate_subjects ,
post_graduate_board ,
post_graduate_year_completed ,
post_graduate_marks ,
post_graduate_distinction ,
post_graduate_subjects ,
 phd_board ,
phd_year_completed ,
phd_title_of_thesis ,
  any_other_quali_board ,
any_other_quali_year_completed ,
any_other_quali_marks ,
any_other_quali_distinction ,
any_other_quali_subjects ,
NET_JRF_year_qualified ,
NET_JRF_name_of_agency ,
NET_LS_year_qualified ,
    NET_LS_name_of_agency ,
present_present_designation ,
    professional_experience_position ,
    professional_experience_department ,
    professional_experience_institution ,
    professional_experience_from ,
    professional_experience_to ,
    professional_experience_nature_of_work ,
    professional_experience_contractual_or_permanent ,
    professional_experience_salary ,
    awards_type_of_award ,
    awards_name_of_award ,
    awards_awarding_institution ,
    awards_award_date ,    
    research_publications_total_papers_original_articles ,
    research_publications_total_papers_commentary ,
    research_publications_total_papers_authored_books ,
    research_publications_total_papers_books ,
    research_publications_total_papers_edited_books ,
    research_publications_peer_author ,
    research_publications_peer_year ,
    research_publications_peer_journal_name ,
    research_publications_peer_vol_no ,
    research_publications_peer_pages ,
    research_publications_peer_ISSN ,
    research_publications_books_author ,
    research_publications_books_title ,
    research_publications_books_editor ,
    research_publications_books_publisher ,
    research_publications_books_pages ,
    research_publications_books_ISSN ,
    other_conferences_name ,
    other_conferences_category ,
    other_conferences_date ,
    other_conferences_venue ,
        other_conferences_pages ,
    other_conferences_type ,
    other_programme_name ,
    other_programme_category ,
    other_programme_date ,
    other_programme_venue ,
       other_programme_pages ,
    other_programme_role ,
    other_projects_tile ,
    other_projects_total_amount ,
    other_projects_funding_agency ,
    other_projects_duration ,
    other_projects_current_status ,
    other_patents_patents ,
    other_editorial_name ,
    other_editorial_publisher ,
    other_editorial_editor ,
    other_editorial_duration ,
    other_thesis_title ,
    other_thesis_name ,
    other_thesis_award ,
    other_thesis_supervisor,
    details_administration,
    details_work_done,
    details_philosophy,
    details_proposed_research,
    details_extracurricular,
    spouse_name,
    spouse_post,
    spouse_subject,
    convict_details,
    referees_name,
    referees_address,
    referees_professional_relationship,
    referees_email,
    referees_telephone,
registration_date,
registration_place)
VALUES('$uniqueid',
'$positionApplied',
 '$departmentName',
'$name',
 '$fathersName', 
'$mothersName',
'$correspondenceAddress',
 '$permanentAddress', 
'$mobileNumber',
 '$faxNumber',
 '$email',
 '$date_of_birth',
 '$sex',
'$maritalStatus',
 '$country', 
'$category',
 '$physicallyChallenged',
'$board'
,'$year_completed'
,'$marks'
,'$distinction'
,'$subjects'
,'$boardInt'
,'$year_completedInt'
,'$marksInt'
,'$distinctionInt'
,'$subjectsInt'
,'$boardug'
,'$year_completedug'
,'$marksug'
,'$distinctionug'
,'$subjectsug'
,'$boardpg'
,'$year_completedpg'
,'$markspg'
,'$distinctionpg'
,'$subjectspg'
,'$boardphd'
,'$year_completedphd'
,'$title_of_thesis'
,'$boardany'
,'$year_completedany'
,'$marksany'
,'$distinctionany'
,'$subjectsany'
,'$name_of_agencyjrf'
,'$year_completedjrf'
,'$name_of_agencyls'
,'$year_completedls'
,'$present_designation'
,'$position'
,'$department'
,'$institution'
,'$from'
,'$to'
,'$nature_of_work'
,'$contractual_or_permanent'
,'$salary'
,'$type_of_award'
,'$name_of_award'
,'$awarding_institution'
,'$award_date'
,'$original_articles'
,'$commentary'
,'$authored_books'
,'$books'
,'$edited_books'
,'$authorp'
,'$yearp'
,'$journal_namep'
,'$vol_nop'
,'$pagesp'
,'$ISSNp'
,'$author'
,'$title'
,'$editor'
,'$publisher'
,'$pages'
,'$ISSN'
,'$namecon'
,'$categorycon'
,'$datecon'
,'$venuecon'
,'$pagescon'
,'$typecon'
,'$nameop'
,'$categoryop'
,'$dateop'
,'$venueop'
,'$pagesop'
,'$roleop'
,'$titleopr'
,'$total_amountopr'
,'$funding_agencyopr'
,'$durationopr'
,'$current_statusopr'
,'$patents'
,'$nameoer'
,'$publisheroer'
,'$editoroer'
,'$durationoer'
,'$titleoth'
,'$nameoth'
,'$awardoth',
'$supervisoroth'
,'$administration'
,'$work_done'
,'$philosophy'
,'$proposed_research'
,'$extracurricular'
,'$spouse_name'
,'$spouse_post'
,'$spouse_subject'
,'$convict_details'
,'$referees_name'
,'$referees_address'
,'$referees_professional_relationship'
,'$referees_email'
,'$referees_telephone'
,'$registraton_date'
,'$registraton_place'
)";


$result_query=mysql_query($query1);


if(!$result_query)
{

echo "error inserting data";

}



?>
