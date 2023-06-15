
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box">
            <div class="box-header">
              <h2 class="box-title">Dusun - Tambah</h2><br>
            </div>
            <div class="box-body">
              <div class="col-lg-6">
                  <div style="margin-bottom: 15px;">
                    <a href="<?= site_url('dusun')?>" class="btn btn-danger" style="margin-right:10px;"><i class="fa fa-arrow-circle-left"></i>   kembali</a>
                    <button id="btn_tambah_form" class="btn btn-danger mb-2"><i class="fa fa-plus-circle"></i>   Tambah Dusun</button>
                  </div>
                    <form action="<?= site_url('dusun/simpan')?>" method="post">
                      <table id="table_dusun" width="300px">
                        <tr>
                          <td>
                            <label for="nama_dusun">Nama Dusun</label>
                            <div class="input-group">
                              <div class="input-group-btn">
                                <!-- /btn-group -->
                                <input name="nama_dusun[]" id="nama" type="text" class="form-control">
                                <button id="kurang_dusun" type="button" class="btn btn-danger" disabled><i class="fa fa-minus"></i></button>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </table><br>
                      <button type="reset" class="btn bg-secondary mt-3 mb-3"><i class="fa fa-refresh"></i>  reset</button>
                      <button name="simpan" type="submit" class="btn bg-purple mt-3 mb-3"><i class="fa fa-save"></i>  simpan</button>
                      </form>
                </div>
            </div>
        </div>
      </div>
        <!-- ./col -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>

  </script>
