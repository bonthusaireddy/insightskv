<?php
include('includes/header.php'); 
include('includes/navbar.php');
include('includes/imp/conn.php'); 
?>

<?php

$mysqli = new mysqli($servername, $username, $password, $dbname);
$id = $_GET['id'];
// SQL query to select data from database
$sql = "SELECT * FROM projects WHERE id = '$id' ";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/projectview.css">
 <title>...</title>
</head>
<body onload="startTime()">

<?php foreach($result as $row){?>

<div id="cnt_outer">
    <div class='rightcolumn'>
              <div>
                 <div style="width: 61%; float: left;border: groove;">
                    <form id="newprojectform" enableClientValidation="1" action="#" method="post">
                        <form action="post">
                            <fieldset>
                             <div class="card-header py-3"><h6 class="m-0 font-weight-bold text-primary">Personal information:</h6></div>
                             <div class="card-body">
                             <div class="input-group">
                             <div class="input-group-prepend">
                             <span class="input-group-text" aid="">Project Name</span>
                             </div>
                             <input name="project_name" type=" text" class="form-control" value="<?php echo $row["project_name"]; ?>">
                             <span class="input-group-text" style="margin-left: 26px;" id="">Client Name</span>
                              <input name="client_name" type=" text" class="form-control" value="<?php echo $row["client_name"]; ?>">
                              </div>
                              <label for="parent_project" name="parent_project" style="   margin-top: 16px;">
                              <span class="input-group-text" id="">Parent Project</span></label>
                              <select name="parent_project" style=" width: 184px;height: 30px;margin-left: 4px;">
                              <option value="<?php echo $row["parent_project"]; ?>" name="parent_project"><?php echo $row["parent_project"]; ?> </option>
                              </select>
                             <label for="parent_project" name="parent_project"  style=" margin-top: 54px; margin-left: 53px;">
                             <span class="input-group-text" id="">Parent Name:= <a href="">example.com</a></span></label>
                            </fieldset>

<fieldset>
     <div class="card-header py-3"> <h6 class="m-0 font-weight-bold text-primary">Contacts & Region</h6> </div>
          <div class="card-body">
              <label for="parent_project" name="parent_project" style=" margin-top: 20px;"> <span class="input-group-text" id="">Client Name</span></label>
                 <select name="parent_project" style=" width: 184px;height: 30px;    margin-left: 4px;">
                  <option value="parent_project" name="parent_project"><?php echo $row["client_name"]; ?></option>
                     </select>
                        <label for="parent_project" name="parent_project" style=" margin-left: 30px;  margin-top: 16px;"> 
                            <span class="input-group-text" id="">Client Contact </span></label>
                                <select name="parent_project" style=" width: 184px;height: 30px;  margin-left: 4px;">
                                     <option value="#" name="parent_project"><?php echo $row["client_contact"]; ?></option>
                                         </select>
               <label for="parent_project" name="parent_project" style="   margin-top: 50px;">
                 <span class="input-group-text" id="">Project Manager</span></label>
                    <select name="parent_project"  style=" width: 184px;height: 30px;    margin-left: 4px;">
                        <option value="parent_project" name="parent_project"><?php echo $row["project_manager"]; ?> </option>
                         </select>
                            <label for="parent_project" name="parent_project" style="   margin-top: 16px;">
                               <span style="  margin-left: 10px;" class="input-group-text" id="">Sales Person</span></label>
                                    <select name="parent_project" style=" width: 184px;height: 30px; margin-left: 4px;">
                                         <option value="parent_project" name="parent_project"><?php echo $row["sales_person"]; ?> </option>
                                              </select>
                                             <label for="parent_project" name="parent_project" style=" margin-left: 50px;  margin-top: 50px;"> <span class="input-group-text" id="">Country </span></label>
                                                 <select name="parent_project" style=" width: 184px;height: 30px; margin-left: 4px;">
                                                     <option value="parent_project" name="parent_project"><?php echo $row["country"]; ?> </option>
                                                         </select>
                                                            </div>
                                                                </fieldset>


 <fieldset>
   <div class="card-header py-3"> <h6 class="m-0 font-weight-bold text-primary">Others:</h6> </div>
     <div class="card-body">
       <div class="input-group">
         <div class="input-group-prepend">
          <span class="input-group-text" id="">Req. Completes</span> </div>
               <input type="text" class="form-control" value="<?php echo $row["parent_project"]; ?>">
                  <span class="input-group-text" style="margin-left: 15px;" id="">CPC/CPI $ :</span> 
                    <input type="text" class="form-control" value="<?php echo $row["cpc"]; ?>">
                        </div>
                           <div class="card-body" style="   margin-left: -19px;">
                              <div style=" margin-top: 50px;" class=" input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">LOI (Minutes.) :</span></div>
                                       <input type="text" class="form-control" value="<?php echo $row["loi"]; ?>">
                                          <span class="input-group-text" style=" margin-left: 15px;" id="">IR :</span>
                                           <input type="text" class="form-control" value="<?php echo $row["ir"]; ?>">
                                             </div>
                                                 <div class="card-body" style="   margin-left: -19px;">
                                                  <div style=" margin-top: 50px;" class="input-group">
                                                      <div class="input-group-prepend">
                                                    <span class="input-group-text" id=""># of points to award:</span> </div>
                                                         <input type=" text" class="form-control" value="<?php echo $row["1"]; ?>">
                                                             <span class="input-group-text" style="margin-left: 15px;" id="">Notes :</span>
                                                              <input type="text" class="form-control" value="<?php echo $row["note"]; ?>">
                                                                 </div>
 <label for="parent_project" name="parent_project" style="margin-top: 50px;">
    <span class="input-group-text" id="">Max. Completes :</span></label>
        <select name="parent_project"style=" width: 184px;height: 30px;    margin-left: 4px;">
            <option value="parent_project" name="parent_project"><?php echo $row["max_complete"]; ?></option>
               </select>
                 <div class="card-body">
                    <div style=" margin-top: 40px;" class=" input-group">
                      <div class="input-group-prepend">
                         <span class="input-group-text" id="">Survey Likn</span> </div>
                           <input style="height: 20vh;" type=" text" class="form-control" value="<?php echo $row["survey_link"]; ?>"></div>
 <label for="parent_project" name="parent_project" style="   margin-top: 30px;">
     <span class="input-group-text" id="">Status</span></label>
          <select name="parent_project"style=" width: 184px;height: 30px;    margin-left: 4px;">
             <option value="<?php echo $row["status"]; ?>" name="parent_project"><?php echo $row["status"]; ?> </option>
                 </select>
                    </fieldset>
                        </form>
                        <p style="padding-top: 1em;text-align: center;">
                            <!--                 attr name='submit' removed due to submit event failuer -->
                            <input type='submit' value='Save' id="save" />
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
                                    <!--            <th>Delete</th>-->
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

                                <tr id="vendor_row_1" style=" border: groove;">
                                    <td style="padding:3px;">
                                        <div class="form">
                                            <form id="form_120" action="" method="post">
                                               <span class="HelpToolTip SPAN_1"><a href="#popup2">Edit</a></span>
                                            </form>
                                        </div>
                                    </td>
                                    <td>120</td>
                                    <td> <span id="company_name_1" class="company_name_info">Internal Company</span> </td>
                                    <!-- use display none to hide -->
                                    <td style="display:none;" id="status_name_1">testing</td>
                                    <td>
                                        <div id='your-form-block-id'>
                                            <form action="#" method="post">
                                                <a class="class-link" href="#">Redirects 1/0</a>
                                            </form>
                                        </div>
                                        <div id='your-form-block-id' class='completed_link'>
                                            <form action="#" method="post">
                                                <a class="class-link" href="#">Completed</a> <br>
                                                <a class="class-link" href="#"> 0/160</a>
                                            </form>
                                        </div>
                                        <div id='your-form-block-id'>
                                            <form action="#" method="post">
                                              <a class="class-link" href="#">Disqualified 1</a>
                                            </form>
                                        </div>
                                        <div id='your-form-block-id'>
                                            <form  action="#" method="post">
                                                <a class="class-link" href="#">QF :</a> 
                                                <a class="class-link" href="#">0</a>
                                            </form>
                                        </div>
                                    </td>
                                    <td style=color:#1278E0; id="vendor_cpc_1"> IR : 0.00 % <br />N.A </td> 

                                    <td>
                                        <div class='end_point_link' id='#'>
                                            <form action="#" method="post">
                                                <div class="box">
                                                    <a class="button" href="#popup1">link</a>
                                                </div>
                                              <a class="class-link" href="#"> <input type='image' src='#' alt=''/></a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                <!--Vendor Row 1 END-->

                             </tbody>
                        </table>
                    </div>


                    <div style="margin-bottom: 15px;margin-top: 80px;">
                        <span style="height:40px;width:100%">
                            <form action="database.php" method="post">
                                <div style="display:none"><input type="hidden"
                                        value="8800c1318919643afe565e026658e13d1fd5627f" name="YII_CSRF_TOKEN" /></div>
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
                            <div><?php echo $row['completion_link'] ?> <button>Copy</button></div>
                            <div><?php echo $row['disqualify_link'] ?> <button>Copy</button></div>
                            <div><?php echo $row['quotafull_link'] ?> <button>Copy</button></div>
                        </div>
                    </div>
                </section>
                






                <div style="">
                    <!-- remove float left -->
                    <div style="border:0; padding: 10px;">
                        <table class='InfoForm' width=100%>
                            <tbody>
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
                                            <form
                                                action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject"
                                                method="post">
                                                <div style="display:none"><input type="hidden"
                                                        value="8800c1318919643afe565e026658e13d1fd5627f"
                                                        name="YII_CSRF_TOKEN" /></div><a class="class-link"
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
                        <form action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject"
                            method="post">
                            <div style="display:none"><input type="hidden"
                                    value="8800c1318919643afe565e026658e13d1fd5627f" name="YII_CSRF_TOKEN" /></div>
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
            <div id="popup1" class="overlay">
                <div class="popup">
                    <h2>Links</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <h2><a href="">laksdajnjvbkjn?njsihgvjuad?mjniadh&vf%swajknfvajk</a></h2>

                    </div>
                </div>
            </div>

            <div id="popup2" class="overlay">
                <div class="popup">
                    <h2>Edit</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <h2><a href=""> <div class="edit_1">
                        <span class="HelpToolTip_Contents SPAN_4" >Status: <b>testing</b><br>CPC:
                                                        <b>0.01</b><br>Req.Completes : <b>160</b><br>Req.Completes :
                                                        <b>0</b></span>
                        </div></a></h2>

                    </div>
                </div>
            </div>
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
            }

            .overlay:target {
                visibility: visible;
                opacity: 1;
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

            .popup .content {
                max-height: 30%;
                overflow: auto;
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