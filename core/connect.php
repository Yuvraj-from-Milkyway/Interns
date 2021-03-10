<?php
$connection_error = 'Sorry, we are experiencing Downtime .';
$mysql = mysqli_connect('localhost','root') or die($connection_error);
mysqli_select_db($mysql,'intern_iit_m') or die($connection_error);
session_start();


function get_all_req($mysql)
{
  $i = 0;
  if (isset($_SESSION['usrsection'], $_SESSION['usrid'])) {
    $us = $_SESSION['usrsection'];
    $ui = $_SESSION['usrid'];
    $db = "select * from data Where Section = '$us' and `Course id` = '$ui'";
    unset($_SESSION['usrsection']);
    unset($_SESSION['usrid']);
  }else {
    $db = "select * from data";
  }  
  $query = mysqli_query($mysql,$db);
  while ( $row = mysqli_fetch_assoc($query)){
      $dt[] = $row;
      $i++;
  }
  return $dt;
}

function serch_results($mysql,$sec,$cid)
{
  $i = 0;
  $db = "select * from data where Section = '$sec' or `Course id` = '$cid'";
  /*if (empty($sec) && $sec == '') {

    } elseif (!empty($_GET['sort']) && $_GET['sort'] == 'PriceDesc') {
        $query = "select * FROM data where `Course id` = '$$cid'";
  }*/
  $query = mysqli_query($mysql,$db);
  while ( $row = mysqli_fetch_assoc($query)){
      $res[] = $row;
      $i++;
  }
  return $res;
}

function isset_sess()
{
  if (isset($_SESSION['usrsection'], $_SESSION['usrid'])) {
    return true;
  }else {
    return false;
  }
}

/*
$i = 0;
$us = $_SESSION['usrsection'];
$ui = $_SESSION['usrid'];
$db = "select * from data Where Section = '$us' and `Course id` = '$ui'";
$query = mysqli_query($mysql,$db);
while ( $row = mysqli_fetch_assoc($query)){
    $dt[] = $row;
    $i++;
}
unset($_SESSION['usrsection']);
unset($_SESSION['usrid']);
return $dt;
*/
