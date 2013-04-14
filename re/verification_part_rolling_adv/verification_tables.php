<?php
if(mysql_select_db($db_name))
{
  //echo 'database already exists';
}
else
{
  // echo 'database need to be created';
   $sql="create database $db_name";
   $result=mysql_query($sql);  
}
mysql_select_db($db_name);

/** 
  table for storing registration information
  
 **/

if(!mysql_query('select * from registrationInformation'))
{
mysql_query("CREATE TABLE registrationInformation(
   confirm_code varchar(50),
   name varchar(50),
   email varchar(50),
   password varchar(100),
   country varchar(100),PRIMARY KEY (email))");
   
  //echo 'table created';
}


/**
   main registration information table

**/

if(!mysql_query('select * from finalInformation'))
{
mysql_query("CREATE TABLE finalInformation(
   unique_id varchar(50),
   name varchar(50),
   email varchar(50),
   password varchar(100),
   country varchar(100),PRIMARY KEY (email))");
  //echo 'table created';
}

?>
