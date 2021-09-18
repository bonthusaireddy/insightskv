<?php
include('includes/imp/islogin.php');
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/imp/conn.php'); 
?>

<?php

$mysqli = new mysqli($servername, $username, $password, $dbname);
$id = $_GET['id'];

$sql = "SELECT * FROM projects WHERE id = '$id' ";
$result = mysqli_query($conn, $sql);

$sql2 = "SELECT vendor.id,vendor.vendor_name,survey_link FROM vendor INNER JOIN project_vendors ON vendor.id = project_vendors.vendor_id WHERE project_vendors.project_id = '$id'";
$result1 = mysqli_query($conn, $sql2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/projectview.css">
    <link rel="stylesheet" href="sb-admin-2.min.css">
    <link rel="stylesheet" href="sb-admin-2.css">
 <title>...</title>
</head>
<body onload="startTime()">

<?php foreach($result as $row){?>

<div id="cnt_outer">
    <div class='rightcolumn'>
              <div>
                 <div style="width: 61%; float: left;border: groove;">
                    <form id="newprojectform" enableClientValidation="1" action="database.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>"/>
                        
                     <div class="container">
    <h2>Personal Information</h2>
    <br>
	<div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Project Name</span>
    			        <input class="form-control" name="project_name" type=" text"  value="<?php echo $row["project_name"]; ?>"/>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Friendly name</span>
    			        <input class="form-control" name="project_friendly_name" type=" text"  value="<?php echo $row["project_friendly_name"]; ?>"/>
                        <!-- <select name="project_friendly_name" id="project_friendly_name" class="form-control">
                         <option value="<?php echo $row["project_friendly_name"]; ?>" name="project_friendly_name"><?php echo $row["project_friendly_name"]; ?></option>
                        </select> -->
    		        </div>
                </div>
	       </div>
		</div>
	</div>
    <br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Parent Project</span>
                        <select name="parent_project" class="form-control">
                              <option value="<?php echo $row["parent_project"]; ?>" name="parent_project"><?php echo $row["parent_project"]; ?> </option>
                              </select>
    		        </div>  
                </div>
                <!-- <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Parent Name</span>
    			        <input class="form-control" name="client_name" type=" text"  value="example.com"/>
    		        </div>
                </div> -->
	       </div>
		</div>
	</div>
</div>

<br><hr class="solid"><br>
<div class="container">
    <h2>Contacts & Region</h2>
    <br>
	<div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Client Name</span>
    			        <select name="client_name" class="form-control" >
                             <option value="#" name="client_name"><?php echo $row["client_name"]; ?></option>
                         </select>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			         <span class="input-group-text">Client Contact</span>
                <input type="text" name="client_contact" class="form-control" value="<?php echo $row["client_contact"]; ?>">
                             <!-- <select name="client_contact" class="form-control">
                                     <option value="#" name="client_contact"><?php echo $row["client_contact"]; ?></option>
                            </select> -->
    		        </div>
                </div>
	       </div>
		</div>
	</div>
    <br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Project Manager</span>
               <input type="text" name="project_manager" value="<?php echo $row["project_manager"]; ?>" class="form-control">
                             <!-- <select name="project_manager" class="form-control">
                                 <option value="<?php echo $row["project_manager"]; ?>" name="parent_project"><?php echo $row["project_manager"]; ?> </option>
                             </select> -->
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			         <span class="input-group-text">Sales Person</span>
                <input type="text" name="sales_person" value='<?php echo $row["sales_person"]; ?>' class="form-control">
                                <!-- <select name="sales_person"  class="form-control">
                                     <option value="#" id="sales_person" name="sales_person"><?php echo $row["sales_person"]; ?> </option>
                                </select> -->
    		        </div>
                </div>
                <br><br><br>
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Country</span>
               <input type="text" name='country' value="<?php echo $row['country']?>" >
                                <!-- <select name="country" class="form-control">
                                     <option value="<?php echo $row["country"]; ?>" name="country"><?php echo $row["country"]; ?> </option>
                                 </select> -->
    		        </div>  
                </div>
	       </div>
		</div>
	</div>
</div>
<br><hr class="solid"><br>
<div class="container">
    <h2>Others</h2>
    <br>
	<div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Req.Completes</span>
    			        <input name="req_complete" type="text" class="form-control" value="<?php echo $row["req_complete"]; ?>"/>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">CPC/CPI $ </span>
    			        <input name="cpc" type="text" class="form-control" value="<?php echo $row["cpc"]; ?>"/>
    		        </div>
                </div>
	       </div>
		</div>
	</div>
    <br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">LOI (Minutes.)</span>
                        <input name="loi" type="text" class="form-control" value="<?php echo $row["loi"]; ?>"/>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">IR</span>
    			        <input type="text" name="ir" class="form-control" value="<?php echo $row["ir"]; ?>"/>
    		        </div>
                </div>
	       </div>
		</div>
	</div>
    <br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text"># of points to award</span>
                        <input  name="points_to_award" type=" text" class="form-control" value="<?php echo $row["points_to_award"]; ?>"/>
    		        </div>  
                </div>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Notes</span>
    			        <input type="text" name='note' class="form-control" value="<?php echo $row["note"]; ?>"/>
    		        </div>
                </div>
                <br><br><br>
                <div class="col-sm-6">
                    <div class="input-group">
    			     <span class="input-group-text">Max. Completes </span>
            <input type="text" name="max_complete" value="<?php echo $row["max_complete"]; ?>" class="form-control">
                         <!-- <select name="max_complete" class="form-control">
                            <option value="parent_project" name="max_complete"><?php echo $row["max_complete"]; ?></option>
                         </select> -->
    		        </div>
                </div>
	       </div>
		</div>
	</div>
    <br><br>
    <div class="row">
	    <div class="col-sm-12">
             <div class="input-group">
                <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Survey Link =</span> 
                        <textarea name="survey_link" id="survey_link" cols="60" rows="5"  value="<?php echo $row["survey_link"]; ?>"><?php echo $row["survey_link"]; ?></textarea>
    		        </div>  
                </div>
	       </div>
           <br><br><br>
           <div class="col-sm-6">
                    <div class="input-group">
    			        <span class="input-group-text">Status </span>
                   <select name="status" class="form-control">
                     <option value="<?php echo $row["status"]; ?>" name="status"><?php echo $row["status"]; ?> </option>
                     <option value="Testing" name="status">Testing</option>
                     <option value="Running" name="status">Running</option>
                     <option value="Hold" name="status">Hold</option>
                     <option value="Complete" name="status">Complete</option>
                     <option value="Closed" name="status">Closed</option>
                             </select>
    		        </div>
                </div>
		</div>
	</div>
</div>
<br><hr class="solid"><br>
                         
                        <p style="padding-top: 1em;text-align: center;">
                            <!--                 attr name='submit' removed due to submit event failuer -->
                            <input name = 'editprojectview' type='submit' value='Save' id="save" />
                            <input type='submit' value='Clone' id='clone' />
                            <a href="#" class="limebutton">Cancel</a>
                            <input type='hidden' name='action' value='editproject' />
                        </p>
                    </form>
                </div>



              <div style="margin-left: 1%;width: 38%;float: right;border:groove">
                 <div>
                  <table id="listprojectvendor" style="width:100%;">
                   <thead>
                    <tr>
                     <th>Edit</th>
                     <!-- <th>Delete</th>-->
                     <th>ID</th>
                     <th>Panel</th>
                     <th style="display: none;">Status</th>
                     <th>Redirects</th>
                     <th>IR/CPC</th>
                     <th>Link</th>
                    </tr>
                   </thead>
                  <tbody>

                <!--Vendor Row 1-->
                <?php foreach($result1 as $row2){ ?>

                 <tr id="vendor_row_1" style=" border: groove;">
                  <td style="padding:3px;">
                   <div class="form">
                    <form id="form_120" action="" method="post">
                     <span class="HelpToolTip SPAN_1">
                      <a href="addvendoredit.php?id=<?php echo $id;?>&vendor_id=<?php echo $row2['id']?>">Edit</a>
                     </span>
                    </form>
                   </div>
                  </td>
                  <td><?php echo $row2['id']?></td>
                  <td> <span id="company_name_1" class="company_name_info"><?php echo $row2['vendor_name']?></span> </td>
                  <!-- use display none to hide -->
                  <td style="display:none;" id="status_name_1">testing</td>
                  <td>


                    <!--redirect Pop-up-->
                     <div id="redirected<?php echo $row2['id']?>" class="overlay">
                      <div class="popup5">
                       <h2>Company Name & Vendor ID <a class="close" href="#">&times;</a></h2>
                        <div class="content">
                         <div class="container">
                          <br>
                          <div class="download">
                           <button class="download">Download</button>
                          </div>
                          <br>
                          <table class="table table-bordered">
                            <thead>
                            <tr class="th1">
                            <th>
                             <span class="show">Show</span>
                             <select name="country" class="form-control">
                              <option value="50" name="show_val">50</option>
                              <option value="100" name="country">100</option>
                              <option value="500" name="country">500</option>
                              <option value="10000" name="country">1000</option>
                              </select>
                            </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><span class="show">Search</span> <input type="text"></th>
                            <th><input class="pop_up_btn" value="Search" type="button"></th>
                            </tr>
                            </thead>

                            <thead>
                             <tr class="th">
                              <th> ID</th>
                              <th>Status</th>
                              <th>previous Status</th>
                              <th>Reason</th>
                              <th>Resp Id</th>
                              <th>Time</th>
                              <th>IP</th>
                              </tr>
                            </thead>
                           
                           <?php 
                            $vendor_id = $row2['id'];
                            $sql = "SELECT id,vendor_resp_id, ip_address,start_time FROM surveys WHERE project_id = $id AND vendor_id =$vendor_id AND status='0'";
                            $result3 = $conn->query($sql);
                            $count_redirects = mysqli_num_rows($result3);
                            foreach($result3 as $row3){?>
                            <tr class="tr">
                             <td><?php echo $row3['id']?></td>
                             <td>Redirected</td>
                             <td>-</td>
                             <td>-</td>
                             <td><?php echo $row3['vendor_resp_id']; ?></td>
                             <td><?php echo $row3['start_time']?></td>
                             <td><?php echo $row3['ip_address']; ?></td>
                            </tr>
                            
                            <?php } ?>

                          </table> 
                         </div>
                        </div>
                       </div>
                      </div>
                     <!--redirect Pop-up-->

                  <div id='your-form-block-id'>
                   <form action="#" method="post">
                    <a class="class-link" href="#redirected<?php echo $row2['id']?>">Redirects <?php echo $count_redirects;?></a>
                   </form>
                  </div>
                   <?php 
                   // add the code here;
                   ?>
                    

                     <!--Completed Pop-up-->
                      <div id="completed<?php echo $row2['id']?>" class="overlay">
                       <div class="popup5">
                        <h2>Company Name & Vendor ID <a class="close" href="#">&times;</a></h2>
                         <div class="content">
                          <div class="container">
                           <br>
                           <div class="download">
                            <button class="download">Download</button>
                           </div>
                           <br>
                           <table class="table table-bordered">
                           <thead>
                           <tr class="th1">
                            <th>
                             <span class="show">Show</span>
                             <select name="country" class="form-control">
                              <option value="50" name="show_val">50</option>
                              <option value="100" name="country">100</option>
                              <option value="500" name="country">500</option>
                              <option value="10000" name="country">1000</option>
                             </select>
                            </th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th><span class="show">Search</span> <input type="text"></th>
                            <th><input class="pop_up_btn" value="Search" type="button"></th>
                            </tr>
                           </thead>
                           <thead>
                            <tr class="th">
                             <th> ID</th>
                             <th>Status</th>
                             <th>previous Status</th>
                             <th>Reason</th>
                             <th>Resp Id</th>
                             <th>Time</th>
                             <th>IP</th>
                            </tr>
                           </thead>

                          <?php 
                            $vendor_id = $row2['id'];
                            $sql = "SELECT id,vendor_resp_id, ip_address,start_time FROM surveys WHERE project_id = $id AND vendor_id =$vendor_id AND status='1'";
                            $result3 = $conn->query($sql);
                            $count_completed = mysqli_num_rows($result3);
                            foreach($result3 as $row3){?>
                           <tr class="tr">
                            <td><?php echo $row3['id']?></td>
                            <td>complete</td>
                            <td>-</td>
                            <td>-</td>
                            <td><?php echo $row3['vendor_resp_id']; ?></td>
                             <td><?php echo $row3['start_time']?></td>
                             <td><?php echo $row3['ip_address']; ?></td>
                           </tr>
                           <?php } ?>
                           
                          </table> 
                         </div>
                        </div>
                       </div>
                      </div>
                     <!--End Pop-Up-->

                     <div id='your-form-block-id' class='completed_link'>
                      <form action="#" method="post">
                       <a class="class-link" href="#completed<?php echo $row2['id']?>">Completed <?php echo $count_completed; ?> </a><br>
                        <!-- <a class="class-link" href="#"> 0/160</a> -->
                      </form>
                     </div>

                     
                     <!--Disqulify Pop-up-->
                      <div id="disqualified<?php echo $row2['id'] ?>" class="overlay">
                       <div class="popup5">
                        <h2>Company Name & Vendor ID <a class="close" href="#">&times;</a></h2>
                         <div class="content">
                          <div class="container">
                           <br>
                            <div class="download">
                             <button class="download">Download</button>
                            </div>
                            <br>
                            <table class="table table-bordered">
                             <thead>
                             <tr class="th1">
                              <th>
                               <span class="show">Show</span>
                               <select name="country" class="form-control">
                                <option value="50" name="show_val">50</option>
                                <option value="100" name="country">100</option>
                                <option value="500" name="country">500</option>
                                <option value="10000" name="country">1000</option>
                               </select></th>
                               <th></th>
                               <th></th>
                               <th></th>
                               <th></th>
                               <th>
                                <span class="show">Search</span> 
                                <input type="text">
                               </th>
                               <th><input class="pop_up_btn" value="Search" type="button"></th>
                              </tr>
                              </thead>
                              <thead>
                               <tr class="th">
                                <th> ID</th>
                                <th>Status</th>
                                <th>previous Status</th>
                                <th>Reason</th>
                                <th>Resp Id</th>
                                <th>Time</th>
                                <th>IP</th>
                               </tr>
                              </thead>

                              <tbody>
                              <?php 
                            $vendor_id = $row2['id'];
                            $sql = "SELECT id,vendor_resp_id, ip_address,start_time FROM surveys WHERE project_id = $id AND vendor_id =$vendor_id AND status='2'";
                            $result3 = $conn->query($sql);
                            $count_disqualified = mysqli_num_rows($result3);
                            foreach($result3 as $row3){?>
                               <tr class="tr">
                                <td><?php echo $row3['id']?></td>
                                <td>Disqualified</td>
                                <td>-</td>
                                <td>-</td>
                                <td><?php echo $row3['vendor_resp_id']; ?></td>
                                <td><?php echo $row3['start_time']?></td>
                                <td><?php echo $row3['ip_address']; ?></td>
                               </tr>
                               <?php }?>
                              </tbody>
                             </table> 
                            </div>
                           </div>
                          </div>
                      </div>
                     <!--End Pop-Up-->

                     <div id='your-form-block-id'>
                      <form action="#" method="post">
                       <a class="class-link" href="#disqualified<?php echo $row2['id']?>">Disqualified <?php echo $count_disqualified; ?></a>
                      </form>
                     </div>

                     <!--Quota-Full Pop-up-->
                      <div id="quotafull<?php echo $row2['id']?>" class="overlay">
                       <div class="popup5">
                        <h2>Company Name & Vendor ID <a class="close" href="#">&times;</a></h2>
                         <div class="content">
                          <div class="container">
                          <br>
                           <div class="download">
                            <button class="download">Download</button>
                           </div>
                           <br>
                           <table class="table table-bordered">
                           <thead>
                           <tr class="th1">
                           <th>
                            <span class="show">Show</span>
                            <select name="country" class="form-control">
                             <option value="50" name="show_val">50</option>
                             <option value="100" name="country">100</option>
                             <option value="500" name="country">500</option>
                             <option value="10000" name="country">1000</option>
                            </select>
                           </th>
                           <th></th>
                           <th></th>
                           <th></th>
                           <th></th>
                           <th>
                            <span class="show">Search</span>
                            <input type="text">
                           </th>
                           <th>
                            <input class="pop_up_btn" value="Search" type="button">
                           </th>
                          </tr>
                         </thead>
                         <thead>
                          <tr class="th">
                           <th> ID</th>
                           <th>Status</th>
                           <th>previous Status</th>
                           <th>Reason</th>
                           <th>Resp Id</th>
                           <th>Time</th>
                           <th>IP</th>
                           </tr>
                          </thead>
                          <tbody>
                           <?php 
                            $vendor_id = $row2['id'];
                            $sql = "SELECT id,vendor_resp_id, ip_address,start_time FROM surveys WHERE project_id = $id AND vendor_id =$vendor_id AND status='3'";
                            $result3 = $conn->query($sql);
                            $count_quotafull = mysqli_num_rows($result3);
                            foreach($result3 as $row3){?>
                           <tr class="tr">
                            <td><?php echo $row3['id']?></td>
                            <td>complete</td>
                            <td>Hold</td>
                            <td>No</td>
                            <td><?php echo $row3['vendor_resp_id']; ?></td>
                            <td><?php echo $row3['start_time']?></td>
                            <td><?php echo $row3['ip_address']; ?></td>
                            </tr>
                            <?php }?>
                           </tbody>
                          </table> 
                         </div>
                        </div>
                       </div>
                      </div>
                     <!--End Pop-Up-->

                     <div id='your-form-block-id'>
                      <form  action="#" method="post">
                       <a class="class-link" href="#quotafull<?php echo $row2['id']?>">QF <?php echo $count_quotafull; ?></a> 
                       <!-- <a class="class-link" href="#">0</a> -->
                      </form>
                     </div>
                     
                     

                     </td>
                     <td style=color:#1278E0; id="vendor_cpc_1"> IR : 0.00 % <br />N.A </td> 

                     <td>
                     <div class='end_point_link' id='#'>
                      <form action="#" method="post">
                       <div class="box">
                        <a class="button" href="#popup<?php echo $row2['id']?>">link</a>
                       </div>
                       <a class="class-link" href="#"> <input type='image' src='#' alt=''/></a>
                      </form>
                     </div>
                     </td>
                     </tr>

                   <div id="popup<?php echo $row2['id']?>" class="overlay">
                    <div class="popup">
                     <h2>Links</h2>
                      <a class="close" href="#">&times;</a>
                     <div class="content">
                     <h2><a href=""><?php echo $row2['survey_link']?></a></h2>
                     </div>
                    </div>
                   </div>
                   <!--Vendor Row 1 END-->
                  <?php } ?>
                  </tbody>
               </table>
              </div>


                    <div style="margin-bottom: 15px;margin-top: 80px;">
                        <span style="height:40px;width:100%">
                            <form action="addvendor.php?project_id=<?php echo $id ?>" method="post">
                                <div style="display:none"><input type="hidden"
                                        value="#" name="#" /></div>
                                <input type='submit' value='Add Vendor' />
                                <input type='hidden' name="pid" value='43' />
                            </form>
                        </span>
                    </div>
                </div>


            
                <section>
                    <h1>Redirects links</h1>
                    <div class="container">
                        <div class="row">
                            <div><div id="p1">http://insightskv.ml/endcapture.php?st=1</div> <button onclick="copyToClipboard('#p1')">Copy</button></div>
                            <div><div id="p2">http://insightskv.ml/endcapture.php?st=2</div><button onclick="copyToClipboard('#p2')">Copy</button></div>
                            <div><div id="p3">http://insightskv.ml/endcapture.php?st=3</div><button onclick="copyToClipboard('#p3')">Copy</button></div>
                        </div>
                    </div>
                </section>
                


                <script>
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).text()).select();
  document.execCommand("copy");
  $temp.remove();
}

