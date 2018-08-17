<!DOCTYPE html>
<html>
<head>
	<title>Principal</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/bower_components/bootstrap/dist/css/bootstrap.min.css"?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/dist/css/AdminLTE.min.css"; ?>">
</head>
<body>
	<?php
	if($users){
	foreach ($users->result() as $users) { ?>
		<ul>
			
			<li><a href=""> <?= $users->username ?> </a></li>

		</ul>


  	<?php }

  }else {
  		echo "<p>Error en la aplicacion</p>";
  } ?>

	<h1>You have successfully started! :D</h1>
	<li type="buttom" name="logout" id="logout" class="btn btn-info pull-right"><a href="<?=site_url('login/logout') ?>">Logout</a></li>
</body>
</html>