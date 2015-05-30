<?php
/**
* This function is needed to connect to SQL database.
*/
function connect_db(){
  # If database connection is open, close it first
  if (isset($db)) mysql_close($db);
  # Open a new database connection
  
//local  

  $dhost='localhost';
  $dbase='my_web_site';
  $duser='ryandang';
  $dpass='Programing12';

//live  
/*
  $dhost='ryandangwebsite.db.11820890.hostedresource.com';
  $dbase='ryandangwebsite';
  $duser='ryandangwebsite';
  $dpass='Programing12@';
*/
  $db=mysql_connect($dhost,$duser,$dpass);
  mysql_select_db($dbase);
}
