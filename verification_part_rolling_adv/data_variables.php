<?php

//echo "entered in the data_variables";
/**

 variables for general information
**/ 
$positionApplied=$_POST['position_applied'];
$fathersName=$_POST['fathers_name'];$mothersName=$_POST['mothers_name'];
$correspondenceAddress=$_POST['correspondence'];$permanentAddress=$_POST['permanent'];
$mobileNumber=$_POST['mobile_number'];$faxNumber=$_POST['fax_number'];
$year=$_POST['year'];$month=$_POST['month'];$date=$_POST['day'];
$date_of_birth="$year/$month/$date";$sex=$_POST['sex'];$maritalStatus=$_POST['marital_status'];
$physicallyChallenged=$_POST['physicaly_challenged'];
$category=$_POST['category'];
$spouseName=$_POST['spousename'];
// variables for high school

$board=$_POST['high_board'];
$year_completed=$_POST['high_year_passing'];
$marks=$_POST['high_marks'];
$distinction=$_POST['high_distinction'];
$subjects=$_POST['high_subjects'];

//variables for intermediate

$boardInt=$_POST['inter_board'];
$year_completedInt=$_POST['inter_year_passing'];
$marksInt=$_POST['inter_marks'];
$distinctionInt=$_POST['inter_distinction'];
$subjectsInt=$_POST['inter_subjects'];

//variables for undergraduate

$boardug=$_POST['ug_board'];
$year_completedug=$_POST['ug_year_passing'];
$marksug=$_POST['ug_marks'];
$distinctionug=$_POST['ug_distinction'];
$subjectsug=$_POST['ug_subjects'];



//variables for postgraduate

$boardpg=$_POST['pg_board'];
$year_completedpg=$_POST['pg_year_passing'];
$markspg=$_POST['pg_marks'];
$distinctionpg=$_POST['pg_distinction'];
$subjectspg=$_POST['pg_subjects'];


//variables for phd

$boardphd=$_POST['phd_board'];
$year_completedphd=$_POST['phd_year_passing'];
$title_of_thesis=$_POST['phd_thesis'];


//variables for undergraduate

$boardany=$_POST['any_other_board'];
$year_completedany=$_POST['any_other_year_passing'];
$marksany=$_POST['any_other_marks'];
$distinctionany=$_POST['any_other_distinction'];
$subjectsany=$_POST['any_other_subjects'];


//variables for jrf

$name_of_agencyjrf=$_POST['jrf_name_agency'];
$year_completedjrf=$_POST['jrf_year'];


//variables for jrf

$name_of_agencyls=$_POST['ls_name_agency'];
$year_completedls=$_POST['ls_year'];

//variables for present

$present_designation=$_POST['present_designation'];


//variables for professional

$position=$_POST['professional_position'];
$department=$_POST['professional_department'];
$institution=$_POST['professional_institution'];
$from=$_POST['professional_from'];
$to=$_POST['professional_to'];
$nature_of_work=$_POST['professional_nature_work'];
$contractual_or_permanent=$_POST['professional_contractual'];
$salary=$_POST['professional_salary'];
	

//

$type_of_award=$_POST['award_type'];
$name_of_award=$_POST['award_name'];
$awarding_institution=$_POST['award_institution'];
$award_date=$_POST['award_date'];

//

$original_articles=$_POST['research_original_articles'];
$commentary=$_POST['research_commentary'];
$authored_books=$_POST['research_authored'];
$books=$_POST['research_books'];
$edited_books=$_POST['research_edited'];


//

$authorp=$_POST['peer_author'];
$yearp=$_POST['peer_year'];
$journal_namep=$_POST['peer_journal'];
$vol_nop=$_POST['peer_vol'];
$pagesp=$_POST['peer_pages'];
$ISSNp=$_POST['peer_issn'];


//

$author=$_POST['authored_author'];
$title=$_POST['authored_title'];
$editor=$_POST['authored_editor'];
$publisher=$_POST['authored_publisher'];
$pages=$_POST['authored_pages'];
$ISSN=$_POST['authored_issn'];


//	

$namecon=$_POST['conference_name'];
$categorycon=$_POST['conference_category'];
$datecon=$_POST['conference_date'];
$venuecon=$_POST['conference_venue'];
$pagescon=$_POST['conference_pages'];
$typecon=$_POST['conference_presentation'];
	


//

$nameop=$_POST['programme_name_event'];
$categoryop=$_POST['programme_category'];
$dateop=$_POST['programme_date'];
$venueop=$_POST['programme_venue'];
$pagesop=$_POST['programme_pages'];
$roleop=$_POST['programme_role'];


//

$titleopr=$_POST['projects_title'];
$total_amountopr=$_POST['projects_total'];
$funding_agencyopr=$_POST['projects_funding'];
$durationopr=$_POST['projects_duration'];
$current_statusopr=$_POST['projects_current_status'];
$patents=$_POST['patents'];


