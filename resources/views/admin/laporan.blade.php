@extends('admin.master')

@section('judul')
Earport - Laporan
@endsection

@section ('AJAX')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endsection

@section('konten')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Laporan</h6>
  </div>
  <div class="card-body">
     <div align="right">
      <button type="button" name="create_laporan" id="create_laporan" class="btn btn-success btn-sm">Tambah Admin</button>
     </div>
     <br />
   <div class="table-responsive">
    <table class="table table-bordered table-hover" id="laporan_table">
           <thead>
            <tr>
              <th>No</th>
              <th>Pelapor</th>
              <th>Foto</th>
              <th>Kategori</th>
              <th>Alamat</th>
              <th>Deskripsi</th> 
              <th>Status</th>
              <th>Solusi</th>
              <th>Tanggal Kerja</th>
              <th>Tanggal Selesai</th>
              <th>Action</th>
            </tr>
           </thead>
           <tfoot>
            <tr>
              <th>No</th>
              <th>Pelapor</th>
              <th>Foto</th>
              <th>Kategori</th>
              <th>Alamat</th>
              <th>Deskripsi</th> 
              <th>Status</th>
              <th>Solusi</th>
              <th>Tanggal Kerja</th>
              <th>Tanggal Selesai</th>
              <th>Action</th>
            </tr>
           </tfoot>
           <tbody>
           </tbody>
       </table>

    </div>
  </div>

<!-- Modal Tambah -->
<div id="formModal" class="modal fade" status="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
   <h4 class="modal-title">Tambah Laporan</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
         <span id="form_result"></span>
         <form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
          @csrf

          <div class="form-group">
            <div class="col-md-12">
             <input type="hidden" name="id_user" id="id_user" value="{{Auth::user()->id}}" class="form-control" />
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-12">Upload Foto: </label>
            <div class="col-md-12">
             <input required type="file" name="image" id="image" />
             <span id="store_image"></span>
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-12"> Kategori</label>
            <div class="col-md-12">
            <select required class="form-control" name ="id_kategori" id="id_kategori" >
            <option value="">Pilih Kategori</option>
              @foreach ($category as $k)
              <option value="{{ $k->id }}">{{ $k->name }}</option>
              @endforeach
            </select>
            </div>
          </div>

           <div class="form-group">
            <label class="control-label col-md-12">Alamat: </label>
            <div class="col-md-12">
             <textarea required name="alamat" id="alamat" class="form-control" rows="3" placeholder="Masukkan Alamat"></textarea>
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-12">Deskripsi: </label>
            <div class="col-md-12">
             <textarea required name="deskripsi" id="deskripsi" class="form-control" rows="3" placeholder="Masukkan Deskripsi"></textarea>
            </div>
           </div>


           <div class="form-group">
            <label class="control-label col-md-12"> Status</label>
            <div class="col-md-12">
            <select class="form-control" name ="status" id="status" >
            <option value="">Pilih Status</option>
            <option value="Belum">Belum</option>
            <option value="Proses">Proses</option>
            <option value="Selesai">Selesai</option>
            </select>
            </div>
          </div>
          
          <div class="form-group">
            <label class="control-label col-md-12"> Solusi</label>
            <div class="col-md-12">
            <select class="form-control" name ="id_solusi" id="id_solusi" >
            <option value="">Pilih Solusi</option>
              @foreach ($solution as $s)
              <option value="{{ $s->id }}">{{ $s->name }}</option>
              @endforeach
            </select>
            </div>
          </div>       

          <div class="form-group">
          <label class="control-label col-md-12">Tanggal Kerja: </label>
            <div class="col-md-12">
             <input type="date" name="tgl_kerja" id="tgl_kerja" placeholder="Tanggal Kerja" class="form-control" />
            </div>
           </div>

           <div class="form-group">
           <label class="control-label col-md-12">Tanggal Selesai: </label>
            <div class="col-md-12">
             <input type="date" name="tgl_selesai" id="tgl_selesai" placeholder="Tanggal Selesai" class="form-control" />
            </div>
           </div>
          
           <div class="modal-footer">
            <input type="hidden" name="action" id="action" />
            <input type="hidden" name="hidden_id" id="hidden_id" />
            <input type="submit" name="action_button" id="action_button" class="btn btn-primary btn-sm" value="Tambah" />
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
           </div>
         </form>
        </div>
     </div>
    </div>
</div>

<!-- Modal Hapus -->
<div id="confirmModal" class="modal fade" status="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title">Konfirmasi</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                
            </div>
            <div class="modal-body">
                <a align="center" style="margin:0;">Anda Yakin Ingin Menghapus Data Ini?</a>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger btn-sm">Hapus</button>
                <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>


