<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/bower_components/bootstrap/dist/css/bootstrap.min.css"?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/dist/css/AdminLTE.min.css"; ?>">
  <style type="text/css">

     .loginbox{
          margin: 180px auto;
          width: 450px;
          position: relative;
          border-radius: 15px;
          background: #ffffff;
     } 
     body{
        background-color: rgb(209,209,209);
        width: 25%;
        margin: 180px auto;
      }
     
  </style>

</head>
<body>
 <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Log in</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="input" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="username" class="form-control" name="username" id="username" placeholder="username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="password" id="password"  placeholder="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" name="psw" id="psw" class="btn btn-info pull-right">Sign in</button>
         </div>
</body>
</html>