//

$nameoer=$_POST['editor_name'];
$publisheroer=$_POST['editor_publisher'];
$editoroer=$_POST['editor_member'];
$durationoer=$_POST['editor_duration'];

//

$titleoth=$_POST['supervised_title'];
$nameoth=$_POST['supervised_name'];
$awardoth=$_POST['supervised_award'];
$supervisoroth=$_POST['supervised_supervisor'];


//

$administration=$_POST['administrarive_work'];
$work_done=$_POST['teaching_work'];
$philosophy=$_POST['philosophy_teaching'];
$proposed_research=$_POST['professional_activity'];
$extracurricular=$_POST['extracurricular_interests'];


//
$spouse_name=$_POST['extracurricular_interests'];
$spouse_post=$_POST['extracurricular_interests'];
$spouse_subject=$_POST['extracurricular_interests'];

$convict_details=$_POST['extracurricular_interests'];

$referees_name=$_POST['extracurricular_interests'];
$referees_address=$_POST['extracurricular_interests'];
$referees_professional_relationship=$_POST['extracurricular_interests'];
$referees_email=$_POST['extracurricular_interests'];
$referees_telephone=$_POST['extracurricular_interests'];
$registraton_date=$_POST['date_submit'];
$registraton_place=$_POST['place_submit'];


