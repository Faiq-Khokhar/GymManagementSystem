<?php include('../constant/layout/head.php');?>
<?php include('../constant/layout/header.php');?>
<?php include('../constant/layout/sidebar.php');
?>
 

  <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary"> Manage Coach</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">View Coach</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                
                <!-- /# row -->
                 <div class="card">
                            <div class="card-body">
                              
                            
                         
                                <div class="table-responsive m-t-40">
                                    <table id="myTable" class="table table-bordered table-striped">
                                        <thead>
        <tr>
          <th>Coach ID</th>
          <th>Name</th>
          <th>D/O/B</th>
          <th>Experience</th>
        </tr>
      </thead>    
        <tbody>
          <?php
              $query  = "select * from coach ORDER BY id";
              //echo $query;
              $result = mysqli_query($con, $query);
                ?>  
                  
                  <tr>
                     <td><?php echo $row['id']; ?></td>
                     <td><?php echo$row['name']; ?></td>
                       <td><?php echo $row['date']; ?> </td>
                       <td><?php echo $row['experience']; ?> </td>
                  
                  
                  
                 </tr>
                  
              <?php 
              $sno++; 
              $msgid = 0;
          ?>  

        </tbody>
                                      
                                    </table>
                                </div>
                            </div>
                        </div>
               
                <!-- /# row -->

                <!-- End PAge Content -->
           

<?php include('../constant/layout/footer.php');?>
  <!--  This Project Developed by: Mayuri K. 
 for any PHP, Codeignitor or Laravel work contact me through https://www.mayurik.com  -->