<script>
$(document).ready(function(){

 $('#laporan_table').DataTable({
  processing: true,
  serverSide: true,
  ajax:{
   url: "{{ route('crud_laporan.index') }}",
  },
  columns:[
    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
    {data: 'id_user', name: 'id_user'},
    { data: 'image', name: 'image',
      render: function(data, type, full, meta){
      return "<img src={{ URL::to('/') }}/images/" + data + " width='70' class='img-thumbnail' />";
    }, orderable: false },
    {data: 'id_kategori', name: 'id_kategori'},
    {data: 'alamat', name: 'alamat'},
    {data: 'deskripsi', name: 'deskripsi'},
    {data: 'status', name: 'status'},
    {data: 'id_solusi', name: 'id_solusi'},
    {data: 'tgl_kerja', name: 'tgl_kerja'},
    {data: 'tgl_selesai', name: 'tgl_selesai'},  
    {data: 'action', name: 'action', orderable: false}
  ]
 });

 $('#create_laporan').click(function(){
  $('.modal-title').text("Tambah Laporan");
     $('#action_button').val("Tambah");
     $('#action').val("Tambah");
     $('#formModal').modal('show');
});
 });

 $('#sample_form').on('submit', function(event){
  event.preventDefault();
  if($('#action').val() == 'Tambah')
  {
   $.ajax({
    url:"{{ route('crud_laporan.store') }}",
    method:"POST",
    data: new FormData(this),
    contentType: false,
    cache:false,
    processData: false,
    dataType:"json",
    success:function(data)
    {
     var html = '';
     if(data.errors)
     {
      html = '<div class="alert alert-danger">';
      for(var count = 0; count < data.errors.length; count++)
      {
       html += '<p>' + data.errors[count] + '</p>';
      }
      html += '</div>';
     }
     if(data.success)
     {
      html = '<div class="alert alert-success">' + data.success + '</div>';
      $('#sample_form')[0].reset();
      $('#laporan_table').DataTable().ajax.reload();
     }
     $('#form_result').html(html);
    }
   })
  }

  if($('#action').val() == "Edit")
  {
   $.ajax({
    url:"{{ route('crud_laporan.update') }}",
    method:"POST",
    data:new FormData(this),
    contentType: false,
    cache: false,
    processData: false,
    dataType:"json",
    success:function(data)
    {
     var html = '';
     if(data.errors)
     {
      html = '<div class="alert alert-danger">';
      for(var count = 0; count < data.errors.length; count++)
      {
       html += '<p>' + data.errors[count] + '</p>';
      }
      html += '</div>';
     }
     if(data.success)
     {
      html = '<div class="alert alert-success">' + data.success + '</div>';
      $('#sample_form')[0].reset();
      $('#store_image').html('');
      $('#laporan_table').DataTable().ajax.reload();
     }
     $('#form_result').html(html);
    }
   });
  }
 });

 $(document).on('click', '.edit', function(){
  var id = $(this).attr('id');
  $('#form_result').html('');
  $.ajax({
   url:"crud_laporan/"+id+"/edit",
   dataType:"json",
   success:function(html){
    $('#id_user').val(html.data.id_user);
    $('#store_image').html("<img src={{ URL::to('/') }}/images/" + html.data.image + " width='70' class='img-thumbnail' />");
    $('#store_image').append("<input type='hidden' name='hidden_image' value='"+html.data.image+"' />");
    $('#id_kategori').val(html.data.id_kategori);
    $('#alamat').val(html.data.alamat);
    $('#deskripsi').val(html.data.deskripsi);
    $('#status').val(html.data.status);
    $('#id_solusi').val(html.data.id_solusi);
    $('#tgl_kerja').val(html.data.tgl_kerja);
    $('#tgl_selesai').val(html.data.tgl_selesai);
    $('#hidden_id').val(html.data.id);
    $('.modal-title').text("Edit Laporan");
    $('#action_button').val("Edit");
    $('#action').val("Edit");
    $('#formModal').modal('show');
   }
  })
 });

 var user_id;

 $(document).on('click', '.delete', function(){
  user_id = $(this).attr('id');
  $('#confirmModal').modal('show');
 });

 $('#ok_button').click(function(){
  $.ajax({
   url:"crud_laporan/destroy/"+user_id,
   beforeSend:function(){
    $('#ok_button').text('Hapus');
   },
   success:function(data)
   {
    setTimeout(function(){
     $('#confirmModal').modal('hide');
     $('#laporan_table').DataTable().ajax.reload();
    }, 2000);
   }
  })
 });

</script>
@endsection