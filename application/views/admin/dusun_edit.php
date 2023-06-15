
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="box">
            <div class="box-header">
              <h2 class="box-title">Dusun - Edit</h2><br>
            </div>
            <div class="box-body">
              <div class="col-lg-6">
                    <form action="<?= site_url('dusun/edit')?>" method="post">
                      <table id="table_dusun" width="300px">
                        <tr>
                          <td>
                            <label for="nama_dusun">Nama Dusun</label>
                            <div class="input-group">
                              <input name="id" type="hidden" value="<?= $row->id_dusun?>">
                              <div class="input-group-btn">
                                <!-- /btn-group -->
                                <input name="nama_dusun" id="nama" type="text" class="form-control" value="<?= $row->nama?>">
                              </div>
                            </div>
                          </td>
                        </tr>
                      </table><br>
                      <a href="<?= site_url('dusun')?>" class="btn btn-danger" style="margin-right:10px;"><i class="fa fa-arrow-circle-left"></i>   kembali</a>
                      <button name="simpan" type="submit" class="btn bg-purple mt-3 mb-3"><i class="fa fa-save"></i>  update</button>
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
