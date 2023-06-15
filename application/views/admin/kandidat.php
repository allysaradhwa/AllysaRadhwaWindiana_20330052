
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box">
            <div class="box-header">
              <h2 class="box-title">kandidat - Admin</h2><br>
              <?= $this->session->flashdata('message')?>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Kandidat</th>
                  <th>Nama Calon</th>
                  <th>Foto</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1?>
                <?php foreach ($rows as $row) : ?>
                <tr>
                  <td><?= $no++?></td>
                  <td><?= $row->nama_kandidat ?></td>
                  <td><?= $row->nama_calon ?></td>
                  <td>
                    <img src="<?= base_url('img/'.$row->foto)?>" width="100">
                  <td>
                    <a href="<?= site_url('kandidat/kandidat_edit/'. $row->id_kandidat);?>" class="btn btn-sm btn-warning fa fa-pencil-square-o"></a>
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
