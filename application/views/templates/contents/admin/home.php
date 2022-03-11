<div class="card card-primary card-outline">
  <div class="card-header">
    <div class="d-flex justify-content-between w-100">
      <div class="icheck-primary">
        <input type="checkbox" id="show_content" name="show_content" <?= in_array($show['value1'], ['0', null]) ? '' : 'checked' ?> form="fmain">
        <label for="show_content">
          Tampilkan Menu Home
        </label>
      </div>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <form id="fmain" enctype="multipart/form-data">
      <div class="row">

        <div class="col-md-6">
          <input type="hidden" name="temp_logo" value="<?= $logo['value1'] ?>">
          <div class="form-group">
            <label for="logo">Logo
              <?php if ($logo['value1']) : ?>
                <a href="#" data-foto="<?= $logo['value1'] ?>" onclick="view_gambar(this)">Lihat</a>
              <?php endif ?>
            </label>
            <input type="file" class="form-control" id="logo" name="logo" />
            <div class="icheck-primary">
              <input type="checkbox" id="show_logo" name="show_logo" <?= in_array($logo['value2'], ['0', null]) ? '' : 'checked' ?>>
              <label for="show_logo">
                Tampilkan Logo
              </label>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <input type="hidden" name="temp_jumbotron" value="<?= $foto_jumbotron['value1'] ?>">
          <div class="form-group">
            <label for="jumbotron">Foto Background Home
              <?php if ($foto_jumbotron['value1']) : ?>
                <a href="#" data-foto="<?= $foto_jumbotron['value1'] ?>" onclick="view_gambar(this)">Lihat</a>
              <?php endif ?>
            </label>
            <input type="file" class="form-control" id="jumbotron" name="jumbotron" />
            <div class="icheck-primary">
              <input type="checkbox" id="show_foto_jumbotron" name="show_foto_jumbotron" <?= in_array($foto_jumbotron['value2'], ['0', null]) ? '' : 'checked' ?>>
              <label for="show_foto_jumbotron">
                Tampilkan Foto Background Home
              </label>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="main_judul_utama">Judul</label>
            <input type="text" class="form-control" id="main_judul_utama" name="main_judul_utama" placeholder="Judul" value="<?= $judul_utama['value1'] ?>" />
          </div>
          <div class="icheck-primary">
            <input type="checkbox" id="show_judul_utama" name="show_judul_utama" <?= in_array($judul_utama['value2'], ['0', null]) ? '' : 'checked' ?>>
            <label for="show_judul_utama">
              Tampilkan Judul
            </label>
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-group">
            <label for="main_sub_judul">Sub Judul</label>
            <input type="text" class="form-control" id="main_sub_judul" name="main_sub_judul" placeholder="Sub Judul" value="<?= $sub_judul['value1'] ?>" />
          </div>
          <div class="icheck-primary">
            <input type="checkbox" id="show_sub_judul" name="show_sub_judul" <?= in_array($sub_judul['value2'], ['0', null]) ? '' : 'checked' ?>>
            <label for="show_sub_judul">
              Tampilkan Sub Judul
            </label>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="main_btn_title">Tombol</label>
            <textarea class="form-control" id="main_btn_title" rows="1" name="main_btn_title" id="main_btn_title" placeholder="Nama Tombol"><?= $btn_title['value1'] ?></textarea>
          </div>
          <div class="icheck-primary">
            <input type="checkbox" id="show_btn_title" name="show_btn_title" <?= in_array($btn_title['value2'], ['0', null]) ? '' : 'checked' ?>>
            <label for="show_btn_title">
              Tampilkan Tombol
            </label>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="main_btn_link">Tombol Link</label>
            <input type="text" class="form-control" id="main_btn_link" name="main_btn_link" placeholder="ex: http://google.com" value="<?= $btn_link['value1'] ?>" />
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