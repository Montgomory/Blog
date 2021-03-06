<html>
    <head>
        <title> Hl's Blog </title>
        <?php require_once('common/header.php') ?>
    </head>
    <body>
        <div class="container-fluid">
        <?php   
        require_once("common/include.php");
        require_once("common/new_nav.php");
        ?>
            <?php 
                if (!(isset($_GET['post']))){
                    header( "Location: all_posts.php" );
                }
                $pid = $_GET['post'];
                $curr_post = getSinglePost($pid);
                $uid = $curr_post['uid'];
            ?>
            <?php require_once("common/page_header.php");?>
            <div class="row">
                <?php require_once('common/left_panel.php');?>
            
                <div class="col-md-9">
                
                    <div class="jumbotron">
                        <h2 class="post-heading"> <?php echo $curr_post['heading']; ?></h3>
                        <p style="text-align:center"><small><?php echo $curr_post['date'];?></small></p>
                        <br>
                        <p class="lead"> <?php echo $curr_post['abstract']; ?></p>
                        <p> <?php echo $curr_post['content']; ?> </p>
                    </div>
                <?php
                if ( $uid == $_SESSION['uid']) {
                    echo '
                    <div class="container-fluid" style="margin-bottom: 30px;">
                        <div class="col-md-12" style="text-align:center;">
                            <a class="btn btn-success" style="text-decoration:none;" href="new_post.php?post='. $_GET['post'].' ">Edit</a>
                            <a class="btn btn-danger" style="text-decoration:none;" href="manage_input/manage_post.php?post='. $_GET['post'].' " onsubmit="return confirmDelete();">Delete</a>                   
                        </div>
                    </div>';
                }
                ?>
                
                    <div class="jumbotron">
                        <div class="MyCommentHeading"><h3>Comments</h3></div>
                        <?php 
                        $comments = getComments($pid);
                        foreach ($comments as $cmt){
                            $array = getUserInfo($cmt['uid']);
                            $pfname = $array['pf_name'];
                            $str =
                            '<div class="MyCommentPanel">
                                <span class="glyphicon glyphicon-user" aria-hidden=true> '.$pfname.'</span>
                                <br>
                                <div class="comment-date">
                                    <small>Date: '.$cmt['date'].'</small><br>
                                    <p>'.htmlspecialchars($cmt['content']).'</p>
                                </div>
                            </div>';
                            echo $str;
                            if ($cmt['uid'] == $_SESSION['uid']){
                                echo '
                                <form role="form" method="POST" action="manage_input/manage_comment.php" onsubmit="return confirmDelete();">
                                    <div class="wrapper text-center">
                                        <input type="hidden" value="'.$cmt['cid'].'" name = "cid">
                                        <input type=hidden name="pid" value="'.$pid.'" >
                                        <button class="btn-sm btn-danger" type="submit">Delete</button>
                                    </div>
                                </form>';
                            }
                        }
                        ?>
                        
                        <form role="form" action="manage_input/manage_comment.php" method="post">
                            <br><br>
                            <textarea class="form-control" rows="10" name="comment" placeholder="Your Comment Here..."></textarea>
                            <br>
                            <input type=hidden name="uid" <?php echo "value=".$_SESSION['uid'];?> >
                            <input type=hidden name="pid" <?php echo "value=".$pid;?> >
                            <div class="wrapper text-center">
                                <button type="submit" class="btn btn-primary" >Submit</button>
                            </div>
                        </form>
                    </div>
                
                    
                </div>
            </div>
            
            <?php require_once('common/footer.php') ?>
        </div>

    </body>
</html>