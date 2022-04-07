<div class="card card-primary card-outline">
  <div class="card-header">
    <div class="d-flex justify-content-between w-100">
      <div class="icheck-primary">
        <input type="checkbox" id="show_content" name="show_content" <?= in_array($show['value1'], ['0', null]) ? '' : 'checked' ?> form="fmain">
        <label for="show_content">
          Tampilkan Menu Visi dan Misi
        </label>
      </div>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <form id="fmain" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="main_judul">Judul</label>
            <input type="text" class="form-control" id="main_judul" name="main_judul" placeholder="Judul" value="<?= $judul['value1'] ?>" />
          </div>
          <div class="icheck-primary">
            <input type="checkbox" id="show_judul" name="show_judul" <?= in_array($judul['value2'], ['0', null]) ? '' : 'checked' ?>>
            <label for="show_judul">
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
      </div>
      <div class="form-group">
        <label for="main_visi">Visi</label>
        <textarea name="main_visi" id="main_visi" rows="3" class="form-control summernote" placeholder="Detail"><?= $visi['value1'] ?></textarea>
      </div>
      <div class="icheck-primary">
        <input type="checkbox" id="show_visi" name="show_visi" <?= in_array($visi['value2'], ['0', null]) ? '' : 'checked' ?>>
        <label for="show_visi">
          Visi
        </label>
      </div>
      <div class="form-group">
        <label for="main_misi">Misi</label>
        <textarea name="main_misi" id="main_misi" rows="3" class="form-control summernote" placeholder="Detail"><?= $misi['value1'] ?></textarea>
      </div>
      <div class="icheck-primary">
        <input type="checkbox" id="show_misi" name="show_misi" <?= in_array($misi['value2'], ['0', null]) ? '' : 'checked' ?>>
        <label for="show_misi">
          Misi
        </label>
      </div>
    </form>
  </div>
  <div class="card-footer">
    <button class="btn btn-primary btn-ef btn-ef-3 btn-ef-3c" type="submit" form="fmain"><i class="fa fa-save"></i> Simpan</button>
  </div>
</div>