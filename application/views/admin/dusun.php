
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box">
            <div class="box-header">
              <h2 class="box-title">Dusun - Admin</h2><br>
              <?= $this->session->flashdata('message')?>
              <a href="<?= site_url('dusun/dusun_tambah')?>" class="btn btn-danger mb-2"><i class="fa fa-plus"></i>   Tambah Dusun</a>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1?>
                <?php foreach ($rows as $row) : ?>
                <tr>
                  <td><?= $no++?></td>
                  <td><?= $row->nama ?></td>
                  <td>
                    <a href="<?= site_url('dusun/dusun_edit/'. $row->id_dusun);?>" class="btn btn-sm btn-warning fa fa-pencil-square-o"></a>
                    <a href="<?= site_url('dusun/dusun_hapus/'. $row->id_dusun);?>" class="btn btn-sm btn-danger fa fa-trash" onclick="return confirm('yakin akan menghapus data?')"></a>
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
