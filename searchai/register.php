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
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">

            <?php include('message.php');

            ?>

                <div class="card">
                    <div class="card-header">
                        <h4>Register</h4>
                    </div>
                    <div class="card-body">
                        <form action="registercode.php" method="POST">
                            <div class="form-group mb-3">
                                <label class="mb-3">First name</label>
                                <input required type="text" name="fname" placeholder="Enter Your first name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-3 mt-3">Last name</label>
                                <input required type="text" name="lname" placeholder="Enter Your Last name" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-3 mt-3">Email id</label>
                                <input required type="email" name="email" placeholder="Enter Email Address" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-3 mt-3">Phone</label>
                                <input required type="phone" name="phone" placeholder="Enter Phone number" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-3 mt-3">Password</label>
                                <input required type="Password" name="password" placeholder="Enter Password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label class="mb-3 mt-3">Password</label>
                                <input required type="Password" name="cpassword" placeholder="Enter Password" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <button class="btn btn-primary register_btn" name="register_btn" type="submit">Register now</button>
                            </div>
                            <div class="form-group mb-3">
                                <span>Already have a account?</span>
                                <a href="login.php" class="text-primary">Login</a>
                            </div>
                        </form>
                    </div>
                </div>
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
    .register_btn {
        background-color: teal;
        color: #f2f2f4;
    }
</style>