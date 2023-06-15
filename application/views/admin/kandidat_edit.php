
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box">
            <div class="box-header">
              <h2 class="box-title">Kandidat - Edit</h2><br><br>
            </div>
            <div class="box-body">
              <?= form_open_multipart('kandidat/edit')?>
                <div class="row">
                  <div class="col-lg-3">
                    <img src="<?= base_url('img/'.$rows->foto)?>">
                  </div>
                  <div class="col-lg-6">
                    <input type="hidden" name="id" value="<?= $rows->id_kandidat?>">
                    <div class="form-group">
                      <label>Nama kandidat</label>
                      <input type="text" name="Nama_kandidat" class="form-control" value="<?= $rows->nama_kandidat?>" readonly>
                    </div>
                    <div class="form-group">
                      <label>Nama calon</label>
                      <input type="text" name="Nama_calon" class="form-control" value="<?= $rows->nama_calon?>">
                    </div>
                    <div class="form-group">
                      <label>Ganti foto</label>
                      <input name="foto" type="file" class="form-control">
                    </div>
                  </div>
                </div><br>
                <div class="row">
                  <div class="col-lg-3">
                    <a href="<?= site_url('kandidat')?>" class="btn btn-danger" style="margin-right:10px;"><i class="fa fa-arrow-circle-left"></i>   kembali</a>
                    <button name="simpan" type="submit" class="btn bg-purple mt-3 mb-3"><i class="fa fa-save"></i>  update</button>
                  </div>
              </form>
            </div>
        </div>
      </div>
        <!-- ./col -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
