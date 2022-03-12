<div class="card card-primary card-outline">
  <div class="card-header">
    <div class="d-flex justify-content-between w-100">
      <h3 class="card-title">Pengaturan Aplikasi</h3>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <form id="fmain" enctype="multipart/form-data">
      <div class="row">

        <div class="col-md-6">
          <input type="hidden" name="temp_icon" value="<?= $icon_peng['value1'] ?>">
          <div class="form-group">
            <label for="icon">Icon Aplikasi (Logo di halaman admin)
              <?php if ($icon_peng['value1']) : ?>
                <a href="#" data-foto="<?= $icon_peng['value1'] ?>" onclick="view_gambar(this)">Lihat</a>
              <?php endif ?>
            </label>
            <input type="file" class="form-control" id="icon" name="icon" />
          </div>
        </div>

        <div class="col-md-6">
          <input type="hidden" name="temp_favicon" value="<?= $icon_peng['value2'] ?>">
          <div class="form-group">
            <label for="favicon">Favicon Situs (Logo di samping judul situs)
              <?php if ($icon_peng['value2']) : ?>
                <a href="#" data-foto="<?= $icon_peng['value2'] ?>" onclick="view_gambar(this)">Lihat</a>
              <?php endif ?>
            </label>
            <input type="file" class="form-control" id="favicon" name="favicon" />
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="main_title">Judul Situs</label>
            <input type="text" class="form-control" id="main_title" name="main_title" placeholder="Nama Situs" value="<?= $title_peng['value1'] ?>" />
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-group">
            <label for="main_aplikasi">Nama Aplikasi</label>
            <input type="text" class="form-control" id="main_aplikasi" name="main_aplikasi" placeholder="Sub Judul" value="<?= $title_peng['value2'] ?>" />
          </div>
        </div>

        <div class="col-12">
          <div class="form-group">
            <label for="main_deskripsi">Deskripsi Situs</label>
            <textarea class="form-control" id="main_deskripsi" rows="3" name="main_deskripsi" id="main_deskripsi" placeholder="Deskripsi Situs"><?= $deskripsi_peng['value1'] ?></textarea>
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="card-footer">
    <button class="btn btn-primary btn-ef btn-ef-3 btn-ef-3c" type="submit" form="fmain"><i class="fa fa-save"></i> Simpan</button>
  </div>
</div>

<div class="modal fade" id="gambar_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header outline-info">
        <h5 class="modal-title text-center">Gambar</h5>
      </div>
      <div class="modal-body">
        <img src="" class="img-fluid" alt="" id="img-view">
      </div>
      <div class="modal-footer">
        <button class="btn btn-success btn-ef btn-ef-3 btn-ef-3c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Kembali</button>
      </div>
    </div>
  </div>
</div>