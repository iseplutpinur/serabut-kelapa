<div class="row">

  <div class="col-md-6">
    <div class="card card-primary card-outline">
      <div class="card-header">
        <div class="d-flex justify-content-between w-100">
          <div class="icheck-primary">
            <input type="checkbox" id="show_content" name="show_content" <?= in_array($show['value1'], ['0', null]) ? '' : 'checked' ?> form="fmain">
            <label for="show_content">
              Tampilkan Footer
            </label>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <form id="fmain" enctype="multipart/form-data">


          <div class="form-group">
            <label for="main_alamat">Alamat</label>
            <input type="text" class="form-control" id="main_alamat" name="main_alamat" placeholder="Alamat" required value="<?= $alamat['value1'] ?>" />
          </div>
          <div class="icheck-primary">
            <input type="checkbox" id="show_alamat" name="show_alamat" <?= in_array($alamat['value2'], ['0', null]) ? '' : 'checked' ?>>
            <label for="show_alamat">
              Tampilkan Alamat
            </label>
          </div>

          <div class="form-group">
            <label for="main_copyright">Copyright</label>
            <input type="text" class="form-control" id="main_copyright" name="main_copyright" placeholder="Copyright" required value="<?= $copyright_crud['value1'] ?>" />
          </div>
          <div class="icheck-primary">
            <input type="checkbox" id="show_copyright" name="show_copyright" <?= in_array($copyright_crud['value2'], ['0', null]) ? '' : 'checked' ?>>
            <label for="show_copyright">
              Tampilkan Copyright
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
          <h3 class="card-title">List Media Sosial</h3>
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
              <th>Icon</th>
              <th>Link</th>
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
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Sosmed" required />
          </div>
          <div class="form-group">
            <label for="icon">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon" placeholder="Icon" required />
            <small>Icon bisa diambil dari: <a href="http://fontawesome.com/v5.15/icons?d=free">http://fontawesome.com/v5.15/icons?d=free</a></small>
          </div>
          <div class="form-group">
            <label for="link">Icon</label>
            <input type="url" class="form-control" id="link" name="link" placeholder="Link" required />
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