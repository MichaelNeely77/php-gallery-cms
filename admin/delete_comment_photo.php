<?php include("includes/init.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php 

    if(empty($_GET['id'])) {
        
        redirect("comment_photo.php?id={comment->photo_id} ");
    }

    $comment = Comment::find_by_id($_GET['id']);

    if($comment) {

        $comment->delete();
        $session->message("The comment for photo {$photo->id} has been updated");
        redirect("comments.php");


    } else {
        redirect("comments.php");
    }




?>
       