$(document).ready(() => {
  $("#fmain").submit(function (ev) {
    ev.preventDefault();
    const form = new FormData(this);
    $.LoadingOverlay("show");
    $.ajax({
      method: 'post',
      url: `<?= base_url() ?>admin/footer/update`,
      data: form,
      cache: false,
      contentType: false,
      processData: false,
    }).done((data) => {
      Toast.fire({
        icon: 'success',
        title: 'Data berhasil disimpan'
      })
      setTimeout(() => {
        window.location.reload();
      }, 3000)
    }).fail(($xhr) => {
      Toast.fire({
        icon: 'error',
        title: 'Data gagal disimpan'
      })
    }).always(() => {
      $.LoadingOverlay("hide");
    })
  });



  function dynamic() {
    const table_html = $('#dt_basic');
    table_html.dataTable().fnDestroy()
    const new_table = table_html.DataTable({
      "ajax": {
        "url": "<?= base_url()?>admin/footer/ajax_data/",
        "data": null,
        "type": 'POST'
      },
      "processing": true,
      "serverSide": true,
      "responsive": true,
      "lengthChange": true,
      "autoWidth": false,
      "columns": [
        { "data": null },
        { "data": "nama" },
        {
          "data": "icon", render(data, type, full, meta) {
            return `<i class="${data}"></i>${data}`
          }
        },
        {
          "data": "link", render(data, type, full, meta) {
            return `<a href="${data}">${data}</i>`
          }
        },
        { "data": "status_str" },
        {
          "data": "id", render(data, type, full, meta) {
            return `<div class="pull-right">
                <button class="btn btn-primary btn-xs"
                                      data-id="${data}"
                                      data-nama="${full.nama}"
                                      data-icon="${full.icon}"
                                      data-status="${full.status}"
                                      data-link="${full.link}"
                                      data-toggle="modal" data-target="#tambahModal"
                                  onclick="Ubah(this)">
                  <i class="fa fa-edit"></i> Ubah
                </button>
                <button class="btn btn-danger btn-xs" onclick="Hapus(${data})">
                  <i class="fa fa-trash"></i> Hapus
                </button>
              </div>`
          }, className: "nowrap"
        }
      ],
      order: [
        [1, 'asc']
      ],
      columnDefs: [{
        orderable: false,
        targets: [0, 4]
      }],
    });
    new_table.on('draw.dt', function () {
      var PageInfo = table_html.DataTable().page.info();
      new_table.column(0, {
        page: 'current'
      }).nodes().each(function (cell, i) {
        cell.innerHTML = i + 1 + PageInfo.start;
      });
    });
  }
  dynamic();

  $("#btn-tambah").click(() => {
    $("#tambahModalTitle").text("Tambah Media Sosial");
    $('#id').val('');
    $('#nama').val('');
    $('#icon').val('');
    $('#link').val('');
    $('#status').val('1');
  });


  $("#ffoto").submit(function (ev) {
    ev.preventDefault();
    const form = new FormData(this);
    $.LoadingOverlay("show");
    $.ajax({
      method: 'post',
      url: '<?= base_url() ?>admin/footer/' + ($("#id").val() == "" ? 'insert' : 'update') + '_foto',
      data: form,
      cache: false,
      contentType: false,
      processData: false,
    }).done((data) => {
      Toast.fire({
        icon: 'success',
        title: 'Data berhasil disimpan'
      })
      dynamic();
    }).fail(($xhr) => {
      Toast.fire({
        icon: 'error',
        title: 'Data gagal disimpan'
      })
    }).always(() => {
      $.LoadingOverlay("hide");
      $('#tambahModal').modal('toggle')
    })
  });

  // hapus
  $('#OkCheck').click(() => {
    let id = $("#idCheck").val()
    $.LoadingOverlay("show");
    $.ajax({
      method: 'post',
      url: '<?= base_url() ?>admin/footer/delete_foto',
      data: {
        id: id
      }
    }).done((data) => {
      Toast.fire({
        icon: 'success',
        title: 'Data berhasil dihapus'
      })
      dynamic();
    }).fail(($xhr) => {
      Toast.fire({
        icon: 'error',
        title: 'Data gagal dihapus'
      })
    }).always(() => {
      $('#ModalCheck').modal('toggle')
      $.LoadingOverlay("hide");
    })
  })
});


const view_foto = (datas) => {
  $("#foto_modal").modal('toggle');
  $("#img-view").attr('src', `<?= base_url() ?>files/image/footer/${datas.dataset.foto}`)
}
// Click Hapus
const Hapus = (id) => {
  $("#idCheck").val(id)
  $("#LabelCheck").text('Form Hapus')
  $("#ContentCheck").text('Apakah anda yakin akan menghapus data ini?')
  $('#ModalCheck').modal('toggle')
}

// Click Ubah
const Ubah = (datas) => {
  const data = datas.dataset;
  $('#id').val(data.id);
  $('#nama').val(data.nama);
  $('#link').val(data.link);
  $('#status').val(data.status);
  $('#icon').val(data.icon);
  $("#tambahModalTitle").text("Ubah Media Sosial");
}