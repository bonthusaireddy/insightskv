<?php
include('includes/header.php'); 
include('includes/navbar.php'); 
?>


<?php 
include "test.php";

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
	$project_name = $_POST['project_name'];
	$client_name = $_POST['client_name'];
    $type = $_POST['type'];
	$parent_project = $_POST['parent_project'];
	$project_manager = $_POST['project_manager'];
    $country = $_POST['country'];
    $client_contact = $_POST['client_contact'];
    $sales_person = $_POST['sales_person'];
    $req_compelet = $_POST['req_compelet'];
    $cpc = $_POST['cpc'];
    $ir = $_POST['ir'];
    $survey_link = $_POST['survey_link'];
    $status = $_POST['status'];
    $max_complete = $_POST['max_complete'];
    $loi = $_POST['loi'];
    $note = $_POST['note'];
   
    

		//write sql query

		$sql = "INSERT INTO `users`(`project_name`, `client_name`, `type`, `parent_project`,  `project_manager`, `country`, `client_contact`, `sales_person`, `req_compelet`, `cpc`, `ir`, `survey_link`, `status`, `max_complete`, `loi`, `note`) VALUES 
     ('$project_name','$client_name','$type','$parent_project','$project_manager', '$country', '$client_contact', '$sales_person', '$req_compelet', '$cpc', '$ir',  '$survey_link', '$status', '$max_complete', '$loi', '$note')";

		// execute the query

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $conn->error;
		}

		$conn->close();

	}



?>

<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"company");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <title>...</title>


</head>

