<?php
include('includes/imp/islogin.php');
include('includes/header.php'); 
include('includes/navbar.php'); 
?>
<?php
include "includes/imp/conn.php";
$sql = "SELECT * FROM projects WHERE active_status=1 ORDER BY id DESC ";
$result = $conn->query($sql);
$total_projects =  $result->num_rows;
$sql2 = "SELECT * FROM projects WHERE active_status=1 AND status='Running' ";
$result = $conn->query($sql2);
$live_projects =  $result->num_rows;
$sql3 = "SELECT * FROM projects WHERE active_status=1 AND status='Hold' ";
$result = $conn->query($sql3);
$rest_projects =  $result->num_rows;
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">TODAY</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">

                                <h4>0 / 0</h4>

                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">CURRENT WEEK</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">0 / 0</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">RUNNING MONTH</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">0 / 0%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">TOTAL</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $total_projects; ?> / <?php echo $total_projects; ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <!-- Project Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
        </div>
        <div class="card-body">
            <h4 class="small font-weight-bold">Live Projects <span class="float-right"><?php echo $live_projects/$total_projects*100; ?>%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo $live_projects/$total_projects*100; ?>%" aria-valuenow="20"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">Rest Projects <span class="float-right"><?php echo $rest_projects/$total_projects*100; ?>%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $rest_projects/$total_projects*100; ?>%" aria-valuenow="40"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <h4 class="small font-weight-bold">ALL Projects <span class="float-right"><?php echo $total_projects/$total_projects*100?>%</span></h4>
            <div class="progress mb-4">
                <div class="progress-bar" role="progressbar" style="width:<?php echo $total_projects/$total_projects*100?>%" aria-valuenow="60" aria-valuemin="0"
                    aria-valuemax="100"></div>
            </div>
            <!-- <h4 class="small font-weight-bold">Payout Details <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div> -->
        </div>
    </div>

<div class="card shadow mb-4" style="width: 60%;">
    <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Top 5 Vendor</h6>
     </div>
     <?php
     $sql5 = "SELECT * FROM vendor ORDER BY id DESC ";
     $result = $conn->query($sql5);
     
     ?>
    <div class="card-body">
        <?php
        if ($result->num_rows > 0) {
            //output data of each row
            // LOOP TILL END OF DATA 
            while($rows=$result->fetch_assoc())
            {
        ?>
        <div class="list-group-item list-group-item-action">
            <div class="media">
                <i class="fa fa-user fa-1x" aria-hidden="true"></i> &nbsp;
                <div class="media-body text-truncate">
                    <div class="media-body text-truncate">
                    <p class="mb-1 text-left" style="margin: 0px !important;padding: 0px !important;">
                        <strong class="text-primary">
                             <span><?php echo $rows['vendor_name'];?></span>
                        </strong>
                    </p>
                    </div>
                </div>
                <div class="ml-auto">
                    <p class="text-primary" style="padding: 0px;margin: 0px;">87 
                        <small class="text-muted ml-2 text-secondary">  Completes</small></p>
                </div>
            </div>
           
        </div>
        <?php }} ?>
        <div class="list-group-item list-group-item-action">
            <div class="media">
                <div class="media-body text-truncate">
                    <div class="media-body text-truncate">
                    <p class="mb-1 text-left" style="margin: 0px !important;padding: 0px !important;">
                        <strong class="text-primary">
                             <span>Total Completes of these top 5 Vendors</span>
                        </strong>
                    </p>
                    </div>
                </div>
                <div class="ml-auto">
                    <p class="text-primary" style="padding: 0px;margin: 0px;">2456 
                        <small class="text-muted ml-2 text-secondary">  Completes</small></p>
                </div>
            </div>
        </div>       
    </div>
</div>
<br><br><br>


<!--Chart-->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
     <h6 class="m-0 font-weight-bold text-primary"><h2>Project Revenue V/S Vendor Expense</h2></h6>
    </div>
     <canvas id="barChart" style="width:100%;max-width:800px"></canvas>
</div>


    



<br><br><br>
<script src="./js/chart.js"></script>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>