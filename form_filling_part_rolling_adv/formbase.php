<?php

 include("../verification_part_rolling_adv/config.php");
$error_report=array();

//$$$$$$  geting values through server

$email=$_GET['stv'];
$departmentName=$_GET['type'];
$uniqueid=$_GET['id'];
$name=$_GET['nme'];
$country=$_GET['cntr'];


//address for the form

$address="../form_filling_part_rolling_adv/formbase.php?stv=$email&&type=$departmentName&&id=$uniqueid&&nme=$name&&cntr=$country";


///validation part


if($departmentName=='Faculty Of Science')
{
    
   include('../form_filling_part_rolling_adv/faculty_of_science/faculty_of_science_validation.php');
}
else if($departmentName=='Arts Faculty')
{
	
     
   include('../form_filling_part_rolling_adv/faculty_of_arts/faculty_of_arts_validation.php');
}

else if($departmentName=='Faculty Of Commerce')

			{
						
					
					include('../form_filling_part_rolling_adv/faculty_of_commerce/faculty_of_commerce_validation.php');
			}
			else if($departmentName=='Faculty Of Dental Science')

			{
				
					include('../form_filling_part_rolling_adv/faculty_of_dental/faculty_of_dental_validation.php');
			}
			else if($departmentName=='Faculty Of Education')

			{
						include('../form_filling_part_rolling_adv/faculty_of_education/faculty_of_education_validation.php');
			}
			else if($departmentName=='Faculty Of Law')

			{
					
					include('../form_filling_part_rolling_adv/faculty_of_law/faculty_of_law_validation.php');
			}
			else if($departmentName=='Faculty Of Management')

			{
					include('../form_filling_part_rolling_adv/faculty_of_management/faculty_of_management_validation.php');
			}
			else if($departmentName=='Faculty Of Medicine')

			{
						include('../form_filling_part_rolling_adv/faculty_of_medicine/faculty_of_medicine_validation.php');
					
			}
			else if($departmentName=='Faculty Of Performing Arts')

			{
					include('../form_filling_part_rolling_adv/faculty_of_performing_arts/faculty_of_performing_arts_validation.php');
					
					
			}
			else if($departmentName=='Faculty Of Social Sciences')

			{
					include('../form_filling_part_rolling_adv/faculty_of_social_science/faculty_of_social_science_validation.php');	
			}
 		
				else if($departmentName=='Faculty Of Visual Arts')

			{
						
					include('../form_filling_part_rolling_adv/faculty_of_visual_arts/faculty_of_visual_arts_validation.php');	
			}



function messageAlert($string)
  {
     global $error_report;
     if($error_report[$string])
       {
	  return ($error_report[$string]);
	}
		
  }

function h($string)

 {
  return htmlspecialchars($string,ENT_QUOTES);
 }


//end of generate button
?>
<html>  
<title>BANARAS HINDU UNIVERSITY,Varanasi Rolling faculty advertisement</title> 
<head>
<script type="text/javascript">

        function addRow(tableID) {

            var table = document.getElementById(tableID);
 
            var rowCount = table.rows[0].cells.length;
            var row = table.insertRow(2);
            var j;
 for (j=0;j<rowCount;j++)
      {
            var cell1 = row.insertCell(j);
            var element1 = document.createElement("input");
            element1.type = "text";
			if(tableID=="professional_experience")
				{
						
					element1.size='15';
				} 
           cell1.appendChild(element1);
        }

  }
        
