<div class="row">
  <div class="col-md-6">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <div class="d-flex justify-content-between w-100">
          <div class="icheck-primary">
            <input type="checkbox" id="show_content" name="show_content" <?= in_array($show['value1'], ['0', null]) ? '' : 'checked' ?> form="fmain">
            <label for="show_content">
              Tampilkan Menu Produk
            </label>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form id="fmain" enctype="multipart/form-data">

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



          <div class="form-group">
            <label for="main_sub_judul">Sub Judul</label>
            <input type="text" class="form-control" id="main_sub_judul" name="main_sub_judul" placeholder="Sub Judul" required value="<?= $sub_judul['value1'] ?>" />
          </div>
          <div class="icheck-primary">
            <input type="checkbox" id="show_sub_judul" name="show_sub_judul" <?= in_array($sub_judul['value2'], ['0', null]) ? '' : 'checked' ?>>
            <label for="show_sub_judul">
              Tampilkan Sub Judul
            </label>
          </div>
        </form>
      </div>
      <div class="card-footer">
        <button class="btn btn-primary btn-ef btn-ef-3 btn-ef-3c" type="submit" form="fmain"><i class="fa fa-save"></i> Simpan</button>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <div class="d-flex justify-content-between w-100">
          <h3 class="card-title">List Produk</h3>
          <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahModal" id="btn-tambah"><i class="fa fa-plus"></i> Tambah</button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="dt_basic" class="table table-bordered table-striped table-hover">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Foto</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- modal -->
<!-- view foto -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header outline-info">
        <h5 class="modal-title text-center" id="tambahModalTitle"></h5>
      </div>
      <div class="modal-body">
        <form action="" id="ffoto" method="post">
          <input type="hidden" id="id" name="id">
          <input type="hidden" id="temp_foto" name="temp_foto">
          <div class="form-group">
            <label for="foto">Foto</label>
            <input type="file" class="form-control-file" id="foto" name="foto" accept="image/png, image/jpeg, image/JPG, image/PNG, image/JPEG">
          </div>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Produk" required />
          </div>
          <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea class="form-control" id="keterangan" rows="3" name="keterangan" placeholder="Keterangan" required></textarea>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control">
              <option value="1">Dipakai</option>
              <option value="0">Tidak Dipakai</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary btn-ef btn-ef-3 btn-ef-3c" type="submit" form="ffoto"><i class="fa fa-save"></i> Simpan</button>
        <button class="btn btn-success btn-ef btn-ef-3 btn-ef-3c" data-dismiss="modal"><i class="fa fa-arrow-left"></i> Kembali</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="foto_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content bg-dark">
      <div class="modal-header outline-info">
        <h5 class="modal-title text-center">Foto</h5>
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