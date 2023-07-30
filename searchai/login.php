<?php
session_start();

if(isset($_SESSION['auth'])){
    $_SESSION['message'] = 'You are already logged in';
    header("Location: index.php");
    exit(0);
}
    include('includes/header.php');
    include('includes/navbar.php');
?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">

            <?php include('message.php');

            ?>

            <form action="logincode.php" method="POST">
                <div class="card mt-5">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label class="mt-3 mb-3">Email id</label>
                                <input type="email" name="email" placeholder="Enter Email Address" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="mt-3 mb-3">Password</label>
                                <input type="Password" name="password" placeholder="Enter Password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-primary login_btn" name="login_btn" type="submit">Login now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<style>
    .card {
        margin-top: 30px;
        /* border: none !important; */
    }

    .card-header {
        background-color: #20047a;
        color: #f2f2fc;
    }
    label {
        color: #20047a;
    }
    input {
        border: none !important;
        border-bottom: 1px solid #f2f2f4 !important;
        border-radius: none !important;
    }
    .login_btn {
        background-color: teal;
        color: #f2f2f4;
    }
</style>
