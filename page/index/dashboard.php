
<script type="text/javascript" src="page/index/js/dashboard.js"></script>
<!--<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>-->

<script type="text/javascript">
            $(document).ready(function() {
                 $('table.display').DataTable();
            } );
        </script>




<?php

$total_student=count($student);
$total_notice=count($notice_info);
$info=$sms->sms_balance();

?>

<?php
/**
* Show user information like IP address, useragent
**/

?>

<?php


?>



 <div class="row" style="margin-bottom: 30px;">
    <?php include 'dashboard_info.php'; ?>
</div>
 <div class="row" >

                    <div class="col-lg-6 col-sm-6" style="background-color: #2467ec; padding:20px 0px;">
                        <div class="circle-tile">
                            <a href="">
                                <div class="circle-tile-heading" style="background-color: #2e363f;">
                                    <i class="fa fa-users fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content" style="background-color: #0b48c3ff; margin:0px 10px 0px 20px;">
                                <div class="circle-tile-description text-faded">
                                    Total Students
                                </div>
                                <div class="circle-tile-number text-faded">
                                    <?php echo "$total_student"; ?>
                                    <span id="sparklineA"></span>
                                </div>
                                <!-- <a href="" class="circle-tile-footer ">More Info <i class="fa fa-chevron-circle-right"></i></a> -->
                            </div>
                        </div>
                    </div>
                 
                    <div class="col-lg-6 col-sm-6" style="background-color: #2467ec; padding:20px 0px; ">
                        <div class="circle-tile">
                            <a href="#">
                                <div class="circle-tile-heading" style="background-color: #2e363f;">
                                    <i class="fa fa-info fa-fw fa-3x"></i>
                                </div>
                            </a>
                            <div class="circle-tile-content" style="background-color: #0b48c3ff;margin:0px 20px 0px 10px;">
                                <div class="circle-tile-description text-faded">
                                    Total Notice
                                </div>
                                <div class="circle-tile-number text-faded">
                                    <?php echo "$total_notice"; ?>
                                    <span id="sparklineB"></span>
                                </div>
                                <!-- <a href="#" class="circle-tile-footer">More Info <i class="fa fa-chevron-circle-right"></i></a> -->
                            </div>
                        </div>
                    </div>
        </div>



    <div class="row">
    
    <script src="tool/chart_api/canvas_api.js"></script>


        <?php 
       
       if($user_permit<8){
        // include "student_admit_graph.php"; 
        include "site_activity.php"; 
        
       }
        ?> 

    </div>    

<link rel="stylesheet" type="text/css" href="page/index/style.css">
<style type="text/css">
    thead{
        background-color: #ffffffff !important;
        border-width: 0px;
    }
    .td_list1{
        background-color: #ffffffff;
        color: #000000;
        padding: 10px;
        font-weight: bold;
        border: 1px solid #C6C9D1;
        text-align: center;
    }
    .td_list2{
        background-color: #ffffff;
        color: #000000;
        padding: 8px;
        border: 1px solid #C6C9D1;
        text-align: center;
    }
</style>

<script type="text/javascript">
    live_site_action();
</script>