<?php include('../constant/layout/head.php'); ?>
<?php include('../constant/layout/header.php'); ?>

<?php include('../constant/layout/sidebar.php'); ?>
<link rel="stylesheet" href="popup_style.css">
<!--  Project Developed by: MayuriK. 
 for any PHP, Codeignitor or Laravel work contact me through www.mayurik.com  -->
<?php
//session_start();
//error_reporting(0);
include('../constant/connect.php');

?>
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">New Coach Management</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Add Coach</li>
            </ol>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->

        <!-- /# row -->
        <div class="row">
            <div class="col-lg-8" style="    margin-left: 10%;">
                <div class="card">
                    <div class="card-title">

                    </div>
                    <div class="card-body">
                        <div class="input-states">
                            <form class="form-horizontal" method="POST" name="userform" enctype="multipart/form-data" action="new_submit.php" id="form1" name="form1">

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">NAME</label>
                                        <div class="col-sm-9">
                                            <input name="u_name" id="boxx" required class="form-control" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">CITY:</label>

                                        <div class="col-sm-9">
                                            <input type="text" name="city" id="boxx" class="form-control" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">STATE</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="state" id="boxx" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">GENDER</label>
                                        <div class="col-sm-9">
                                            <select name="gender" id="boxx" required class="form-control">

                                                <option value="">--Please Select--</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">PHONE NO</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="mobile" id="boxx" maxlength="10" class="form-control" required pattern="^[0][1-9]\d{9}$|^[1-9]\d{9}$">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">EMAIL ID</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" id="boxx" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div id="plandetls">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" name="submit" id="submit" value="CREATE PLAN" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                <button type="reset" name="reset" id="reset" value="Reset" class="btn btn-primary btn-flat m-b-30 m-t-30">Reset</button>


                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <!-- /# row -->

        <!-- End PAge Content -->
        <script>
            function myplandetail(str) {

                if (str == "") {
                    document.getElementById("plandetls").innerHTML = "";
                    return;
                } else {
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari
                        xmlhttp = new XMLHttpRequest();
                    }
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            document.getElementById("plandetls").innerHTML = this.responseText;

                        }
                    };

                    xmlhttp.open("GET", "plandetail.php?q=" + str, true);
                    xmlhttp.send();
                }

            }
        </script>

        <?php include('../constant/layout/footer.php'); ?>
        <!--  This Project Developed by: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me through https://www.mayurik.com  -->