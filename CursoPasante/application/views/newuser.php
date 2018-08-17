<!DOCTYPE html>
<html>
<head>
	<title>Registry</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/bower_components/bootstrap/dist/css/bootstrap.min.css"?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/dist/css/AdminLTE.min.css"; ?>">
</head>
<body>
	<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>Register</b>User</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new user</p>

    <form action="<?php echo base_url(); ?>user/createuser" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" id="username" placeholder="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" id="email" placeholder="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" id="password" placeholder="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="type" id="type" placeholder="type">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" name="register" id="register" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->


</body>
</html>