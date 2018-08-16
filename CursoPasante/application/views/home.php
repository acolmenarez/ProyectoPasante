<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/bower_components/bootstrap/dist/css/bootstrap.min.css"?> ">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assets/dist/css/AdminLTE.min.css"; ?>">
</head>
<body>
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>User</th>
                  <th>Email</th>
                  <th>Type</th>
                </tr>

                  <?php
                  foreach($link->result() as $row){
                      
                  echo "</thead>";
                  echo "<tbody>";
                      echo  "<tr>";
                             echo "<td>".$row->username."</td>";
                             echo "<td>".$row->email."</td>";
                             echo "<td>".$row->type."</td>";
                     echo "</tr>";

                  echo "</tfoot>";

                 }
                ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
</body>
</html>