</script>




                






                <div >
                    <!-- remove float left -->
                    <div style="border:0; padding: 10px;">
                        <table class='InfoForm' width=100%>
                            <tbody style="border: groove;">
                                <tr>
                                    <td colspan=11 style="text-align: left;" class="header">Project Research Statistics
                                    </td>
                                </tr>


                                <!--text here-->
                                <tr class="odd">
                                    <td style="text-align: left">Redirects</td>
                                    <td style="text-align: left">Completed</td>
                                    <td style="text-align: left">Disqualified</td>
                                    <td style="text-align: left">Quota Full</td>
                                    <td style=color:red; style="text-align: center">IR</td>
                                    <td style=color:red; style="text-align: center">Abandons</td>
                                    <td style="text-align: center;">Blocked</td>
                                    <td style=color:red; style="text-align: center">Average LOI</td>
                                    <td style="text-align: center">Median LOI</td>
                                    <td style="text-align: center;display:none;">Clean Up</td>
                                    <td style="text-align: center">Trued UP</td>
                                    <td style="text-align: center">Closed Date</td>

                                </tr>

                                <!--code here-->
                                <tr class="even">
                                    <td style="text-align: center">129 / <span style="color: #1278E0;">80.6%</span></td>
                                    <td style="text-align: center">5 / <span style="color: #1278E0;">3.1%</span></td>
                                    <td style="text-align: center">81 / <span style="color: #1278E0;">62.8%</span></td>
                                    <td style="text-align: center">9 / <span style="color: #1278E0;">7%</span></td>
                                    <td style=color:red; style="text-align: center">5.81 %</td>
                                    <td style=color:red; style="text-align: center">26.36 %</td>
                                    <td style="text-align: center;background: #81BFFF;">
                                        <div id='your-form-block-id'>
                                            <form action="#" method="post">
                                                ><a class="class-link"
                                                    href="#">2</a>
                                            </form>
                                        </div>
                                    </td>
                                    <td style=color:red; style="text-align: center;background: #81BFFF;">42 mins</td>
                                    <td style="text-align: center;background: #81BFFF;">34 mins</td>

                                    <td style="text-align: center;display:none;"><input type="checkbox" name="cleanedup"
                                            value="" checked /></td>
                                    <td style="text-align: center">-</td>
                                    <td style="text-align: center">-</td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!--original below-->

            </div>
            <br />
            <br />

            <table style="width: 100%;float: left;" border="0" class="InfoForm">
                <tr>
                    <td colspan="2" class="ListHeader header"><b>Download Project IDs</b></td>
                </tr>
                <tr class="odd">
                    <div id='your-form-block-id'>
                        <form action="#" method="post">
                            
                            <td>
                                <input style="vertical-align: sub;" type="checkbox" name="askExt" id="askExt"
                                    value="1" />Extension&nbsp; | &nbsp;
                                <input type="checkbox" style="vertical-align: sub;" name="askPrescreener"
                                    id="askPrescreener" value="1" /> Pre-Screener Information&nbsp; | &nbsp;
                                <input type="checkbox" style="vertical-align: sub;" name="askLOI" id="askLOI"
                                    value="1" />
                                LOI&nbsp; | &nbsp;
                                <input type="checkbox" style="vertical-align: sub;" name="askReferrer" id="askReferrer"
                                    value="1" /> Referrer&nbsp; | &nbsp;
                                <!-- added by trk 18/Nov/2018 -->
                                <input type="checkbox" style="vertical-align: sub;" name="askclientKey"
                                    id="askclientKey" value="1" /> Client Key (Code)&nbsp; | &nbsp;
                                <input type="checkbox" style="vertical-align: sub;" name="askstatreason"
                                    id="askstatreason" value="1" /> Status Reason &nbsp; | &nbsp;
                                <!-- added by vibha chosla 1/2/2016 -->
                                <input type="checkbox" style="vertical-align: sub;" name="reason" id="reason"
                                    value="1" />
                                Display Reason (Will duplicate redirects)&nbsp;
                            </td>
                            <td align="right" width="50">
                                <!--            <a href="< ?php echo CController::createUrl('admin/project/sa/allids/prjid/' . $project_id) ?>" class="class-link" >-->
                                <a href="#" class="class-link">
                                    <!-- added by vibha 27/7/2016 -->
                                    <input type="button" value="Download" />
                                </a>
                        </form>
                    </div>
                    </td>
                    </form>

                </tr>
            </table>
            <br />
           
            <!-- <table style="float:right;margin-top: -1.5%;width: 49%;visibility: hidden;diplay:none;" border="0"
                class="InfoForm">
                <tr>
                    <td colspan="2" class="ListHeader header"><b>Redirect IDs => Foreign IDs</b></td>
                </tr>
                <tr class="odd">
                    <div id='your-form-block-id'>
                        <form id="translateform" enctype="multipart/form-data" enableClientValidation="1"
                            action="/index.php/admin/project/sa/uploadfile" method="post">
                            <div style="display:none"><input type="hidden"
                                    value="8800c1318919643afe565e026658e13d1fd5627f" name="YII_CSRF_TOKEN" /></div>
                            <td>
                                File: <input name="codefile" id="codefile" type="file"
                                    style="font:10px Verdana,sans-serif;" required="" />
                                <div id="progressbox">
                                    <div id="progressbar"></div>
                                    <div id="statustxt">0%</div>
                                </div>
                                <div id="output"></div>
                            </td>
                            <td align="right" width="50">
                                <a href="#" class="class-link" id="csvupload">
                                    <input type="submit" name="submit" value="Translate" />
                                </a>

                            </td>
                        </form>
                    </div>
                </tr>
            </table>
