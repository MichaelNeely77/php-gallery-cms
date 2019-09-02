<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php 

$comment = Comment::find_by_id($_GET['id']);


if(empty($_GET['id'])) {
    redirect("comments.php");
} 



    if(isset($_POST['update_comment'])) {

        if($comment) {
            $comment->id = $_POST['id'];
            $comment->author = $_POST['author'];
            $comment->body = $_POST['body'];
            
            // if(empty($_FILES['comment_image'])) {
            //     $comment->save();
            // } else {
            //     $comment->set_file($_FILES['comment_image']);
            //     $comment->upload_photo();
            //     $comment->save();

            //     redirect("edit_comment.php?id={$comment->id}");

            // }
            

            
        }

}



$comments = Comment::find_all();

?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->

            <?php include("includes/top_nav.php"); ?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <?php include("includes/side_nav.php"); ?>
            <!-- /.navbar-collapse -->
        </nav>



        <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Comments
                        <small>Subheading</small>
                    </h1>

                    <form action="" method="post" enctype="multipart/form-data">


                    <div class="col-md-12">

                        <div class="form-group">
                            <input type="file" name="comment_image" >
                        </div>



                        <div class="form-group">
                            <label for="first_name">Author</label>
                            <input type="text" name="first_name" class="form-control" value="<?php echo $comment->author; ?>">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Body</label>
                            <input type="text" name="last_name" class="form-control" value="<?php echo $comment->body; ?>">
                        </div>
                        
                        <div class="form-group">
                            <a class="btn btn-danger" href="edit_comment.php?id=<?php echo $comment->id; ?>">Delete Comment</a>
                            <input type="submit" value="Update comment" name="update_comment" class="btn btn-primary pull-right">
                        </div>


                        
                        

                        
                    </div>

                    

                    </form>

                </div>
            </div>
<!-- /.row -->

</div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>