<html>
    <head>
        <title>Account Settings</title>
        <?php require_once('common/header.php') ?>
    </head>
    
    <body>
        <?php 
        require_once("common/new_nav.php");
        require_once("common/include.php");
        session_start();
        $userInfo = getUserInfo($_SESSION['uid']);
        ?>

        <div class="container-fluid">
            <div class="bs-docs-section">
              
                <div class="col-lg-12">
                    <br><br>
                    <div class="page-header">
                        <h2 id="forms" class="text-center">Change your password</h2>
                    </div>
                </div>
              
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2" >

                        <div class="well bs-component">
                            <form class="form-horizontal" method="post" onsubmit="javascript: return validateSecurityForm(this);" action="manage_input/manage_user_info.php">
                                <fieldset>
                                    <div class="col-md-12">
                                        <input type="hidden" value="security" name="action"></input>
                                    </div>   

                                  
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">New Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" name="pass1" class="form-control" id="pass1" placeholder="Your new password">
                                        </div>
                                    </div>
                              
                                
                                    <div class="form-group">
                                        <label for="inputPassword" class="col-lg-3 control-label">Confirm Password</label>
                                        <div class="col-lg-9">
                                            <input type="password" name="pass2" class="form-control" id="pass2" onchange="checkPassSame(); return false;">
                                        </div>
                                    </div>
                                
                                  
                                    <div class="form-group">
                                      <div class="col-lg-12 text-center">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        <?php require_once('common/footer.php') ?>
        </div>
        
    </body>
</html>