<html>
<body>
 <?php 
  include('includes/imp/conn.php');

$status = $_GET['st'];


$isCookieSet = true;
// check variables
if(true){
 if(!isset($_COOKIE['pid']) || $_COOKIE['pid'] == ''){
  echo 'Pid variable not set <br>';
  $isCookieSet = false;
 }
 if(!isset($_COOKIE['vid']) || $_COOKIE['vid'] == ''){
  echo 'Vid variable not set <br>';
  $isCookieSet = false;
 }
 if(!isset($_COOKIE['gid']) || $_COOKIE['gid'] == ''){
  echo 'Gid variable not set <br>';
  $isCookieSet = false;
 }
 if(!isset($_GET['st']) || $_GET['st'] == ''){
  echo 'Status variable not set <br>';
  $isCookieSet = false;
 }
 if($isCookieSet){
 if(!($_GET['st']== 1 || $_GET['st'] == 2 || $_GET['st'] == 3)){
  echo 'Status variable is not valid <br>';
  $isCookieSet = false;
 }}
}
// get end time
if(true){
 if(function_exists('date_default_timezone_set')) {
   date_default_timezone_set("Asia/Kolkata");
  }
  $end_time = date("d-m-Y H:i:s a");
}
// get variables from cookie
if($isCookieSet){
  $pid = $_COOKIE['pid'];
  $vid = $_COOKIE['vid'];
  $gid = $_COOKIE['gid'];
  $st = $_GET['st'];
}

// sql query
if($isCookieSet){
 $sql = "update `surveys` set `status` = '$st', `end_time` = '$end_time' where project_id=$gid and vendor_id='$vid' and vendor_resp_id='$pid' order by id desc limit 1";
 // $sql = "select * from surveys where project_id=$gid && vendor_id='$vid' && vendor_resp_id='$pid'";
 $result = mysqli_query($conn,$sql);
 if($result){
  echo '<br>Survey status updated successfully';
  $success = true;
 }
 else{
  echo 'Error: ' . mysqli_error($conn);
 }
}
// sql query
if($isCookieSet && $success){
 $sql = "select * from project_vendors where project_id=$gid and vendor_id=$vid limit 1";
 $result = mysqli_query($conn,$sql);
 if($result && $st == 1 ){
  $row = mysqli_fetch_array($result);
  $link = $row['completion_link'];
  $survey = str_replace('{{panellist_id}}',$pid,$link);
  echo '<br>'.$survey;
  echo "<script>window.location.href='$survey';</script>";
 }
 else if($result && $st == 2 ){
  $row = mysqli_fetch_array($result);
  $link = $row['disqualify_link'];
  $survey = str_replace('{{panellist_id}}',$pid,$link); 
  echo '<br>'.$survey;
  echo "<script>window.location.href='$survey';</script>";
 }
 else if($result && $st == 3 ){
  $row = mysqli_fetch_array($result);
  $link = $row['quotafull_link']; 
  $survey = str_replace('{{panellist_id}}',$pid,$link);
  echo '<br>'.$survey;
  echo "<script>window.location.href='$survey';</script>";
 }
 else{
  echo 'Error: ' . mysqli_error($conn);
 }
}
else{
}

?>
</body>

</html>