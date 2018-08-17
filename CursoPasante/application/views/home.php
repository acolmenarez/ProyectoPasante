
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
                  <th>Options</th>
                </tr>
                      <?php
                          if($users){
                              foreach ($users->result() as $users) { ?>
                      
                  </thead>
                        <tbody>
                            <tr>
                                <td><?= $users->username ?></td>
                                <td><?= $users->email ?></td>
                                <td><?= $users->type ?></td>
                                <td><a type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger" href="<?=base_url()?>user/edit/<?=$users->idUser?>"> Edit
                                 </a>
                                 <a type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning" href="<?=base_url()?>user/delete/<?=$users->idUser?>"> Delete 
                                 </a>

                                </td>
                           </tr>

                  </tfoot>

                 <?php }

                        }else {
                               echo "<p>Error en la aplicacion</p>";
                                 } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
           </div>
          </div>
        </div>
      </div>


</body>
</html>