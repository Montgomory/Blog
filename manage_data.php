<html>
<?php include('config/config.php') ?>
<?php include('config/global.php') ?>
<?php include('fns/posts.php') ?>
 <?php 
    
    if (isset($_GET['post']) && ($id = $_GET['post']) ){
    deletePost($id);
}
    else if ($_POST['is_edit']){
    updatePost($_POST['id'], $_POST['heading'], $_POST['abstract'], $_POST['content']);
}
else{
    createNewPost($_POST['heading'], $_POST['abstract'], $_POST['content']);  
}
header( "Location: all_posts.php" );
?>
</html>