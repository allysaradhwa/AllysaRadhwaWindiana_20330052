
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box">
            <div class="box-header">
              <h2 class="box-title">Visi & misi - Admin</h2><br>
              <?= $this->session->flashdata('message')?>
              <a href="<?= site_url('visimisi/visimisi_tambah')?>" class="btn btn-danger fa fa-plus-circle"> Tambah visi & misi</a>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kandidat</th>
                  <th>Visi</th>
                  <th>misi</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no = 1;
                foreach ($rows as $row):;
                ?>
                <tr>
                  <td><?= $no++?></td>
                  <td><?= $row->nama_kandidat?></td>
                  <td><?= $row->visi?></td>
                  <td><?= $row->misi?></td>
                  <td>
                    <a href="<?= site_url('visimisi/visimisi_edit/'.$row->id_visimisi)?>" class="btn btn-sm btn-warning fa fa-pencil-square-o"></a>
                    <a href="<?= site_url('visimisi/visimisi_hapus/'.$row->id_visimisi)?>" class="btn btn-sm btn-danger fa fa-trash" onclick="return confirm('yakin akan menghapus data?')"></a>
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
