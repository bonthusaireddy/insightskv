<?php
  require ('./includes/imp/conn.php');     
  $id = $_GET['id'];
  $link_type = $_GET['link_type'];
  $results = mysqli_query($conn,"SELECT * FROM vendor WHERE  id='$id'");   
  if( mysqli_num_rows($results) > 0 )
  {
   $row = mysqli_fetch_array( $results );
   if($link_type==1){
       echo $row['completion_link'];
    }
   if($link_type==2){
       echo $row['disqualify_link'];
    }
   if($link_type==3){
       echo $row['quotafull_link'];
    }
  }
?>