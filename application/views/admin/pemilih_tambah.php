
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <form action="<?= site_url('user/simpan')?>" method="post">
        <div class="row">
            <div class="box box-info">
              <div class="box-header">
                  <h1 class="box-title">Tambah User</h1><br><br>
                  <div class="col-lg-10">
                      <div class="form-group">
                        <label for="">Dusun</label>
                        <select name="Id_dusun" id="" class="form-control">
                        <?php foreach ($rows as $row):?>
                            <option value="<?= $row->id_dusun?>"><?= $row->nama?></option>
                        <?php endforeach?>
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="">Nama*</label>
                              <input name="Nama" type="text" class="form-control">
                      </div>
                      <div class="form-group">
                          <label for="">Email*</label>
                              <input name="Email" type="email" class="form-control">
                      </div>
                      <div class="form-group">
                          <label for="">Password*</label>
                              <input name="Password" type="password" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Level</label>
                        <select name="level" id="" class="form-control">
                            <option value="admin">Admin</option>
                            <option value="warga">Warga</option>
                        </select>
                      </div><br>
                      <a href="<?= site_url('user')?>" class="btn btn-danger mt-3 mb-3"><i class="fa fa-arrow-circle-left"></i>  kembali</a>
                      <button name="simpan" type="submit" class="btn bg-purple mt-3 mb-3"><i class="fa fa-save"></i>  simpan</button>
                  </div>
              </div>
            </div>  
              
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
