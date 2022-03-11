<div class="card card-primary card-outline">
  <div class="card-header">
    <div class="d-flex justify-content-between w-100">
      <div class="icheck-primary">
        <input type="checkbox" id="show_content" name="show_content" <?= in_array($show['value1'], ['0', null]) ? '' : 'checked' ?> form="fmain">
        <label for="show_content">
          Tampilkan Menu About Us
        </label>
      </div>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <form id="fmain" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
          <input type="hidden" name="temp_foto" value="<?= $foto['value1'] ?>">
          <div class="form-group">
            <label for="foto">Foto
              <?php if ($foto['value1']) : ?>
                <a href="#" data-foto="<?= $foto['value1'] ?>" onclick="view_gambar(this)">Lihat</a>
              <?php endif ?>
            </label>
            <input type="file" class="form-control" id="foto" name="foto" />
            <div class="icheck-primary">
              <input type="checkbox" id="show_foto" name="show_foto" <?= in_array($foto['value2'], ['0', null]) ? '' : 'checked' ?>>
              <label for="show_foto">
                Tampilkan Foto
              </label>
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-group">
            <label for="main_judul">Judul</label>
            <input type="text" class="form-control" id="main_judul" name="main_judul" placeholder="Judul" required value="<?= $judul['value1'] ?>" />
          </div>
          <div class="icheck-primary">
            <input type="checkbox" id="show_judul" name="show_judul" <?= in_array($judul['value2'], ['0', null]) ? '' : 'checked' ?>>
            <label for="show_judul">
              Tampilkan Judul
            </label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="main_detail">Detail</label>
        <textarea name="main_detail" id="main_detail" rows="3" class="form-control summernote" placeholder="Detail"><?= $detail['value1'] ?></textarea>
      </div>
      <div class="icheck-primary">
        <input type="checkbox" id="show_detail" name="show_detail" <?= in_array($detail['value2'], ['0', null]) ? '' : 'checked' ?>>
        <label for="show_detail">
          Tampilkan Detail
        </label>
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