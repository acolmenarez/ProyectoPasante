<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/bower_components/bootstrap/dist/css/bootstrap.min.css"?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/dist/css/AdminLTE.min.css"; ?>">
</head>
</head>
<body>
	 <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
            <div class="box-header with-border">
            
            </div>
            <div class="box-body">
             
              </button>
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info"><a href="<?=site_url('user/create') ?>">
               Register User</a>
              </button>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger"><a href="<?=site_url('user/edituser/1')?>">
               Edit User</a>
              </button>
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default"><a href="<? site_url('login/logout') ?>">Logout</a>
              </button>
           