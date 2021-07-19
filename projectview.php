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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="card shadow mb-4" style="width:60%">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Personal information:</h6>
        </div>
        <div class="card-body">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">Project Name</span>
                </div>
                <input type="text" class="form-control">
                <span class="input-group-text" id="">Client Name</span> <input type="text" class="form-control">
            </div>
            <label for="type" style="margin-top:18px"><span class="input-group-text" id="">Type:</span></label>
            <input type="radio" name="type" value="vendor">Vendor
            <input type="radio" name="type" value="client">Client

            <label for="parent_project" name="parent_project" style="    margin-left: 130px;"> <span
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

        </div>

        <div class="card shadow mb-4" style="
    height: 108vh;
">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Contact & Region</h6>
            </div>
            <div class="card-body">
                <label for="Clientname">Client name:</label>
                <input type="text" name="client-name" style="margin-left: 16px;">

                <label for="parent_project" name="parent_project"> <span class="input-group-text" id="">
                        Project Manager:<select name="parent_project"
                            style=" width: 184px;height: 30px;    margin-left: 4px;">

                            <option value="parent_project" name="parent_project">Select Project Manager</option>

                            <option value="demo0" name="parent_project">demo0</option>
                            <option value="demo1" name="parent_project">demo1</option>
                            <option value="demo2" name="parent_project">demo2</option>
                            <option value="demo3" name="parent_project">demo3</option>
                            <option value="demo4" name="parent_project">demo4</option>
                            <option value="demo5" name="parent_project">demo5</option>
                        </select></span></label>


            </div>
            <div class="card-body">
                <label for="Clientname"><span class="input-group-text" id="">Country<select name="parent_project"
                            style=" width: 184px;height: 30px;    margin-left: 4px;">

                            <option value="parent_project" name="parent_project">Select Country</option>

                            <option value="demo0" name="parent_project">demo0</option>
                            <option value="Dombivli" name="parent_project">Dombivli</option>
                            <option value="Kalyan" name="parent_project">Kalyan </option>
                            <option value="demo3" name="parent_project">demo3</option>
                            <option value="demo4" name="parent_project">demo4</option>
                            <option value="demo5" name="parent_project">demo5</option>
                        </select></span></label>


                <label for="Clientname" style="margin-left: 40px;"><span class="input-group-text" id="">Country <select
                            name="parent_project" style=" width: 184px;height: 30px;    margin-left: 4px;">

                            <option value="parent_project" name="parent_project">Select Country </option>

                            <option value="demo0" name="parent_project">demo0</option>
                            <option value="demo1" name="parent_project">demo1</option>
                            <option value="demo2" name="parent_project">demo2</option>
                            <option value="demo3" name="parent_project">demo3</option>
                            <option value="demo4" name="parent_project">demo4</option>
                            <option value="demo5" name="parent_project">demo5</option>
                        </select></span></label>
            </div>

            <div class="card-body">
                <label for="Clientname"><span class="input-group-text" id="">Sales Person <select name="parent_project"
                            style=" width: 184px;height: 30px;    margin-left: 4px;">

                            <option value="parent_project" name="parent_project">Select Sales Person </option>

                            <option value="demo0" name="parent_project">demo0</option>
                            <option value="Dombivli" name="parent_project">Dombivli</option>
                            <option value="Kalyan" name="parent_project">Kalyan </option>
                            <option value="demo3" name="parent_project">demo3</option>
                            <option value="demo4" name="parent_project">demo4</option>
                            <option value="demo5" name="parent_project">demo5</option>
                        </select></span></label>


            </div>





            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Other</h6>
                </div>
                <div class="card-body">
                    <label for="Clientname"> <span class="input-group-text" id=""> Req Complete</span></label>
                    <input type="text" name="client-name" style="width: 185px;">

                    <label for="parent_project" name="parent_project"> <span class="input-group-text" id="">
                            Max Complete:<select name="parent_project"
                                style=" width: 184px;height: 30px;    margin-left: 4px;">

                                <option value="parent_project" name="parent_project">Max-Complete</option>

                                <option value="demo0" name="parent_project">demo0</option>
                                <option value="demo1" name="parent_project">demo1</option>
                                <option value="demo2" name="parent_project">demo2</option>
                                <option value="demo3" name="parent_project">demo3</option>
                                <option value="demo4" name="parent_project">demo4</option>
                                <option value="demo5" name="parent_project">demo5</option>
                            </select></span></label>

                    <div class="card-body" style=" position: relative; right: 14px;">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">CPC $ </span>
                            </div>
                            <input type="text" class="form-control">
                            <span class="input-group-text" id=""> LOI</span> <input type="text" class="form-control">
                        </div>

                        <div class="card-body">
                            <label for="Clientname"> <span class="input-group-text" id=""> Req Complete</span></label>
                            <input type="text" name="client-name" style="width: 185px;"><br>

                            <label for="Clientname"> <span class="input-group-text" id=""> Survy Link</span></label>
                            <input type="text" name="client-name" style="width: 265px; height: 14vh;">

                        </div>

                    </div>


                </div>
            </div>
            <div class="card shadow mb-4"
                style="    position: relative; width: 67%;height: auto; left: 106vh; bottom: 145vh;">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                </div>
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
                        <tr id="vendor_row_1">
                            <td style="padding:3px;">
                                <div class="form">
                                    <form id="form_120" action="#" method="post">
                                        <div style="display:none"><input type="hidden"
                                                value="8800c1318919643afe565e026658e13d1fd5627f"
                                                name="YII_CSRF_TOKEN" /></div><span class="HelpToolTip SPAN_1"><span
                                                class="HelpToolTip_Title SPAN_3" style="display:none;">Contact Person
                                                <b>Sales Executive</b></span>
                                            <span class="HelpToolTip_Contents SPAN_4" style="display:none;">Status:
                                                <b>testing</b><br>CPC: <b>0.01</b><br>Req.Completes :
                                                <b>160</b><br>Req.Completes : <b>0</b></span>
                                        </span> <input type='image' src='/styles/darkblue/images/edit_16.png' alt='' />
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
                                                name="YII_CSRF_TOKEN" /></div><a class="class-link" href="#">Redirects
                                            1/0</a>
                                    </form>
                                </div>
                                <div id='your-form-block-id' class='completed_link'>
                                    <form
                                        action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject"
                                        method="post">
                                        <div style="display:none"><input type="hidden"
                                                value="8800c1318919643afe565e026658e13d1fd5627f"
                                                name="YII_CSRF_TOKEN" /></div><a class="class-link"
                                            href="/index.php/admin/project/sa/showids/vid/120/type/6/name/Internal Company">Completed
                                            0/160</a>
                                    </form>
                                </div><span id="total_completed_1" style="display: none;">0/160</span>
                                <div id='your-form-block-id'>
                                    <form
                                        action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject"
                                        method="post">
                                        <div style="display:none"><input type="hidden"
                                                value="8800c1318919643afe565e026658e13d1fd5627f"
                                                name="YII_CSRF_TOKEN" /></div><a class="class-link"
                                            href="/index.php/admin/project/sa/showids/vid/120/type/7/name/Internal Company">Disqualified
                                            1</a>
                                    </form>
                                </div><span id="total_disqualified_1" style="display: none;">1</span>
                                <div id='your-form-block-id'>
                                    <form
                                        action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject"
                                        method="post">
                                        <div style="display:none"><input type="hidden"
                                                value="8800c1318919643afe565e026658e13d1fd5627f"
                                                name="YII_CSRF_TOKEN" /></div><a class="class-link"
                                            href="/index.php/admin/project/sa/showids/vid/120/type/8/name/Internal Company">QF
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
                                    <form
                                        action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject"
                                        method="post">
                                        <div style="display:none"><input type="hidden"
                                                value="8800c1318919643afe565e026658e13d1fd5627f"
                                                name="YII_CSRF_TOKEN" /></div><a class="class-link"
                                            href="/index.php/admin/project/sa/getvendorlink/prjid/43/vpid/120"><input
                                                type='image' src='/styles/darkblue/images/link-24.png' alt='' /></a>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        <tr id="vendor_row_2">
                            <td style="padding:3px;">
                                <div class="form">
                                    <form id="form_129"
                                        action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyvendor/vid/129"
                                        method="post">
                                        <div style="display:none"><input type="hidden"
                                                value="8800c1318919643afe565e026658e13d1fd5627f"
                                                name="YII_CSRF_TOKEN" /></div><span class="HelpToolTip SPAN_1"><span
                                                class="HelpToolTip_Title SPAN_3" style="display:none;">Contact Person
                                                <b>Sales Executive</b></span>
                                            <span class="HelpToolTip_Contents SPAN_4" style="display:none;">Status:
                                                <b>running</b><br>CPC: <b>15.00</b><br>Req.Completes :
                                                <b>9999</b><br>Req.Completes : <b>0</b></span>
                                        </span> <input type='image' src='/styles/darkblue/images/edit_16.png' alt='' />
                                        <input type='hidden' name='action' value='modifyvendor' />
                                        <input type='hidden' name='vendor_project_id' value='129' />
                                        <input type='hidden' name='project_id' value='43' />
                                    </form>
                                </div>
                            </td>


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
                                    <tr id="vendor_row_1">
                                        <td style="padding:3px;">
                                            <div class="form">
                                                <form id="form_120"
                                                    action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyvendor/vid/120"
                                                    method="post">
                                                    <div style="display:none"><input type="hidden"
                                                            value="8800c1318919643afe565e026658e13d1fd5627f"
                                                            name="YII_CSRF_TOKEN" /></div><span
                                                        class="HelpToolTip SPAN_1"><span
                                                            class="HelpToolTip_Title SPAN_3"
                                                            style="display:none;">Contact Person
                                                            <b>Sales Executive</b></span>
                                                        <span class="HelpToolTip_Contents SPAN_4"
                                                            style="display:none;">Status:
                                                            <b>testing</b><br>CPC: <b>0.01</b><br>Req.Completes :
                                                            <b>160</b><br>Req.Completes : <b>0</b></span>
                                                    </span> <input type='image'
                                                        src='/styles/darkblue/images/edit_16.png' alt='' />
                                                    <input type='hidden' name='action' value='modifyvendor' />
                                                    <input type='hidden' name='vendor_project_id' value='120' />
                                                    <input type='hidden' name='project_id' value='43' />
                                                </form>
                                            </div>
                                        </td>
                                        <td>130</td>
                                        <td><span id="company_name_1" class="company_name_info">Internal Company</span>
                                        </td>
                                        <!-- use display none to hide -->
                                        <td style="display:none;" id="status_name_1">testing</td>

                                        <td>
                                            <div id='your-form-block-id'>
                                                <form
                                                    action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject"
                                                    method="post">
                                                    <div style="display:none"><input type="hidden"
                                                            value="8800c1318919643afe565e026658e13d1fd5627f"
                                                            name="YII_CSRF_TOKEN" /></div><a class="class-link"
                                                        href="/index.php/admin/project/sa/showids/vid/120/type/9/name/Internal Company">Redirects
                                                        1/0</a>
                                                </form>
                                            </div>
                                            <div id='your-form-block-id' class='completed_link'>
                                                <form
                                                    action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject"
                                                    method="post">
                                                    <div style="display:none"><input type="hidden"
                                                            value="8800c1318919643afe565e026658e13d1fd5627f"
                                                            name="YII_CSRF_TOKEN" /></div><a class="class-link"
                                                        href="/index.php/admin/project/sa/showids/vid/120/type/6/name/Internal Company">Completed
                                                        0/160</a>
                                                </form>
                                            </div><span id="total_completed_1" style="display: none;">0/160</span>
                                            <div id='your-form-block-id'>
                                                <form
                                                    action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject"
                                                    method="post">
                                                    <div style="display:none"><input type="hidden"
                                                            value="8800c1318919643afe565e026658e13d1fd5627f"
                                                            name="YII_CSRF_TOKEN" /></div><a class="class-link"
                                                        href="/index.php/admin/project/sa/showids/vid/120/type/7/name/Internal Company">Disqualified
                                                        1</a>
                                                </form>
                                            </div><span id="total_disqualified_1" style="display: none;">1</span>
                                            <div id='your-form-block-id'>
                                                <form
                                                    action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject"
                                                    method="post">
                                                    <div style="display:none"><input type="hidden"
                                                            value="8800c1318919643afe565e026658e13d1fd5627f"
                                                            name="YII_CSRF_TOKEN" /></div><a class="class-link"
                                                        href="/index.php/admin/project/sa/showids/vid/120/type/8/name/Internal Company">QF
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
                                                <form
                                                    action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyproject"
                                                    method="post">
                                                    <div style="display:none"><input type="hidden"
                                                            value="8800c1318919643afe565e026658e13d1fd5627f"
                                                            name="YII_CSRF_TOKEN" /></div><a class="class-link"
                                                        href="/index.php/admin/project/sa/getvendorlink/prjid/43/vpid/120"><input
                                                            type='image' src='/styles/darkblue/images/link-24.png'
                                                            alt='' /></a>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr id="vendor_row_2">
                                        <td style="padding:3px;">
                                            <div class="form">
                                                <form id="form_129"
                                                    action="/index.php/admin/project/sa/modifyproject/project_id/43/action/modifyvendor/vid/129"
                                                    method="post">
                                                    <div style="display:none"><input type="hidden"
                                                            value="8800c1318919643afe565e026658e13d1fd5627f"
                                                            name="YII_CSRF_TOKEN" /></div><span
                                                        class="HelpToolTip SPAN_1"><span
                                                            class="HelpToolTip_Title SPAN_3"
                                                            style="display:none;">Contact Person
                                                            <b>Sales Executive</b></span>
                                                        <span class="HelpToolTip_Contents SPAN_4"
                                                            style="display:none;">Status:
                                                            <b>running</b><br>CPC: <b>15.00</b><br>Req.Completes :
                                                            <b>9999</b><br>Req.Completes : <b>0</b></span>
                                                    </span> <input type='image'
                                                        src='/styles/darkblue/images/edit_16.png' alt='' />
                                                    <input type='hidden' name='action' value='modifyvendor' />
                                                    <input type='hidden' name='vendor_project_id' value='129' />
                                                    <input type='hidden' name='project_id' value='43' />
                                                </form>
                                            </div>
                                        </td>






            </div>



            <!--  <div class="car">

                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                    </div>
                    <div class="card-body">
                        <h4 class="small font-weight-bold">Live Projects <span class="float-right">20%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">Rest Projects <span class="float-right">40%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <h4 class="small font-weight-bold">ALL Projects <span class="float-right">60%</span></h4>
                        <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>-->
</body>

</html>