<?php 
    include('config/dbcon.php');
    include('authentication.php');
    include('includes/header.php');

?>
<div class="container-fluid px-4">
    <div class="row mt-5">
        <div class="col-md-12">

        <?php 
            include('message.php');
        ?>
            <div class="card">
                <div class="card-header">
                    <h4>Edit Category
                        <a href="category-view.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">

                    <?php 
                    if(isset($_GET['id'])){
                        $category_id = $_GET['id'];
                        $category_edit = "SELECT * FROM category WHERE  id='$category_id' LIMIT 1";
                        $category_run = mysqli_query($con, $category_edit);
                        
                        if(mysqli_num_rows($category_run)>0) {
                            $row = mysqli_fetch_array($category_run);
                            ?>
                                <form action="code.php" method="POST">

                                <input type='hidden' value="<?= $row['id']?>">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="">Name</label>
                                            <input type="text" name="name"  value="<?= $row['name']?>" required class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Slug (URL)</label>
                                            <input type="text" name="slug" value="<?= $row['slug']?>"  required class="form-control">
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="">Description</label>
                                            <textarea type="text" rows="4" name="description" <?= $row['description']?> required class="form-control"></textarea>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="">Meta Title</label>
                                            <input type="text" name="meta_data" value="<?= $row['meta_data']?>"  required class="form-control">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Meta Description</label>
                                            <textarea type="text" name="meta_description" <?=$row['meta_description']?>  required class="form-control"></textarea>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Meta Keyword</label>
                                            <textarea type="text" name="meta_keyword" <?=$row['meta_keyword']?>  required class="form-control"></textarea>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <button type="btn" name="category_update" class="btn btn-primary">Update Category</button>
                                        </div>
                                    </div>
                                </form>
                            <?php
                        }
                        else {
                            ?>
                            <h4>No data found</h4>
                            <?php 

                        }
                    }
                    ?>

                
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    include('includes/footer.php');
    include('includes/script.php');
?>