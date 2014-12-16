<?php include('config/config.php') ?>
<?php include('config/global.php') ?>

<html>
    <head>
        <title><?php echo SITE_TITLE ?></title>
        <?php require_once('common/header.php') ?>
    </head>
    <body>
        <?php require_once("common/nav2.php")?>
        <div class="container-fluid" style="background-image:url('img/background3.jpg'); background-size: 100% 100%;">
            <br><br><br>
            
            <div class="col-md-8 col-md-offset-1"><h2 style="font-family:Cursive">HL's Blog</h2></div>
            <?php require_once("common/nav.php") ?>
            <br><br>

            <div class="row">
                <?php require_once('common/left_panel.php') ?>
                <div class="col-md-9">
                    <div class="panel-default post-panel">
                        <br><br>
                        
                        <form class="form-horizontal" role="form" >
                            <div class="form-group-lg" >
                            <label for="" class="col-md-2 control-label label-lg">HEADING</label>
                            <div class="col-md-10">
                            <input type="heading" class="form-control" id="" placeholder="Enter your heading here">
                            </div>
                            </div>
                            <br>
                  
                        <div class="col-md-10 col-md-offset-2">
                        <div class="btn-group" role="group" aria-label="Align">
                            <button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-align-left" aria-hidden="true"></span></button>
                            <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-center" aria-hidden="true"></span></button>
  <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-align-right" aria-hidden="true"></span></button>
                        </div>
                            </div>
                        
                        <br><br><br>
                        
                        
                            <div class="form-group-lg">
                            <label for="" class="col-md-2 control-label label-lg">ABSTRACT</label>
                            </div>
                            <div class="col-md-10">
                            <textarea class="form-control" rows="10"></textarea>
                            </div>
                            
                            <br>
                            
                    
                            <div class="form-group-lg">
                            <label for="" class="col-md-2 control-label label-lg">CONTENT</label>
                            </div>
                            <div class="col-md-10">
                            <textarea class="form-control" rows="20"></textarea>
                            </div>
                            
                            <br>
                            <br>
                            <div class="form-group-lg">
                                <div class="col-md-10 col-md-offset-2">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php require_once('common/footer.php') ?>
        </div>
    </body>
</html>