<body onload="startTime()">
    <div id="cnt_outer">



        <div class='rightcolumn'>


            <style>
            #mainlist {
                display: none;
                list-style: none;
            }

            #multiprint {
                list-style: none;
                display: block;
                position: absolute;
                right: 155px;
            }

            #moreformate {
                cursor: pointer;
            }

            #multiprint li a img {
                height: 20px;
                width: 15px;
            }

            #prev {
                /*transform: rotate(90deg);*/
            }

            #next {
                transform: rotate(180deg);
            }

            #last {
                transform: rotate(180deg);
            }

            #btnfind {
                vertical-align: middle;
            }

            #navlist {
                display: none;
                list-style: none;
            }

            .navigation {
                list-style: none;
                display: block;
                position: absolute;
                right: 35px;
                text-align: left;
                background-color: white;
            }
            </style>



            <style>
            table.InfoForm {
                border: 1px solid #999;
            }

            .class-link {
                font-size: 14px;
                font-weight: bold;
            }

            #listprojectvendor_length select,
            .dataTables_filter input[type="text"] {
                width: 20%;
            }

            .paging_full_numbers {
                width: 250px;
                height: 22px;
                line-height: 22px;
                padding-top: 9%;
            }

            .dataTables_info {
                width: 40%;
                float: left;
                padding-top: 7%;
                padding-bottom: -26px;
                padding-left: 10px;
                color: #000;
            }

            .td_short {
                width: 206px;
                white-space: nowrap;
            }
            </style>

            <div>

                <div style="width: 61%; float: left;border: groove;">
                    <form id="newprojectform" enableClientValidation="1"
                        action="/index.php/admin/project/sa/modproject/action/editproject" method="post">
                        <div style="display:none"><input type="hidden" value="8800c1318919643afe565e026658e13d1fd5627f"
                                name="YII_CSRF_TOKEN" /></div>
                        <fieldset>
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Personal information:</h6>
                            </div>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Project Name</span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <span class="input-group-text" id="">Client Name</span> <input type="text"
                                        class="form-control">
                                </div>

                                <label for="parent_project" name="parent_project" style="   margin-top: 16px;"> <span
                                        class="input-group-text" id="">Parent Project</span></label>
                                <select name="parent_project" style=" width: 184px;height: 30px;    margin-left: 4px;">

                                    <option value="parent_project" name="parent_project">Select Parent Project</option>

                                    <option value="demo0" name="parent_project">demo0</option>
                                    <option value="demo1" name="parent_project">demo1</option>
                                    <option value="demo2" name="parent_project">demo2</option>
                                    <option value="demo3" name="parent_project">demo3</option>
                                    <option value="demo4" name="parent_project">demo4</option>
                                    <option value="demo5" name="parent_project">demo5</option>
                                </select>
                                <label for="parent_project" name="parent_project" style="   margin-top: 16px;"> <span
                                        class="input-group-text" id="">Parent Name:= <a
                                            href="">frhgrh</a></span></label>

                        </fieldset>

                        <fieldset>
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Contacts & Region</h6>
                            </div>
                            <label for="parent_project" name="parent_project" style="   margin-top: 16px;"> <span
                                    class="input-group-text" id="">Client </span></label>
                            <select name="parent_project" style=" width: 184px;height: 30px;    margin-left: 4px;">

                                <option value="parent_project" name="parent_project">Select Client </option>

                                <option value="demo0" name="parent_project">demo0</option>
                                <option value="demo1" name="parent_project">demo1</option>
                                <option value="demo2" name="parent_project">demo2</option>
                                <option value="demo3" name="parent_project">demo3</option>
                                <option value="demo4" name="parent_project">demo4</option>
                                <option value="demo5" name="parent_project">demo5</option>
                            </select>

                            <label for="parent_project" name="parent_project" style="   margin-top: 16px;"> <span
                                    class="input-group-text" id="">Client Contact </span></label>
                            <select name="parent_project" style=" width: 184px;height: 30px;    margin-left: 4px;">

                                <option value="parent_project" name="parent_project">Select Client Contact </option>

                                <option value="demo0" name="parent_project">demo0</option>
                                <option value="demo1" name="parent_project">demo1</option>
                                <option value="demo2" name="parent_project">demo2</option>
                                <option value="demo3" name="parent_project">demo3</option>
                                <option value="demo4" name="parent_project">demo4</option>
                                <option value="demo5" name="parent_project">demo5</option>
                            </select>

                            <label for="parent_project" name="parent_project" style="   margin-top: 16px;"> <span
                                    class="input-group-text" id="">Project Manager</span></label>
                            <select name="parent_project" style=" width: 184px;height: 30px;    margin-left: 4px;">

                                <option value="parent_project" name="parent_project">Select Project Manager</option>

                                <option value="demo0" name="parent_project">demo0</option>
                                <option value="demo1" name="parent_project">demo1</option>
                                <option value="demo2" name="parent_project">demo2</option>
                                <option value="demo3" name="parent_project">demo3</option>
                                <option value="demo4" name="parent_project">demo4</option>
                                <option value="demo5" name="parent_project">demo5</option>
                            </select>
                            <label for="parent_project" name="parent_project" style="   margin-top: 16px;"> <span
                                    class="input-group-text" id="">Sales Person</span></label>
                            <select name="parent_project" style=" width: 184px;height: 30px;    margin-left: 4px;">

                                <option value="parent_project" name="parent_project">Select Sales Person</option>

                                <option value="demo0" name="parent_project">demo0</option>
                                <option value="demo1" name="parent_project">demo1</option>
                                <option value="demo2" name="parent_project">demo2</option>
                                <option value="demo3" name="parent_project">demo3</option>
                                <option value="demo4" name="parent_project">demo4</option>
                                <option value="demo5" name="parent_project">demo5</option>
                            </select>

                            <label for="parent_project" name="parent_project" style="   margin-top: 16px;"> <span
                                    class="input-group-text" id="">Country </span></label>
                            <select name="parent_project" style=" width: 184px;height: 30px;    margin-left: 4px;">

                                <option value="parent_project" name="parent_project">Select Country </option>

                                <option value="demo0" name="parent_project">demo0</option>
                                <option value="dombivli" name="parent_project">dombivli</option>
                                <option value="kalyan" name="parent_project">kalyan</option>
                                <option value="demo3" name="parent_project">demo3</option>
                                <option value="demo4" name="parent_project">demo4</option>
                                <option value="demo5" name="parent_project">demo5</option>
                            </select>
                        </fieldset>

                        <fieldset>
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Others:</h6>
                            </div>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="">Req. Completes</span>
                                    </div>
                                    <input type="text" class="form-control">
                                    <span class="input-group-text" id="">CPC/CPI $ :</span> <input type="text"
                                        class="form-control">

                                </div>
                                <div class="card-body" style="   margin-left: -19px;">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="">LOI (Minutes.) :</span>
                                        </div>
                                        <input type="text" class="form-control">
                                        <span class="input-group-text" id="">IR :</span> <input type="text"
                                            class="form-control">

                                    </div>
                                    <div class="card-body" style="   margin-left: -19px;">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id=""># of points to award:</span>
                                            </div>
                                            <input type="text" class="form-control">
                                            <span class="input-group-text" id="">Notes :</span> <input type="text"
                                                class="form-control">
                                        </div>
                                        <label for="parent_project" name="parent_project" style="   margin-top: 16px;">
                                            <span class="input-group-text" id="">Max. Completes :</span></label>
                                        <select name="parent_project"
                                            style=" width: 184px;height: 30px;    margin-left: 4px;">

                                            <option value="parent_project" name="parent_project">Select Max. Completes :
                                            </option>

                                            <option value="0" name="parent_project">0</option>
                                            <option value="1" name="parent_project">1</option>
                                            <option value="2" name="parent_project">2</option>
                                            <option value="demo3" name="parent_project">3</option>
                                            <option value="demo4" name="parent_project">demo4</option>
                                            <option value="demo5" name="parent_project">demo5</option>
                                        </select>
                                        <div class="card-body">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="">Survey Likn</span>
                                                </div>
                                                <input style="    height: 20vh;" type=" text" class="form-control">
                                            </div>
                                            <label for="parent_project" name="parent_project"
                                                style="   margin-top: 16px;">
                                                <span class="input-group-text" id="">Status</span></label>
                                            <select name="parent_project"
                                                style=" width: 184px;height: 30px;    margin-left: 4px;">

                                                <option value="parent_project" name="parent_project">Select Status
                                                </option>

                                                <option value="demo0" name="parent_project">demo0</option>
                                                <option value="Tesingt" name="parent_project">Tesingt</option>
                                                <option value="Complete" name="parent_project">Complete</option>
                                                <option value="Full" name="parent_project">Full</option>
                                            </select>

                        </fieldset>

                        <p style="padding-top: 1em;text-align: center;">
                            <!--                 attr name='submit' removed due to submit event failuer -->
                            <input type='hidden' name='requestfor' id='requestfor' value='' />
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
                                    <!-- 
                            <th>Completed</th>
                            <th>Disqualified</th> -->

                                    <th>IR/CPC</th>
                                    <!-- // <th>IR</th> -->
                                    <th>Link</th>
                                </tr>
                            </thead>


                            <tbody>
                                <tr id="vendor_row_1" style=" border: groove;">
                                    <td style="padding:3px;">
                                        <div class="form">
                                            <form id="form_120"
                                                action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyvendor/vid/120"
                                                method="post">
                                                <div style="display:none"><input type="hidden"
                                                        value="8800c1318919643afe565e026658e13d1fd5627f"
                                                        name="YII_CSRF_TOKEN" /></div><span
                                                    class="HelpToolTip SPAN_1"><span class="HelpToolTip_Title SPAN_3"
                                                        style="display:none;">Contact Person <b>Sales
                                                            Executive</b></span>
                                                    <span class="HelpToolTip_Contents SPAN_4"
                                                        style="display:none;">Status: <b>testing</b><br>CPC:
                                                        <b>0.01</b><br>Req.Completes : <b>160</b><br>Req.Completes :
                                                        <b>0</b></span>
                                                </span> <input type='image' src='/styles/darkblue/images/edit_16.png'
                                                    alt='' />
                                                <input type='hidden' name='action' value='modifyvendor' />
                                                <input type='hidden' name='vendor_project_id' value='120' />
                                                <input type='hidden' name='project_id' value='43' />
                                            </form>
                                        </div>
                                    </td>
                                    <td>120</td>
                                    <td><span id="company_name_1" class="company_name_info">Internal Company</span></td>
                                    <!-- use display none to hide -->
                                    <td style="display:none;" id="status_name_1">testing</td>

                                    <td>
                                        <div id='your-form-block-id'>
                                            <form action="#" method="post">
                                                <div style="display:none"><input type="hidden"
                                                        value="8800c1318919643afe565e026658e13d1fd5627f"
                                                        name="YII_CSRF_TOKEN" /></div><a class="class-link"
                                                    href="#">Redirects
                                                    1/0</a>
                                            </form>
                                        </div>
                                        <div id='your-form-block-id' class='completed_link'>
                                            <form action="#" method="post">
                                                <div style="display:none"><input type="hidden"
                                                        value="8800c1318919643afe565e026658e13d1fd5627f"
                                                        name="YII_CSRF_TOKEN" /></div><a class="class-link"
                                                    href="#">Completed
                                                    0/160</a>
                                            </form>
                                        </div><span id="total_completed_1" style="display: none;">0/160</span>
                                        <div id='your-form-block-id'>
                                            <form action="#" method="post">
                                                <div style="display:none"><input type="hidden"
                                                        value="8800c1318919643afe565e026658e13d1fd5627f"
                                                        name="YII_CSRF_TOKEN" /></div><a class="class-link"
                                                    href="#">Disqualified
                                                    1</a>
                                            </form>
                                        </div><span id="total_disqualified_1" style="display: none;">1</span>
                                        <div id='your-form-block-id'>
                                            <form
                                                action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject"
                                                method="post">
                                                <div style="display:none"><input type="hidden"
                                                        value="8800c1318919643afe565e026658e13d1fd5627f"
                                                        name="YII_CSRF_TOKEN" /></div><a class="class-link" href="#">QF
                                                    : 0</a>
                                            </form>
                                        </div>
                                    </td>

                                    <!-- <td>
                                <div id='your-form-block-id'><form action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject" method="post">
