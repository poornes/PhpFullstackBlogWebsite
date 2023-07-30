<?php 
    include('config/dbcon.php');
    include('authentication.php');
    include('includes/header.php');

?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Users</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
        <li class="breadcrumb-item">User</li>
    </ol>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Add User/Admin
                        <a href="viewRegister.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">
                <form action="code.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">First name</label>
                                <input type="text" name="fname" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Last name</label>
                                <input type="text" name="lname" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Phone</label>
                                <input type="phone" name="phone" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Role as</label>
                                <select name="role_as" required class="form-control">
                                    <option value="">--Select Role--</option>
                                    <option value="1" >Admin</option>
                                    <option value="0" >User</option>
                                </select>
                            </div><div class="col-md-6 mt-4">
                                <label for="">Status</label>
                                <input type="checkbox" name="status" width="70px" height="70px">
                            </div>
                            </div><div class="col-md-6 mb-3">
                                <button type="btn" name="add_user" class="btn btn-primary">Add Admin/User</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include('includes/footer.php');
    include('includes/script.php');
?>