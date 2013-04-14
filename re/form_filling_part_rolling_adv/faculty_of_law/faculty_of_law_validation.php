
<?php


if(!$_POST['law_submit'])
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
			   if(empty($_POST['high_board'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
               }
			   if(empty($_POST['high_year_passing'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
               }
			   if(empty($_POST['high_subjects'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
               }if(empty($_POST['high_marks'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
               }if(empty($_POST['high_distinction'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
               }
			   if(empty($_POST['inter_board'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
               }
			   if(empty($_POST['inter_year_passing'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
               }
			   if(empty($_POST['inter_subjects'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
               }
			   if(empty($_POST['inter_marks'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
               }
			   if(empty($_POST['inter_distinction'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
               }
			   if(empty($_POST['ug_board'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
               }
			   if(empty($_POST['ug_year_passing'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
               }
			   if(empty($_POST['ug_subjects'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
               }
			   if(empty($_POST['ug_marks'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
               }
			   if(empty($_POST['ug_distinction'])) 
              {
                     
                  $error_report['educational']="Please complete the table.";     
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
                          high_school_board varchar(50),
                        high_school_year_completed varchar(20),
                        high_school_marks varchar(20),
                        high_school_distinction varchar(50),
                        high_school_subjects varchar(50),
                        intermediate_board varchar(50),
                        intermediate_year_completed varchar(20),
                        intermediate_marks varchar(20),
                        intermediate_distinction varchar(50),
                        intermediate_subjects varchar(50),
                        under_graduate_board varchar(50),
                        under_graduate_year_completed varchar(20),
                        under_graduate_marks varchar(20),
                        under_graduate_distinction varchar(50),
                        under_graduate_subjects varchar(50),
                        post_graduate_board varchar(50),
                        post_graduate_year_completed varchar(20),
                        post_graduate_marks varchar(20),
                        post_graduate_distinction varchar(50),
                        post_graduate_subjects varchar(50),
                         phd_board varchar(50),
                        phd_year_completed varchar(20),
                        phd_title_of_thesis varchar(50),
                          any_other_quali_board varchar(50),
						  any_other_quali_year_completed varchar(100) ,
any_other_quali_marks varchar(100) ,
any_other_quali_distinction varchar(100) ,
any_other_quali_subjects varchar(100) ,
NET_JRF_year_qualified varchar(100) ,
NET_JRF_name_of_agency varchar(100) ,
NET_LS_year_qualified varchar(100) ,
    NET_LS_name_of_agency varchar(100) ,
present_present_designation varchar(100) ,
    professional_experience_position varchar(100) ,
    professional_experience_department varchar(100) ,
    professional_experience_institution varchar(100) ,
    professional_experience_from varchar(100) ,
    professional_experience_to varchar(100) ,
    professional_experience_nature_of_work varchar(100) ,
    professional_experience_contractual_or_permanent varchar(100) ,
    professional_experience_salary varchar(100) ,
    awards_type_of_award varchar(100) ,
    awards_name_of_award varchar(100) ,
    awards_awarding_institution varchar(100) ,
    awards_award_date varchar(100) ,
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

							  
								  include("../form_filling_part_rolling_adv/faculty_of_law/enter_form.php");


							     if($result_query)
								{		

							    include('../form_filling_part_rolling_adv/faculty_of_law/law_pdf.php');

							// code for pdf generation
										

																						
								}
							


								}
	}		   
}






?>