<div style="display:none"><input type="hidden" value="8800c1318919643afe565e026658e13d1fd5627f" name="YII_CSRF_TOKEN" /></div><a class="class-link" href="/index.php/admin/project/sa/showids/vid/120/type/6/name/Internal Company">0/160</a></form></div><span id="total_completed_1" style="display: none;">0/160</span> 

                                                                    </td>

                                                                    <td>
                                <div id='your-form-block-id'><form action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject" method="post">
<div style="display:none"><input type="hidden" value="8800c1318919643afe565e026658e13d1fd5627f" name="YII_CSRF_TOKEN" /></div><a class="class-link" href="/index.php/admin/project/sa/showids/vid/120/type/7/name/Internal Company">1</a></form></div><span id="total_disqualified_1" style="display: none;">1</span> 
                                                                    </td> -->

                                    <td style=color:#1278E0; id="vendor_cpc_1">
                                        IR : 0.00 % <br />N.A </td>

                                    <!-- <td >%</td> -->

                                    <td>
                                        <div class='end_point_link' id='your-form-block-id'>
                                            <form action="#" method="post">
                                                <div class="box">
                                                    <a class="button" href="#popup1">link</a>
                                                </div>
                                                <div style=" display:none"><input type="hidden"
                                                        value="8800c1318919643afe565e026658e13d1fd5627f"
                                                        name="YII_CSRF_TOKEN" />
                                                </div><a class="class-link"
                                                    href="/index.php/admin/project/sa/getvendorlink/prjid/43/vpid/120"><input
                                                        type='image' src='/styles/darkblue/images/link-24.png'
                                                        alt='' /></a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="vendor_row_2" style=" border: groove;">
                                    <td style="padding:3px;">
                                        <div class="form">
                                            <form id="form_129"
                                                action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyvendor/vid/129"
                                                method="post">
                                                <div style="display:none"><input type="hidden"
                                                        value="8800c1318919643afe565e026658e13d1fd5627f"
                                                        name="YII_CSRF_TOKEN" />
                                                </div><span class="HelpToolTip SPAN_1"><span
                                                        class="HelpToolTip_Title SPAN_3" style="display:none;">Contact
                                                        Person <b>Sales
                                                            Executive</b></span>
                                                    <span class="HelpToolTip_Contents SPAN_4"
                                                        style="display:none;">Status:
                                                        <b>running</b><br>CPC:
                                                        <b>15.00</b><br>Req.Completes : <b>9999</b><br>Req.Completes :
                                                        <b>0</b></span>
                                                </span> <input type='image' src='/styles/darkblue/images/edit_16.png'
                                                    alt='' />
                                                <input type='hidden' name='action' value='modifyvendor' />
                                                <input type='hidden' name='vendor_project_id' value='129' />
                                                <input type='hidden' name='project_id' value='43' />
                                            </form>
                                        </div>
                                    </td>
                                    <td>129</td>
                                    <td><span id="company_name_2" class="company_name_info">Bulls Eye</span></td>
                                    <!-- use display none to hide -->
                                    <td style="display:none;" id="status_name_2">running</td>

                                    <td>
                                        <div id='your-form-block-id'>
                                            <form action="#" method="post">
                                                <div style="display:none"><input type="hidden"
                                                        value="8800c1318919643afe565e026658e13d1fd5627f"
                                                        name="YII_CSRF_TOKEN" />
                                                </div><a class="class-link" href="#">Redirects
                                                    15/0</a>
                                            </form>
                                        </div>
                                        <div id='your-form-block-id' class='completed_link'>
                                            <form action="#" method="post">
                                                <div style="display:none"><input type="hidden"
                                                        value="8800c1318919643afe565e026658e13d1fd5627f"
                                                        name="YII_CSRF_TOKEN" />
                                                </div><a class="class-link" href="#>Completed
                                                    3/9999</a>
                                            </form>
                                        </div><span id=" total_completed_2" style="display: none;">3/9999</span>
                                                    <div id='your-form-block-id'>
                                                        <form action="#" method="post">
                                                            <div style="display:none"><input type="hidden"
                                                                    value="8800c1318919643afe565e026658e13d1fd5627f"
                                                                    name="YII_CSRF_TOKEN" />
                                                            </div><a class="class-link" href="#">Disqualified
                                                                2</a>
                                                        </form>
                                                    </div><span id="total_disqualified_2"
                                                        style="display: none;">2</span>
                                                    <div id='your-form-block-id'>
                                                        <form action="#" method="post">
                                                            <div style="display:none"><input type="hidden"
                                                                    value="8800c1318919643afe565e026658e13d1fd5627f"
                                                                    name="YII_CSRF_TOKEN" />
                                                            </div><a class="class-link" href="#">QF
                                                                : 2</a>
                                                        </form>
                                                    </div>
                                    </td>

                                    <!-- <td>
                                <div id='your-form-block-id'><form action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject" method="post">
