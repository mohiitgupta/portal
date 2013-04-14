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
spousename,
_nationality,
_category,
physically_challenged,
high_school ,
						    high_board ,
							high_year_admission ,
							high_year_passing ,
							high_percentage ,
							high_extra_attempts ,
							high_distinction ,
							inter_school ,
						    inter_board ,
							inter_year_admission ,
							inter_year_passing ,
							inter_percentage ,
							inter_extra_attempts ,
							inter_distinction ,
						    bsc_school ,
						    bsc_board ,
							bsc_year_admission ,
							bsc_year_passing ,
							bsc_percentage ,
							bsc_extra_attempts ,
							bsc_distinction ,
							bds1_school ,
						    bds1_board ,
							bds1_year_admission ,
							bds1_year_passing ,
							bds1_percentage ,
							bds1_extra_attempts ,
							bds1_distinction ,
							bds2_school ,
						    bds2_board ,
							bds2_year_admission ,
							bds2_year_passing ,
							bds2_percentage ,
							bds2_extra_attempts ,
							bds2_distinction ,
							bds3_school ,
						    bds3_board ,
							bds3_year_admission ,
							bds3_year_passing ,
							bds3_percentage ,
							bds3_extra_attempts ,
							bds3_distinction ,
							bdsfinal_school ,
						    bdsfinal_board ,
							bdsfinal_year_admission ,
							bdsfinal_year_passing ,
							bdsfinal_percentage ,
							bdsfinal_extra_attempts ,
							bdsfinal_distinction ,
							aggregate_total_marks ,
							aggregate_percentage ,
							aggregate_total_extra_attempts ,
							aggregate_total_distinctions ,
							intern_school ,
							intern_board ,
							intern_year_admission ,
							intern_year_passing ,
							intern_percentage ,
							intern_extra_attempts ,
							intern_distinction ,
							mds_school ,
							mds_board,
							mds_year_admission,
							mds_year_passing,
							mds_percentage,
							mds_extra_attempts,
							mds_distinction,
							dmmch_school ,
							dmmch_board,
							dmmch_year_admission,
							dmmch_year_passing,
							dmmch_percentage,
							dmmch_extra_attempts,
							dmmch_distinction,
							phd_school,
							phd_board,
							phd_year_admission,
							phd_year_passing,
							phd_percentage,
							phd_extra_attempts,
							phd_distinction,
							any_other_school,
							any_other_board,
							any_other_year_admission,
							any_other_year_passing,
							any_other_percentage,
							any_other_extra_attempts,
							any_other_distinction,
							present_present_designation ,
							registration_details_council,
							registration_details_registration_no,
							registration_details_dated ,
							professional_experience_bdsmbbs_position  ,
    professional_experience_bdsmbbs_department  ,
    professional_experience_bdsmbbs_institution  ,
    professional_experience_bdsmbbs_from  ,
    professional_experience_bdsmbbs_to  ,
    professional_experience_bdsmbbs_nature_of_work  ,
    professional_experience_bdsmbbs_salary  ,
	professional_experience_mdsmdmsdnb_position  ,
    professional_experience_mdsmdmsdnb_department  ,
    professional_experience_mdsmdmsdnb_institution  ,
    professional_experience_mdsmdmsdnb_from  ,
    professional_experience_mdsmdmsdnb_to ,
    professional_experience_mdsmdmsdnb_nature_of_work  ,
    professional_experience_mdsmdmsdnb_salary  ,
	professional_experience_phd_position  ,
    professional_experience_phd_department  ,
    professional_experience_phd_institution  ,
    professional_experience_phd_from  ,
    professional_experience_phd_to  ,
    professional_experience_phd_nature_of_work  ,
    professional_experience_phd_salary  ,
    awards_type_of_award ,
    awards_name_of_award ,
    awards_awarding_institution ,
    awards_award_date ,
junior_resident,
	senior_resident,
	faculty_teaching,
	pro_details_work_done,    
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
	existing_name,
    existing_post,
    existing_subject,
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
'$spouseName',
 '$country', 
'$category',
 '$physicallyChallenged'