</script>
<style type="text/css">
BODY { font-family:arial,verdana,helvetica,sans-serif; font-size: 10pt; background-color: #CBD1D5; color: #000; margin: 0; }
TD { font-family: verdana,arial,helvetica,sans-serif; font-size: 10pt; }
TH { font-family: verdana,arial,helvetica,sans-serif; font-weight: bold; font-size: 10pt; }
div{font-family: verdana,arial,helvetica,sans-serif;width:900pt; font-weight: bold; font-size: 10pt;margin: 0px auto 0px auto;padding: 0px 0px 0px 0px;}
A.confName:link { text-decoration: none; color: #000000; }	
A.confName:visited { text-decoration: none; color: #000000; }
A.confName:hover { color: #666666; }
A:link { text-decoration: none; color: #0000ff; }
A:visited { text-decoration: none; color: #0000ff; }
A:hover { color: #ff0000; }
em { font-style: italic; }
strong { font-weight: bold; }
.header{background-color: #fff;float:center;box-shadow:3px 3px 0px 0px; }
.toptitle{font-weight: bold;color: #751E1E;font-size: 15pt;text-align:center;float:right;padding-right:190pt;}
.general_information{background-color:#fff;box-shadow:2px 2px 0px 0px;width:1233px;padding-left:70px;}
#main_title{padding-left:280pt;text-decoration:underline;}
.main_title_info{}
#alerts{ color:red;}
.arrange_text {  float:right;}
.arrange_field { margin-right:350px;}
#image {border:solid 2px black;height:160px;width:150px;}
#signature_box {border:solid 2px black;height:100px;width:150px;}
#applicant_image{height:160px;width:150px;}
#applicant_signature{height:100px;width:150px;}
</style>
</head>
<body>
<form action="<?php echo $address;?>" enctype="multipart/form-data" method="POST">
	<?php include("../verification_part_rolling_adv/header.php"); echo $header_content;  ?>

	<?php
				
      			 $temp=$departmentName;
					$temp=str_replace(" ", "", $temp);
					$table_name=$temp.$uniqueid;
		if($departmentName=='Faculty Of Science')

			{
						
  			  			  mysql_select_db($db_name);
                   
						if(!mysql_query("select * from $table_name"))
						{
						
							     
							    include('../form_filling_part_rolling_adv/faculty_of_science/faculty_of_science.php');

							// code for pdf generatio
								
						}	
						else
						{

							 include('../form_filling_part_rolling_adv/faculty_of_science/science_pdf.php');
						}
					
			}
			else if($departmentName=='Arts Faculty')

			{
						 
  			  			  mysql_select_db($db_name);
                   
						if(!mysql_query("select * from $table_name"))
						{
						
							     
							    include('../form_filling_part_rolling_adv/faculty_of_arts/faculty_of_arts.php');

							// code for pdf generatio
								
						}	
						else
						{

							 include('../form_filling_part_rolling_adv/faculty_of_arts/arts_pdf.php');
						}
					
			}
			else if($departmentName=='Faculty Of Commerce')

			{
						 
  			  			  mysql_select_db($db_name);
                   
						if(!mysql_query("select * from $table_name"))
						{
						
							     
							    include('../form_filling_part_rolling_adv/faculty_of_commerce/faculty_of_commerce.php');

							// code for pdf generatio
								
						}	
						else
						{

							 include('../form_filling_part_rolling_adv/faculty_of_commerce/commerce_pdf.php');
						}
					
			}
			else if($departmentName=='Faculty Of Dental Science')

			{
						 
  			  			  mysql_select_db($db_name);
                   
						if(!mysql_query("select * from $table_name"))
						{
						
							     
							    include('../form_filling_part_rolling_adv/faculty_of_dental/faculty_of_dental.php');

							// code for pdf generatio
								
						}	
						else
						{

							 include('../form_filling_part_rolling_adv/faculty_of_dental/dental_pdf.php');
						}
					
			}
			else if($departmentName=='Faculty Of Education')

			{
						 
  			  			  mysql_select_db($db_name);
                   
						if(!mysql_query("select * from $table_name"))
						{
						
							     
							    include('../form_filling_part_rolling_adv/faculty_of_education/faculty_of_education.php');

							// code for pdf generatio
								
						}	
						else
						{

							 include('../form_filling_part_rolling_adv/faculty_of_education/education_pdf.php');
						}
					
			}
			else if($departmentName=='Faculty Of Law')

			{
						 
  			  			  mysql_select_db($db_name);
                   
						if(!mysql_query("select * from $table_name"))
						{
						
							     
							    include('../form_filling_part_rolling_adv/faculty_of_law/faculty_of_law.php');

							// code for pdf generatio
								
						}	
						else
						{

							 include('../form_filling_part_rolling_adv/faculty_of_law/law_pdf.php');
						}
					
			}
			else if($departmentName=='Faculty Of Management')

			{
						 
  			  			  mysql_select_db($db_name);
                   
						if(!mysql_query("select * from $table_name"))
						{
						
							     
							    include('../form_filling_part_rolling_adv/faculty_of_management/faculty_of_management.php');

							// code for pdf generatio
								
						}	
						else
						{

							 include('../form_filling_part_rolling_adv/faculty_of_management/management_pdf.php');
						}
					
			}
			else if($departmentName=='Faculty Of Medicine')

			{
						 
  			  			  mysql_select_db($db_name);
                   
						if(!mysql_query("select * from $table_name"))
						{
						
							     
							    include('../form_filling_part_rolling_adv/faculty_of_medicine/faculty_of_medicine.php');

							// code for pdf generatio
								
						}	
						else
						{

							 include('../form_filling_part_rolling_adv/faculty_of_medicine/medicine_pdf.php');
						}
					
			}
			else if($departmentName=='Faculty Of Performing Arts')

			{
						 
  			  			  mysql_select_db($db_name);
                   
						if(!mysql_query("select * from $table_name"))
						{
						
							     
							    include('../form_filling_part_rolling_adv/faculty_of_performing_arts/faculty_of_performing_arts.php');

							// code for pdf generatio
								
						}	
						else
						{

							 include('../form_filling_part_rolling_adv/faculty_of_performing_arts/performing_arts_pdf.php');
						}
					
			}
			else if($departmentName=='Faculty Of Social Sciences')

			{
						 
  			  			  mysql_select_db($db_name);
                   
						if(!mysql_query("select * from $table_name"))
						{
						
							     
							    include('../form_filling_part_rolling_adv/faculty_of_social_science/faculty_of_social_science.php');

							// code for pdf generatioFaculty Of Visual Arts
								
						}	
						else
						{

							 include('../form_filling_part_rolling_adv/faculty_of_social_science/social_science_pdf.php');
						}
					
			}
 		
				else if($departmentName=='Faculty Of Visual Arts')

			{
						 
  			  			  mysql_select_db($db_name);
                   
						if(!mysql_query("select * from $table_name"))
						{
						
							     
							    include('../form_filling_part_rolling_adv/faculty_of_visual_arts/faculty_of_visual_arts.php');

							// code for pdf generatioFaculty Of Visual Arts
								
						}	
						else
						{

							 include('../form_filling_part_rolling_adv/faculty_of_visual_arts/visual_arts_pdf.php');
						}
					
			}
 		

 echo $form_content;
/*if($_POST['generatepdf'])
{
   include_once('../dompdf/dompdf_config.inc.php');
    
	 $html="
<html>
<title>FACULTY REGISTRATION</title>
<style type='text/css'>
BODY { font-family:arial,verdana,helvetica,sans-serif; font-size: 10pt; background-color: #CBD1D5; color: #000; margin: 0; }
TD { font-family: verdana,arial,helvetica,sans-serif; font-size: 10pt; }
TH { font-family: verdana,arial,helvetica,sans-serif; font-weight: bold; font-size: 10pt; }
div{font-family: verdana,arial,helvetica,sans-serif;width:900pt; font-weight: bold; font-size: 10pt;margin: 0px auto 0px auto;padding: 0px 0px 0px 0px;}
A.confName:link { text-decoration: none; color: #000000; }	
A.confName:visited { text-decoration: none; color: #000000; }
A.confName:hover { color: #666666; }
A:link { text-decoration: none; color: #0000ff; }
A:visited { text-decoration: none; color: #0000ff; }
A:hover { color: #ff0000; }
em { font-style: italic; }
strong { font-weight: bold; }
.header{background-color: #fff;float:center;box-shadow:3px 3px 0px 0px; }
.toptitle{font-weight: bold;color: #751E1E;font-size: 15pt;text-align:center;float:right;padding-right:190pt;}
.general_information{background-color:#fff;box-shadow:2px 2px 0px 0px;width:1233px;padding-left:70px;}
#main_title{padding-left:280pt;text-decoration:underline;}
.main_title_info{}
#alerts{ color:red;}
.arrange_text {  float:right;}
.arrange_field { margin-right:350px;}
#image {border:solid 2px black;height:160px;width:150px;}
#signature_box {border:solid 2px black;height:100px;width:150px;}
</style>
<body>
".$printti."
</body>
</html>";
	
	
	
   $dompdf=new DOMPDF();
   $dompdf->load_html($html);
   $dompdf->render();
   $dompdf->stream('table_name.pdf');
   
}*/
 
?>
<?php include("../footer.php"); echo $footer_content;  ?>
</form>	
</body>
</html>
