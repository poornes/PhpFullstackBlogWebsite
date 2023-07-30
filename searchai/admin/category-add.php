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
                    <h4>Add Category
                        <a href="viewRegister.php" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>

                <div class="card-body">
                <form action="code.php" method="POST">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Category Name</label>
                                <input type="text" name="name" required class="form-control">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Tool Name</label>
                                <input type="text" name="tool_name" required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Slug (URL)</label>
                                <input type="text" name="slug" required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Description</label>
                                <textarea type="text" rows="4" name="description" required class="form-control"></textarea>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="">Meta Title</label>
                                <input type="text" name="meta_title" required class="form-control">
                            </div>  
                            <div class="col-md-6 mb-3">
                                <label for="">Meta Description</label>
                                <textarea type="text" name="Meta_description" required class="form-control"></textarea>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Meta Keyword</label>
                                <textarea type="text" name="Meta_keyword" required class="form-control"></textarea>
                            </div>
                            </div><div class="col-md-6 mb-3">
                                <button type="btn" name="category_add" class="btn btn-primary">Add Category</button>
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