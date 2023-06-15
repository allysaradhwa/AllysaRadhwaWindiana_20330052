
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box">
            <div class="box-header">
              <h2 class="box-title">User - Admin</h2><br>
              <?= $this->session->flashdata('message')?><br>
              <a href="<?= site_url('user/user_tambah')?>" class="btn btn-danger mb-2"><i class="fa fa-plus"></i>   Tambah User</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>                    
                  <th>No</th>
                  <th>Dusun</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Level</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  $no =1;
                  foreach ($rows as $row):
                ?>
                <tr>
                  <td><?= $no++?></td>
                  <td><?= $row->nama_dusun?></td>
                  <td><?= $row->nama_user?></td>
                  <td><?= $row->email?></td>
                  <td><?= $row->level?></td>
                  <td>
                    <?php if ($row->status==1){ ?>
                      <button type="button" class="btn btn-warning"><i class="fa fa-check"></i>  Telah memilih</button>
                    <?php }else {?>
                      <button type="button" class="btn btn-danger"><i class="fa fa-check"></i>  Belum memilih</button>
                    <?php }?>
                  </td>
                  <td>
                    <a href="<?= site_url('user/user_edit/'. $row->id_user);?>" class="btn btn-sm btn-warning fa fa-pencil-square-o"></a>
                    <a href="<?= site_url('user/user_hapus/'. $row->id_user);?>" class="btn btn-sm btn-danger fa fa-trash" onclick="return confirm('yakin akan menghapus data?')"></a>
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
