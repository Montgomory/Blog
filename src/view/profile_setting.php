<html>
    <head>
        <title>Account Settings</title>
        <?php require_once('common/header.php') ?>
    </head>
    
    <body>
        <?php require_once("common/new_nav.php");
              require_once("common/include.php");
              session_start();
              $userInfo = getUserInfo($_SESSION['uid']);
        ?>

    <div class="container-fluid">
        <div class="bs-docs-section">
            
          <div class="col-lg-12">
            <br><br>
            <div class="page-header">
              <h2 id="forms" style="text-align: center">Edit your profile and personal information </h2> 
            </div>
          </div>
            
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2" >
        <div class="well bs-component">
          <form class="form-horizontal" method="post" action="manage_input/manage_user_info.php">
            <fieldset>
                <div class="col-md-12">
                  <input type="hidden" value="change" name="action"></input>
                </div> 
                
              <div class="form-group">
                <label for="inputPreferredName" class="col-lg-3 control-label">Preferred Name</label>
                <div class="col-lg-9">
                  <input type="text" class="form-control" name="pf_name" value ="<?php echo $userInfo['pf_name']; ?>">
                </div>
              </div>
              
              <div class="form-group">
                <label for="inputPreferredName" class="col-lg-3 control-label">Age</label>
                <div class="col-lg-9">
                  <input type="text" class="form-control" name="age" value ="<?php echo $userInfo['age']; ?>">
                </div>
              </div>
              
              <div class="form-group">
                <label for="inputPreferredName" class="col-lg-3 control-label">Address</label>
                <div class="col-lg-9">
                    <textarea rows="2" type="text" class="form-control" name="address" value ="<?php echo $userInfo['address']; ?>"> </textarea>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-lg-3 control-label">Gender</label>
                <div class="col-lg-9">
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" value="F">Female
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" value="M">Male
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="gender" value="I'd rather not say">I'd rather not say.
                    </label>
                  </div>
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-lg-3 control-label">Self Introduction</label>
                <div class="col-lg-9">
                    <textarea rows="4" type="text" class="form-control" name="intro" value ="<?php echo $userInfo['intro']; ?>"> </textarea>
                </div>
              </div>
              
              <input type="hidden" value="profile" name="action"></input>
              <div class="form-group">
                <div class="col-lg-12">
                  <button type="submit" style="margin-left:45%;" class="btn btn-primary" href="all_posts.php?uid='.$_GET['id']">Submit</button>
                </div>
              </div>
            </fieldset>
          </form>

        </div>
      </div>

            </div>
        </div>
    </div>