<?php
//Database connection
$connection_error = 'Sorry, we are experiencing Downtime .';
$mysql = mysqli_connect('localhost','root') or die($connection_error);
mysqli_select_db($mysql,'intern_iit_m') or die($connection_error);
session_start();

//This Function will return data from database
function get_all_req($mysql)
{
  $i = 0;
  //Check If page is redirected from index.php page 
  if (isset($_SESSION['usrsection'], $_SESSION['usrid'])) {
    $us = $_SESSION['usrsection'];
    $ui = $_SESSION['usrid'];
    $db = "select * from data Where Section = '$us' and `Course id` = '$ui'";
    unset($_SESSION['usrsection']);
    unset($_SESSION['usrid']);
  }else {
    //If not redirected or Directly accessed/refreshed then show all data from database
    $db = "select * from data";
  }  
  $query = mysqli_query($mysql,$db);
  while ( $row = mysqli_fetch_assoc($query)){
      $dt[] = $row;
      $i++;
  }
  return $dt;
}

//Function that will return filterd results
function serch_results($mysql,$sec,$cid)
{
  $i = 0;
  $db = "select * from data where Section = '$sec' or `Course id` = '$cid'";  
  $query = mysqli_query($mysql,$db);
  while ( $row = mysqli_fetch_assoc($query)){
      $res[] = $row;
      $i++;
  }
  return $res;
}
