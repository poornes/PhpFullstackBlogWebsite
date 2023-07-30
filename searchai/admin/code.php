<?php 
    include('authentication.php');
    include('config/dbcon.php');

    if(isset($_POST['logout_btn'])){
        // session_destroy();
        unset($_SESSION['auth']);
        unset( $_SESSION['auth_role']);
        unset( $_SESSION['auth_user']);
    
        $_SESSION['message'] = "Logged out Successfully!";
        header('Location: ../login.php');
        exit(0);
    }


    if(isset($_POST['category_add'])){
        $name = $_POST['name'];
        $tool_name = $_POST['tool_name'];
        $slug = $_POST['slug'];
        $description = $_POST['description'];
        $meta_data = $_POST['meta_title'];
        $meta_description = $_POST['Meta_description'];
        $meta_keyword = $_POST['Meta_keyword'];
        
        $query = "INSERT INTO category (name,tool_name,slug,description,meta_data,meta_description,meta_keyword)
             VALUES('$name','$tool_name','$slug','$description','$meta_data','$meta_description','$meta_keyword')";
             
             $query_run = mysqli_query($con, $query);

             if($query_run) {
                $_SESSION['message'] = 'Category added Successfully!';
                header('Location: category-add.php');
                exit(0);
            }
            else {
                $_SESSION['message'] = 'Something went wrong!';
                header('Location: category-add.php');
                exit(0);
            }
    }



if(isset($_POST['user_delete'])) {
    $user_id = $_POST['user_delete'];
    $query = "DELETE FROM users WHERE ID='$user_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = 'Deleted User/Admin Successfully!';
        header('Location: viewRegister.php');
        exit(0);
    }
    else {
        $_SESSION['message'] = 'Something went wrong!';
        header('Location: viewRegister.php');
        exit(0);
    }

}

//category delete

if(isset($_POST['delete_category'])) {
    $user_id = $_POST['delete_category'];
    $query = "DELETE FROM category WHERE `category`.`id` = '$user_id'";
    $query_run = mysqli_query($con, $query);

    if($query_run) {
        $_SESSION['message'] = 'Post deleted succefully';
        header('Location: category-view.php');
        exit(0);
    }
    else {
        $_SESSION['message'] = 'Something went wrong!';
        header('Location: category-view.php');
        exit(0);
    }

}


if(isset($_POST['add_user'])){
        $user_id = $_POST['user_id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role_as = $_POST['role_as'];
        $status = $_POST['status'] == true ? '1':'0';

        $query = "INSERT INTO users (fname,lname,email,password,role_as) VALUES('$fname','$lname','$email','$password','$role_as')";
        $query_run = mysqli_query($con, $query);

        if($query_run) {
            $_SESSION['message'] = 'Admin/USER added Successfully!';
            header('Location: viewRegister.php');
            exit(0);
        }
        else {
            $_SESSION['message'] = 'Something went wrong!';
            header('Location: viewRegister.php');
            exit(0);
        }
}

    if(isset($_POST['update_user'])){
        $user_id = $_POST['user_id'];
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role_as = $_POST['role_as'];


        $query = "UPDATE users  SET fname='$fname', lname='$lname', email='$email', password='$password', role_as='$role_as' WHERE id='$user_id'";
        $query_run = mysqli_query($con, $query);

        if($query_run) {
            $_SESSION['message'] = 'Updated successfully';
            header('Location: viewRegister.php');
            exit(0);
        }

    }
?>