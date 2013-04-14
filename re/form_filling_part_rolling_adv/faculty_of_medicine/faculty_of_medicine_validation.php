
<?php


if(!$_POST['medicine_submit'])
   {

     $_SERVER['REQUEST_METHOD']="GET";
    }
   else
   {
     $_SERVER['REQUEST_METHOD']="POST";

  
    }

 
   if($_SERVER['REQUEST_METHOD']=="POST")
      {
        
        
          if(!preg_match("/^([1]-)?[0-9]{3}-[0-9]{3}-[0-9]{4}$/i", $_POST['mobile_number'])) 
              {
                     
                  $error_report['mobile_number']="Please enter valid mobile number in the space given.";     
               }
			   if(empty($_POST['permanent'])) 
              {
                     
                  $error_report['permanent']="Please enter your permanent address in the space given.";     
               }
			   if(empty($_POST['mothers_name'])) 
              {
                     
                  $error_report['mothers_name']="Please enter your mothers name in the space given.";     
               }
			   if(empty($_POST['fathers_name'])) 
              {
                     
                  $error_report['fathers_name']="Please enter your fathers name in the space given.";     
               }
			 
			  if($_FILE['image_file']['size']/1024>50)
				{
					$error_report['image_file']="please use the image size less than 200 kb.";
				}
				if($_FILE['signature_file']['size']/1024>20)
			   {
					$error_report['signature_file']="please use the signature size less than 100 kb.";
				}
         
        if(count($error_report)==0)
            { 
                  
			      
			   	   	include("../verification_part_rolling_adv/data_variables.php");
					$temp=$departmentName;
					$temp=str_replace(" ", "", $temp);
					$table_name=$temp.$uniqueid;
      mysql_select_db($db_name);
                   
		if(!mysql_query("select * from $table_name"))
			{
                       
			  $result1=mysql_query("CREATE TABLE $table_name(
			   unique_id varchar(20),		
                           applied_position varchar(50),
                           department_name varchar(50),
                           candidate_name varchar(100),
                           fathers_name varchar(100),
                           mothers_name varchar(100),
                           correspondence_address varchar(200),
                           permanent_address varchar(200),
                           mobile_number varchar(20),
                           fax_number varchar(20),
                           _email varchar(100),
                           date_of_birth varchar(20),
                           _sex varchar(7),
                            marital_status varchar(7),
							spousename varchar(20),
                            _nationality varchar(10),
                            _category varchar(10),
                            physically_challenged varchar(5),
                            high_school varchar(100),
						    high_board varchar(100),
							high_year_admission varchar(100),
							high_year_passing varchar(100),
							high_percentage varchar(100),
							high_extra_attempts varchar(100),
							high_distinction varchar(100),
							inter_school varchar(100),
						    inter_board varchar(100),
							inter_year_admission varchar(100),
							inter_year_passing varchar(100),
							inter_percentage varchar(100),
							inter_extra_attempts varchar(100),
							inter_distinction varchar(100),
						    bsc_school varchar(100),
						    bsc_board varchar(100),
							bsc_year_admission varchar(100),
							bsc_year_passing varchar(100),
							bsc_percentage varchar(100),
							bsc_extra_attempts varchar(100),
							bsc_distinction varchar(100),
							bds1_school varchar(100),
						    bds1_board varchar(100),
							bds1_year_admission varchar(100),
							bds1_year_passing varchar(100),
							bds1_percentage varchar(100),
							bds1_extra_attempts varchar(100),
							bds1_distinction varchar(100),
							bds2_school varchar(100),
						    bds2_board varchar(100),
							bds2_year_admission varchar(100),
							bds2_year_passing varchar(100),
							bds2_percentage varchar(100),
							bds2_extra_attempts varchar(100),
							bds2_distinction varchar(100),
							bds3_school varchar(100),
						    bds3_board varchar(100),
							bds3_year_admission varchar(100),
							bds3_year_passing varchar(100),
							bds3_percentage varchar(100),
							bds3_extra_attempts varchar(100),
							bds3_distinction varchar(100),
							bdsfinal_school varchar(100),
						    bdsfinal_board varchar(100),
							bdsfinal_year_admission varchar(100),
							bdsfinal_year_passing varchar(100),
							bdsfinal_percentage varchar(100),
							bdsfinal_extra_attempts varchar(100),
							bdsfinal_distinction varchar(100),
							aggregate_total_marks varchar(100),
							aggregate_percentage varchar(100),
							aggregate_total_extra_attempts varchar(100),
							aggregate_total_distinctions varchar(100),
							intern_school varchar(100),
							intern_board varchar(100),
							intern_year_admission varchar(100),
							intern_year_passing varchar(100),
							intern_percentage varchar(100),
							intern_extra_attempts varchar(100),
							intern_distinction varchar(100),
							mds_school varchar(100),
							mds_board varchar(100),
							mds_year_admission varchar(100),
							mds_year_passing varchar(100),
							mds_percentage varchar(100),
							mds_extra_attempts varchar(100),
							mds_distinction varchar(100),
							dmmch_school varchar(100),
							dmmch_board varchar(100),
							dmmch_year_admission varchar(100),
							dmmch_year_passing varchar(100),
							dmmch_percentage varchar(100),
							dmmch_extra_attempts varchar(100),
							dmmch_distinction varchar(100),
							phd_school varchar(100),
							phd_board varchar(100),
							phd_year_admission varchar(100),
							phd_year_passing varchar(100),
							phd_percentage varchar(100),
							phd_extra_attempts varchar(100),
							phd_distinction varchar(100),
							any_other_school varchar(100),
							any_other_board varchar(100),
							any_other_year_admission varchar(100),
							any_other_year_passing varchar(100),
							any_other_percentage varchar(100),
							any_other_extra_attempts varchar(100),
							any_other_distinction varchar(100),
							present_present_designation varchar(100) ,
							registration_details_council varchar(100),
							registration_details_registration_no varchar(100),
							registration_details_dated varchar(100),
							professional_experience_bdsmbbs_position varchar(100) ,
    professional_experience_bdsmbbs_department varchar(100) ,
    professional_experience_bdsmbbs_institution varchar(100) ,
    professional_experience_bdsmbbs_from varchar(100) ,
    professional_experience_bdsmbbs_to varchar(100) ,
    professional_experience_bdsmbbs_nature_of_work varchar(100) ,
    professional_experience_bdsmbbs_salary varchar(100) ,
	professional_experience_mdsmdmsdnb_position varchar(100) ,
    professional_experience_mdsmdmsdnb_department varchar(100) ,
    professional_experience_mdsmdmsdnb_institution varchar(100) ,
    professional_experience_mdsmdmsdnb_from varchar(100) ,
    professional_experience_mdsmdmsdnb_to varchar(100),
    professional_experience_mdsmdmsdnb_nature_of_work varchar(100) ,
    professional_experience_mdsmdmsdnb_salary varchar(100) ,
	professional_experience_phd_position varchar(100) ,
    professional_experience_phd_department varchar(100) ,
    professional_experience_phd_institution varchar(100) ,
    professional_experience_phd_from varchar(100) ,
    professional_experience_phd_to varchar(100) ,
    professional_experience_phd_nature_of_work varchar(100) ,
    professional_experience_phd_salary varchar(100) ,
    awards_type_of_award varchar(100) ,
    awards_name_of_award varchar(100) ,
    awards_awarding_institution varchar(100) ,
    awards_award_date varchar(100),
	junior_resident varchar(500),
	senior_resident varchar(500),
	faculty_teaching varchar(500),
	pro_details_work_done varchar(500),
    research_publications_total_papers_original_articles varchar(100) ,
    research_publications_total_papers_commentary varchar(100) ,
    research_publications_total_papers_authored_books varchar(100) ,
    research_publications_total_papers_books varchar(100) ,
    research_publications_total_papers_edited_books varchar(100) ,
    research_publications_peer_author varchar(100) ,
    research_publications_peer_year varchar(100) ,
    research_publications_peer_journal_name varchar(100) ,
    research_publications_peer_vol_no varchar(100) ,
    research_publications_peer_pages varchar(100) ,
    research_publications_peer_ISSN varchar(100) ,
    research_publications_books_author varchar(100) ,
    research_publications_books_title varchar(100) ,
    research_publications_books_editor varchar(100) ,
    research_publications_books_publisher varchar(100) ,
    research_publications_books_pages varchar(100) ,
                            research_publications_books_ISSN varchar(50),
                            other_conferences_name varchar(50),
                            other_conferences_category varchar(50),
                            other_conferences_date varchar(50),
                            other_conferences_venue varchar(50),
                            other_conferences_pages varchar(50),
                            other_conferences_type varchar(50),
                            other_programme_name varchar(50),
                            other_programme_category varchar(50),
                            other_programme_date varchar(50),
                            other_programme_venue varchar(50),
                               other_programme_pages varchar(50),
                            other_programme_role varchar(50),
                            other_projects_tile varchar(50),
                            other_projects_total_amount varchar(50),
                            other_projects_funding_agency varchar(50),
                            other_projects_duration varchar(50),
                            other_projects_current_status varchar(50),
			        other_patents_patents varchar(100),
                            other_editorial_name varchar(50),
                            other_editorial_publisher varchar(50),
                            other_editorial_editor varchar(50),
                            other_editorial_duration varchar(50),
                            other_thesis_title varchar(50),
                            other_thesis_name varchar(50),
                            other_thesis_award varchar(50),
                            other_thesis_supervisor varchar(50),
                            details_administration varchar(500),
                            details_work_done varchar(500),
                            details_philosophy varchar(500),
                            details_proposed_research varchar(500),
                            details_extracurricular varchar(500),
                            spouse_name varchar(50),
                            spouse_post varchar(50),
                            spouse_subject varchar(50),
							convict_details varchar(500),
							existing_name varchar(50),
                            existing_post varchar(50),
                            existing_subject varchar(50),
                            referees_name varchar(50),
                            referees_address varchar(50),
                            referees_professional_relationship varchar(50),
                            referees_email varchar(50),
                            referees_telephone varchar(50),
                            registration_date varchar(15),
                            registration_place varchar(50))"); 
				
			}
                        //  echo "hello";


					if($result1)
							{
							  //echo 'entering form informationn';	

							  
								  include("../form_filling_part_rolling_adv/faculty_of_medicine/enter_form.php");


							     if($result_query)
								{		

							    include('../form_filling_part_rolling_adv/faculty_of_medicine/medicine_pdf.php');

							// code for pdf generation
										

																						
								}
							


								}
	}		   
}






?>
