<?php
include 'connect.php';

if (isset($_POST['refer']) ) {
  if ($_POST['refer'] == 'get-info') {
    $data = get_all_req($mysql);
    //sleep(3);
    echo json_encode($data);
  }elseif ($_POST['refer'] == 'filter-res') {
    if (isset($_POST['sec'])) {
      $id = $_POST['id'];
      $s = $_POST['sec'];
      $data = serch_results($mysql,$s,$id);
      echo json_encode($data);
    }else{
      echo "not refered";
    }    
  }
}elseif (isset($_POST['se']) || isset($_POST['id']) || isset($_POST['url'])) {
  if (empty($_POST['se']) || empty($_POST['id']) || empty($_POST['url'])) {
    echo "Please Enter URL Or Choose Correct Fields";
  }else{
    $usr_section =$_POST['se'];
    $usr_course_id =$_POST['id'];
    $usr_y_url =$_POST['url'];
    $m_query = "insert into data(`Section`,`Course id`,`Youtube Video Url`) values ($usr_section,$usr_course_id,'$usr_y_url')";
    mysqli_query($mysql, $m_query);
    $result = mysqli_affected_rows($mysql);
    if ($result == 1) {
      $_SESSION['usrsection'] = $usr_section;
      $_SESSION['usrid'] = $usr_course_id;
      header('location: ../results.php');
      //echo "All Done"." Your Data Has Saved";
      //echo '1-'.$_SESSION['usrsection'].'| 2-'.$_SESSION['usrid'];
    }
    //header('location: pro2/index.php');
  }
}else {
  echo "Not Set";
}


 ?>