,'$highSchool'
,'$highBoard'
,'$highYearAdmission'
,'$highYearPassing'
,'$highPercentage'
,'$highExtraAttempts'
,'$highDistinction'
,'$interSchool'
,'$interBoard'
,'$interYearAdmission'
,'$interYearPassing'
,'$interPercentage'
,'$interExtraAttempts'
,'$interDistinction'
,'$bscSchool'
,'$bscBoard'
,'$bscYearAdmission'
,'$bscYearPassing'
,'$bscPercentage'
,'$bscExtraAttempts'
,'$bscDistinction'
,'$bds1School'
,'$bds1Board'
,'$bds1YearAdmission'
,'$bds1YearPassing'
,'$bds1Percentage'
,'$bds1ExtraAttempts'
,'$bds1Distinction'
,'$bds2School'
,'$bds2Board'
,'$bds2YearAdmission'
,'$bds2YearPassing'
,'$bds2Percentage'
,'$bds2ExtraAttempts'
,'$bds2Distinction'
,'$bds3School'
,'$bds3Board'
,'$bds3YearAdmission'
,'$bds3YearPassing'
,'$bds3Percentage'
,'$bds3ExtraAttempts'
,'$bds3Distinction'
,'$bdsFinalSchool'
,'$bdsFinalBoard'
,'$bdsFinalYearAdmission'
,'$bdsFinalYearPassing'
,'$bdsFinalPercentage'
,'$bdsFinalExtraAttempts'
,'$bdsFinalDistinction'
,'$aggregateTotalMarks'
,'$aggregatePercentage'
,'$aggregateTotalExtraAttempts'
,'$aggregateTotalDistinction'
,'$internSchool'
,'$internBoard'
,'$internYearAdmission'
,'$internYearPassing'
,'$internPercentage'
,'$internExtraAttempts'
,'$internDistinction'
,'$mdsSchool'
,'$mdsBoard'
,'$mdsYearAdmission'
,'$mdsYearPassing'
,'$mdsPercentage'
,'$mdsExtraAttempts'
,'$mdsDistinction'
,'$dmmchSchool'
,'$dmmchBoard'
,'$dmmchYearAdmission'
,'$dmmchYearPassing'
,'$dmmchPercentage'
,'$dmmchExtraAttempts'
,'$dmmchDistinction'
,'$phdSchool'
,'$phdBoard'
,'$phdYearAdmission'
,'$phdYearPassing'
,'$phdPercentage'
,'$phdExtraAttempts'
,'$phdDistinction'
,'$anyOtherSchool'
,'$anyOtherBoard'
,'$anyOtherYearAdmission'
,'$anyOtherYearPassing'
,'$anyOtherPercentage'
,'$anyOtherExtraAttempts'
,'$anyOtherDistinction'
,'$present_designation'
,'$registrationDetailsCouncil'
,'$registrationDetailsRegistrationNo'
,'$registrationDetailsDated'
,'$professional_experience_bdsmbbs_position'
,'$professional_experience_bdsmbbs_department'
,'$professional_experience_bdsmbbs_institution'
,'$professional_experience_bdsmbbs_from'
,'$professional_experience_bdsmbbs_to'
,'$professional_experience_bdsmbbs_nature_work'
,'$professional_experience_bdsmbbs_salary'
,'$professional_experience_mdsmdmsdnb_position'
,'$professional_experience_mdsmdmsdnb_department'
,'$professional_experience_mdsmdmsdnb_institution'
,'$professional_experience_mdsmdmsdnb_from'
,'$professional_experience_mdsmdmsdnb_to'
,'$professional_experience_mdsmdmsdnb_nature_work'
,'$professional_experience_mdsmdmsdnb_salary'
,'$professional_experience_phd_position'
,'$professional_experience_phd_department'
,'$professional_experience_phd_institution'
,'$professional_experience_phd_from'
,'$professional_experience_phd_to'
,'$professional_experience_phd_nature_work'
,'$professional_experience_phd_salary'
,'$type_of_award'
,'$name_of_award'
,'$awarding_institution'
,'$award_date'
,'$junior_resident'
,'$senior_resident'
,'$faculty_teaching'
,'$pro_details_work_done'
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
,'$existing_team_name'
,'$existing_team_post'
,'$existing_team_subject'
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
