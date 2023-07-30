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
            <?php
                include('message.php')
            ?>
            <div class="card">
                <div class="card-header">
                    <h4>Registered User
                    <a href="register-add.php" class="btn btn-primary float-end">Add Admin</a></h4>
                </div>
                <div class="card-body">
                    <table class='table table-bordered'>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Roles</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $query = 'SELECT * FROM users';
                                $query_run = mysqli_query($con, $query);

                                if(mysqli_num_rows($query_run)> 0 ) {
                                    foreach($query_run as $row) {
                                        ?>
                                        <tr>
                                            <td><?= $row['ID'];?></td>
                                            <td><?= $row['fname'];?></td>
                                            <td><?= $row['lname'];?></td>
                                            <td><?= $row['email'];?></td>
                                            <td><?= $row['phone'];?></td>
                                            <td>
                                                <?php 
                                                    if($row['role_as'] == '1') {
                                                        echo 'Admin';
                                                    }
                                                    if($row['role_as'] == '0') {
                                                        echo 'User';
                                                    }
                                                ?>
                                            </td>
                                            <td><a href="registerEdit.php?id=<?= $row['ID'];?>" class="btn btn-success">Edit</td>
                                            <td>
                                                <form action="code.php" method="POST">
                                                    <button type="submit" name="user_delete" value="<?= $row['ID'];?>" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                }else {
                                    ?>
                                        <tr>
                                            <td colspan="6">No records found</td>
                                        </tr>
                                    <?php
                                }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include('includes/footer.php');
    include('includes/script.php');
?>