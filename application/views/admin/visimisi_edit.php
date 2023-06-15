
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <form action="<?= site_url('visimisi/edit')?>" method="post">
        <div class="row">
            <div class="box box-info">
              <div class="box-header">
                  <h1 class="box-title">Edit Visi & misi - Admin</h1><br><br>
              </div>
              <div class="box-header">
                  <h3 class="box-title">Nama Calon</h3>
                  <div class="form-group">
                      <label for=""></label>
                      <select name="Id" id="" class="form-control">
                        <?php foreach ($row as $data):?>
                          <option value="<?= $data->id_kandidat?>" <?= $rows->id_kandidat == $data->id_kandidat ? 'selected' : ''?>><?= $data->nama_kandidat?></option>
                        <?php endforeach?>
                      </select>
                  </div>
              </div>
              <input type="hidden" name="Id_vm" value="<?= $rows->id_visimisi?>">
              <div class="box-header">
                <h3 class="box-title">Visi</h3>

              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
                <textarea name="Visi" id="editor1" rows="10" cols="80">
                          <?= $rows->visi?>
                </textarea>
              </div>
              <div class="box-header">
                <h3 class="box-title">Misi</h3>

              </div>
              <!-- /.box-header -->
              <div class="box-body pad">
                  <textarea name="Misi" id="editor2" rows="10" cols="80">
                        <?= $rows->misi?>
                  </textarea>
              </div>
              <div class="box-header">
                <a href="<?= site_url('visimisi')?>" class="btn btn-danger mr-3"><i class="fa fa-arrow-circle-left"></i>  Kembali</a>
                <button name="simpan" type="submit" class="btn bg-purple mt-3 mb-3"><i class="fa fa-save"></i>  simpan</button>
              </div>
          </div>
        </div>
        <div class="row">
          <div class="box box-info">
              
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
