
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box">
            <div class="box-header">
              <h2 class="box-title">Suara - Admin</h2><br>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama user</th>
                  <th>Nama Kandidat</th>
                  <th>Created</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $no= 1;
                  foreach ($rows as $row):
                ?>
                <tr>
                  <td><?= $no++?></td>
                  <td><?= $row->nama?></td>
                  <td><?= $row->nama_kandidat ?></td>
                  <td><?= $row->create?></td>
                  <td>
                      <a href="<?= site_url('suara/suara_hapus/'.$row->id_suara)?>" class="btn btn-sm btn-danger fa fa-trash" onclick="return confirm('yakin akan menghapus data?')"></a>
                  </td>
                </tr>
                <?php endforeach?>
                </tbody>
              </table>
        </div>







      </div>
        <!-- ./col -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
