<?php 
    include('config/dbcon.php');
    include('authentication.php');
    include('includes/header.php');
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Admin panel</h1>
    <?php
                include('message.php')
            ?>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Current users</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="viewRegister.php">
                        <?php 
                            $query = "SELECT * FROM users";
                            $query_run = mysqli_query($con, $query);
                            
                            if($total_users = mysqli_num_rows($query_run)){
                                echo "<h4>$total_users</h4>";
                            }else {
                                echo '<h4>No data found</h4>';
                            }

                            ?>
                    </a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Total categories</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="category-view.php">
                    <?php 
                            $query = "SELECT DISTINCT name FROM category";
                            $query_run = mysqli_query($con, $query);
                            
                            if($total_name = mysqli_num_rows($query_run)){
                                echo "<h4>$total_name</h4>";
                            }else {
                                echo '<h4>No data found</h4>';
                            }

                            ?>
                    </a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total tools</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">
                    <?php 
                            $query = "SELECT DISTINCT tool_name FROM category";
                            $query_run = mysqli_query($con, $query);
                            
                            if($total_name = mysqli_num_rows($query_run)){
                                echo "<h4>$total_name</h4>";
                            }else {
                                echo '<h4>No data found</h4>';
                            }

                            ?>
                    </a>
                    </a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<?php 
    include('includes/footer.php');
    include('includes/script.php');
?>