<html>
 <body>
  <?php
    include('includes/imp/conn.php');
    $pid = $_GET['pid']; // vendor provided respondan id
    $gid = $_GET['gid']; // project id
    $vid = $_GET['vid']; // vendor id
 
 // Variable check
 if(true){
  $stop = false;
  if(!isset($_GET['gid']) || $_GET['gid'] == ''){
   echo 'gid variable not set <br>';
   $stop = true;
  }
  if(!isset($_GET['vid']) || $_GET['vid'] == ''){
   echo 'vid variable not set <br>';
   $stop = true;
  }
  if(!isset($_GET['pid']) || $_GET['pid'] == ''){
   echo 'pid variable not set <br>';
   $stop = true;
  }
 }
 // get ip address
 if(true){
  // Function to get the client IP address
  if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
   $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }
  //whether ip is from proxy
  elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
   $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
   //whether ip is from remote address
  else
  {
   $ip_address = $_SERVER['REMOTE_ADDR'];
  }
  $ip = $ip_address;
 }
 // get data and time
 if(true){
  if(function_exists('date_default_timezone_set')) {
   date_default_timezone_set("Asia/Kolkata");
  }
  $start_time = date("d-m-Y H:i:s a");
  // echo $date;
 }

 if(true){
  if(!$stop){
                           $sql2 = "SELECT status FROM projects WHERE id = '$gid' ";
                           $result = mysqli_query($conn, $sql2);
                           foreach($result as $row){
                              $status2 = $row['status'];
                           }
                           if($status2 == "Hold"){
                             echo "survey is in hold";
                             $stop = true;
                           }
            }
  // echo $survey . '<br>';                    
 }

 // get status
 if(true){
  $status = '0';
 }

 // get survey link
 if(true){
  if(!$stop){
   $sql = "SELECT survey_link FROM surveys INNER JOIN projects ON surveys.project_id = projects.id WHERE surveys.project_id = '$gid' LIMIT 1";
   if(mysqli_query($conn, $sql)){
    $result = mysqli_fetch_array(mysqli_query($conn, $sql));
    $survey = $result['survey_link'];
    echo $survey;
   }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   }
  }
  // echo $survey . '<br>';                    
 }
 // set cookie
 if(true){
  setcookie("pid", $pid, time()+60*60*24*30, "/");
  setcookie("vid", $vid, time()+60*60*24*30, "/");
  setcookie("ip", $ip, time()+60*60*24*30, "/");
  setcookie("gid", $gid, time()+60*60*24*30, "/");
 }
 // sql query
 if(true){
  if(!$stop){
   $sql = "INSERT INTO surveys(project_id, vendor_id, status, start_time, ip_address, vendor_resp_id) VALUES ('$gid', '$vid', '$status', '$start_time', '$ip', '$pid')";
   if(mysqli_query($conn,$sql)){
    $last_id = mysqli_insert_id($conn);
    $sql = "update surveys set client_resp_id='$last_id' where id='$last_id'";
    if(mysqli_query($conn,$sql)){
     // echo "data entered";
    }
    $survey = str_replace('{{id}}', $last_id, $survey);
    echo "<script>window.location.href='$survey';</script>";
   }else{
    echo "Error: " . $sql . "<br>" . $conn->error;
   }
  }
 }
$conn->close();  

?>
</body>
</html>