-->
           

           
            <style>
                .overlay {
                position: fixed;
                top: 0;
                bottom: 0;
                left: 0;
                right: 0;
                background: rgba(0, 0, 0, 0.7);
                transition: opacity 500ms;
                visibility: hidden;
                opacity: 0;
                cursor: pointer;
            }

            .overlay:target {
                visibility: visible;
                opacity: 1;
                overflow: scroll;
            }

            .popup {
                margin: 70px auto;
                padding: 20px;
                background: #fff;
                border-radius: 5px;
                width: 30%;
                position: relative;
                transition: all 5s ease-in-out;
            }
            .popup5 {
    margin: 70px auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 80%;
    position: relative;
    transition: all 5s ease-in-out;
}
.th{
    text-align: center;
}

            .popup h2 {
                margin-top: 0;
                color: #333;
                font-family: Tahoma, Arial, sans-serif;
            }

            .popup .close {
                position: absolute;
                top: 20px;
                right: 30px;
                transition: all 200ms;
                font-size: 30px;
                font-weight: bold;
                text-decoration: none;
                color: #333;
            }

            .popup .close:hover {
                color: #06D85F;
            }
            .pop_up_btn{
                width: 80px;
                 border-radius: 14px;
            }
            .download{
                border-radius: 11px;
              
            }
            .th1{
                background-color: lightskyblue;
            }
            .tr{
                text-align: center;
            }
           

            .popup .content {
                max-height: 30%;
                overflow: auto;
            }
            .show{
                color: black;
            }
           

            @media screen and (max-width: 700px) {
                .box {
                    width: 70%;
                }

                .popup {
                    width: 70%;
                }
            }
            </style>
           
            <?php } ?>
</body>

</html>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>