if($departmentName=='Faculty Of Performing Arts')
{
$authoredYear=$_POST['authored_year'];
$cddvdAuthor=$_POST['cddvd_author'];
$cddvdYear=$_POST['cddvd_year'];
$cddvdTitle=$_POST['cddvd_title'];
$cddvdPublisher=$_POST['cddvd_publisher'];
$cddvdCatalogue=$_POST['cddvd_catalogue'];
}
if($departmentName=='Faculty Of Dental Science')
{

$highSchool=$_POST['high_school'];
$highBoard=$_POST['high_board'];
$highYearAdmission=$_POST['high_year_admission'];
$highYearPassing=$_POST['high_year_passing'];
$highPercentage=$_POST['high_percentage'];
$highExtraAttempts=$_POST['high_extra_attempts'];
$highDistinction=$_POST['high_distinction'];
$interSchool=$_POST['inter_school'];
$interBoard=$_POST['inter_board'];
$interYearAdmission=$_POST['inter_year_admission'];
$interYearPassing=$_POST['inter_year_passing'];
$interPercentage=$_POST['inter_percentage'];
$interExtraAttempts=$_POST['inter_extra_attempts'];
$interDistinction=$_POST['inter_distinction'];
$bscSchool=$_POST['bsc_school'];
$bscBoard=$_POST['bsc_board'];
$bscYearAdmission=$_POST['bsc_year_admission'];
$bscYearPassing=$_POST['bsc_year_passing'];
$bscPercentage=$_POST['bsc_percentage'];
$bscExtraAttempts=$_POST['bsc_extra_attempts'];
$bscDistinction=$_POST['bsc_distinction'];
$bds1School=$_POST['bds1_school'];
$bds1Board=$_POST['bds1_board'];
$bds1YearAdmission=$_POST['bds1_year_admission'];
$bds1YearPassing=$_POST['bds1_year_passing'];
$bds1Percentage=$_POST['bds1_percentage'];
$bds1ExtraAttempts=$_POST['bds1_extra_attempts'];
$bds1Distinction=$_POST['bds1_distinction'];
$bds2School=$_POST['bds2_school'];
$bds2Board=$_POST['bds2_board'];
$bds2YearAdmission=$_POST['bds2_year_admission'];
$bds2YearPassing=$_POST['bds2_year_passing'];
$bds2Percentage=$_POST['bds2_percentage'];
$bds2ExtraAttempts=$_POST['bds2_extra_attempts'];
$bds2Distinction=$_POST['bds2_distinction'];
$bds3School=$_POST['bds3_school'];
$bds3Board=$_POST['bds3_board'];
$bds3YearAdmission=$_POST['bds3_year_admission'];
$bds3YearPassing=$_POST['bds3_year_passing'];
$bds3Percentage=$_POST['bds3_percentage'];
$bds3ExtraAttempts=$_POST['bds3_extra_attempts'];
$bds3Distinction=$_POST['bds3_distinction'];
$bdsFinalSchool=$_POST['bdsfinal_school'];
$bdsFinalBoard=$_POST['bdsfinal_board'];
$bdsFinalYearAdmission=$_POST['bdsfinal_year_admission'];
$bdsFinalYearPassing=$_POST['bdsfinal_year_passing'];
$bdsFinalPercentage=$_POST['bdsfinal_percentage'];
$bdsFinalExtraAttempts=$_POST['bdsfinal_extra_attempts'];
$bdsFinalDistinction=$_POST['bdsfinal_distinction'];
$aggregateTotalMarks=$_POST['aggregate_total_marks'];
$aggregatePercentage=$_POST['aggregate_percentage'];
$aggregateTotalExtraAttempts=$_POST['aggregate_total_extra_attempts'];
$aggregateTotalDistinction=$_POST['aggregate_total_distinctions'];
$internSchool=$_POST['intern_school'];
$internBoard=$_POST['intern_board'];
$internYearAdmission=$_POST['intern_year_admission'];
$internYearPassing=$_POST['intern_year_passing'];
$internPercentage=$_POST['intern_percentage'];
$internExtraAttempts=$_POST['intern_extra_attempts'];
$internDistinction=$_POST['intern_distinction'];
$mdsSchool=$_POST['mds_school'];
$mdsBoard=$_POST['mds_board'];
$mdsYearAdmission=$_POST['mds_year_admission'];
$mdsYearPassing=$_POST['mds_year_passing'];
$mdsPercentage=$_POST['mds_percentage'];
$mdsExtraAttempts=$_POST['mds_extra_attempts'];
$mdsDistinction=$_POST['mds_distinction'];
$phdSchool=$_POST['phd_school'];
$phdBoard=$_POST['phd_board'];
$phdYearAdmission=$_POST['phd_year_admission'];
$phdYearPassing=$_POST['phd_year_passing'];
$phdPercentage=$_POST['phd_percentage'];
$phdExtraAttempts=$_POST['phd_extra_attempts'];
$phdDistinction=$_POST['phd_distinction'];
$anyOtherSchool=$_POST['any_other_school'];
$anyOtherBoard=$_POST['any_other_board'];
$anyOtherYearAdmission=$_POST['any_other_year_admission'];
$anyOtherYearPassing=$_POST['any_other_year_passing'];
$anyOtherPercentage=$_POST['any_other_percentage'];
$anyOtherExtraAttempts=$_POST['any_other_extra_attempts'];
$anyOtherDistinction=$_POST['any_other_distinction'];
$registrationDetailsCouncil=$_POST['registration_details_council'];
$registrationDetailsRegistrationNo=$_POST['registration_details_registration_no'];
$registrationDetailsDated=$_POST['registration_details_dated'];
$professional_experience_bdsmbbs_position=$_POST['professional_experience_bdsmbbs_position'];
$professional_experience_bdsmbbs_department=$_POST['professional_experience_bdsmbbs_department'];
$professional_experience_bdsmbbs_institution=$_POST['professional_experience_bdsmbbs_institution'];
$professional_experience_bdsmbbs_from=$_POST['professional_experience_bdsmbbs_from'];
$professional_experience_bdsmbbs_to=$_POST['professional_experience_bdsmbbs_to'];
$professional_experience_bdsmbbs_nature_work=$_POST['professional_experience_bdsmbbs_nature_work'];
$professional_experience_bdsmbbs_salary=$_POST['professional_experience_bdsmbbs_salary'];
$professional_experience_mdsmdmsdnb_position=$_POST['professional_experience_mdsmdmsdnb_position'];
$professional_experience_mdsmdmsdnb_department=$_POST['professional_experience_mdsmdmsdnb_department'];
$professional_experience_mdsmdmsdnb_institution=$_POST['professional_experience_mdsmdmsdnb_institution'];
$professional_experience_mdsmdmsdnb_from=$_POST['professional_experience_mdsmdmsdnb_from'];
$professional_experience_mdsmdmsdnb_to=$_POST['professional_experience_mdsmdmsdnb_to'];
$professional_experience_mdsmdmsdnb_nature_work=$_POST['professional_experience_mdsmdmsdnb_nature_work'];
$professional_experience_mdsmdmsdnb_salary=$_POST['professional_experience_mdsmdmsdnb_salary'];
$professional_experience_phd_position=$_POST['professional_experience_phd_position'];
$professional_experience_phd_department=$_POST['professional_experience_phd_department'];
$professional_experience_phd_institution=$_POST['professional_experience_phd_institution'];
$professional_experience_phd_from=$_POST['professional_experience_phd_from'];
$professional_experience_phd_to=$_POST['professional_experience_phd_to'];
$professional_experience_phd_nature_work=$_POST['professional_experience_phd_nature_work'];
$professional_experience_phd_salary=$_POST['professional_experience_phd_salary'];
$junior_resident=$_POST['junior_resident'];
$senior_resident=$_POST['senior_resident'];
$faculty_teaching=$_POST['faculty_teaching'];
$pro_details_work_done=$_POST['pro_details_work_done'];
$existing_team_name=$_POST['existing_team_name'];
$existing_team_post=$_POST['existing_team_post'];
$existing_team_subject=$_POST['existing_team_subject'];
}
?>