<div style="display:none"><input type="hidden" value="8800c1318919643afe565e026658e13d1fd5627f" name="YII_CSRF_TOKEN" /></div><a class="class-link" href="/index.php/admin/project/sa/showids/vid/129/type/6/name/Bulls Eye Solution">3/9999</a></form></div><span id="total_completed_2" style="display: none;">3/9999</span> 

                                                                    </td>

                                                                    <td>
                                <div id='your-form-block-id'><form action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject" method="post">
<div style="display:none"><input type="hidden" value="8800c1318919643afe565e026658e13d1fd5627f" name="YII_CSRF_TOKEN" /></div><a class="class-link" href="/index.php/admin/project/sa/showids/vid/129/type/7/name/Bulls Eye Solution">2</a></form></div><span id="total_disqualified_2" style="display: none;">2</span> 
                                                                    </td> -->

                                    <td id="vendor_cpc_2">
                                        IR : 60.00 % <br />CPC : 15.00 </td>

                                    <!-- <td >%</td> -->

                                    <td>
                                        <div class='end_point_link' id='your-form-block-id'>
                                            <form
                                                action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject"
                                                method="post">
                                                <div class="box">
                                                    <a class="button" href="#popup1">link</a>
                                                </div>
                                                <div style="display:none"><input type="hidden"
                                                        value="8800c1318919643afe565e026658e13d1fd5627f"
                                                        name="YII_CSRF_TOKEN" />
                                                </div><a class="class-link" href="#"><input type='image'
                                                        src='/styles/darkblue/images/link-24.png' alt='' /></a>
                                            </form>
                                        </div>
                                    </td>
                                </tr>



                                <!-- <td >%</td> -->

                                <td>
                                    <div class='end_point_link' id='your-form-block-id'>
                                        <form
                                            action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject"
                                            method="post">
                                            <div style="display:none"><input type="hidden"
                                                    value="8800c1318919643afe565e026658e13d1fd5627f"
                                                    name="YII_CSRF_TOKEN" /></div>
                                            <a class="class-link" href="#"><input type='image'
                                                    src='/styles/darkblue/images/link-24.png' alt='' /></a>
                                        </form>
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div style="margin-bottom: 15px;margin-top: 80px;">
                        <span style="height:40px;width:100%">
                            <form action="/index.php/admin/project/index/action/addvendor/pid/43" method="post">
                                <div style="display:none"><input type="hidden"
                                        value="8800c1318919643afe565e026658e13d1fd5627f" name="YII_CSRF_TOKEN" /></div>
                                <input type='submit' value='Add Vendor' />
                                <input type='hidden' name="pid" value='43' />
                            </form>
                        </span>
                    </div>
                </div>







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
            <style>
            /* prograss bar */

            legend {
                margin-bottom: 1px;
                width: auto;
            }

            #progressbox {
                border: 1px solid #CAF2FF;
                padding: 1px;
                position: relative;
                width: 400px;
                border-radius: 3px;
                margin: 10px;
                display: none;
                text-align: left;
            }

            #progressbar {
                height: 20px;
                border-radius: 3px;
                background-color: #CAF2FF;
                width: 1%;
            }

            #statustxt {
                top: 3px;
                left: 50%;
                position: absolute;
                display: inline-block;
                color: #FFFFFF;
            }

            .completed_link a {
                color: #1278E0;
            }
            </style>
            <table style="float:right;margin-top: -1.5%;width: 49%;visibility: hidden;" border="0" class="InfoForm">
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


            <div id="popup1" class="overlay">
                <div class="popup">
                    <h2>Links</h2>
                    <a class="close" href="#">&times;</a>
                    <div class="content">
                        <h2><a href="">laksdajnjvbkjn?njsihgvjuad?mjniadh&vf%swajknfvajk</a></h2>

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
</body>

</html>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>