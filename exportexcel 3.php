<?php
include('includes/imp/conn.php');
$id = $_GET['id'];
$vendor_id = $_GET['vendorid'];
$redirect = "Disqualified";
$comnt1 = "-";
$comnt2 = "-";
$sql = "SELECT id,vendor_resp_id, ip_address,start_time FROM surveys WHERE project_id = $id AND vendor_id =$vendor_id AND status='2'";
$res= mysqli_query($conn,$sql);
$html='<table><tr><td>ID</td><td>Status</td><td>previousStatus</td><td>Reason</td><td>RespId</td><td>Time</td><td>IP</td></tr>';	
while($row=mysqli_fetch_assoc($res))
{
	$html.='<tr><td>'.$row['id'].'</td><td>'.$redirect.'</td><td>'.$comnt1.'</td><td>'.$comnt2.'</td><td>'.$row['vendor_resp_id'].'</td><td>'.$row['start_time'].'</td><td>'.$row['ip_address'].'</td></tr>';
}
$html.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');
echo $html;
?>                     