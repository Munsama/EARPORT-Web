@extends('admin.master')

@section('judul')
Earport - Akun Petugas
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
    <h6 class="m-0 font-weight-bold text-primary">Tabel Data Akun Petugas</h6>
  </div>
  <div class="card-body">
     <div align="right">
      <button type="button" name="create_petugas" id="create_petugas" class="btn btn-success btn-sm">Tambah Petugas</button>
     </div>
     <br />
   <div class="table-responsive">
    <table class="table table-bordered table-hover" id="user_table">
           <thead>
            <tr>
            <th>No</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Email</th>
                <th>Role</th>
                <th>Jenis Kelamin</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
           </thead>
           <tfoot>
            <tr>
            <th>No</th>
                <th>Nama Lengkap</th>
                <th>Username</th>
                <th>Email</th> 
                <th>Role</th>
                <th>Jenis Kelamin</th>
                <th>No. HP</th>
                <th>Alamat</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
           </tfoot>
           <tbody>
           </tbody>
       </table>
   </div>
  </div>

<!-- Modal Tambah -->
<div id="formModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
   <h4 class="modal-title">Tambah Akun Petugas</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
         <span id="form_result"></span>
         <form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label class="control-label col-md-12" >Nama Lengkap : </label>
            <div class="col-md-12">
             <input requiered type="text" name="name" id="name" class="form-control" />
            </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-12">Username : </label>
            <div class="col-md-12">
             <input required type="text" name="username" id="username" class="form-control" />
            </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-12">Email : </label>
            <div class="col-md-12">
             <input required type="email" name="email" id="email" placeholder="Masukkan Email" class="form-control" />
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-12">Password : </label>
            <div class="col-md-12">
             <input required type="password" name="password" id="password" placeholder="Masukkan Password" class="form-control" />
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-12">Role : </label>
            <div class="col-md-12">
             <input readonly type="text" name="role" id="role" value="petugas" class="form-control" />
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-12"> Jenis Kelamin</label>
            <div class="col-md-12">
            <select required class="form-control" name ="jenis_kelamin" id="jenis_kelamin" >
            <option value="">Pilih Jenis Kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            </div>
          </div>

           <div class="form-group">
            <label class="control-label col-md-12">Nomor Telepon : </label>
            <div class="col-md-12">
             <input required type="text" name="no_hp" id="no_hp" class="form-control" />
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-12">Alamat: </label>
            <div class="col-md-12">
             <textarea required name="alamat" id="alamat" class="form-control" rows="3" placeholder="Masukkan Alamat"></textarea>
            </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-12">Select Profile Image : </label>
            <div class="col-md-12">
             <input required type="file" name="image" id="image" />
             <span id="store_image"></span>
            </div>
           </div>
           <br />
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
<div id="confirmModal" class="modal fade" role="dialog">
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

 $('#user_table').DataTable({
  processing: true,
  serverSide: true,
  ajax:{
   url: "{{ route('crud_petugas.index') }}",
  },
  columns:[
    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
   {data: 'name', name: 'name'},
   {data: 'username', name: 'username'},
   {data: 'email', name: 'email'},
    {data: 'role', name: 'role'},
    {data: 'jenis_kelamin', name: 'jenis_kelamin'},
    {data: 'no_hp', name: 'no_hp'},
    {data: 'alamat', name: 'alamat'},
   { data: 'image', name: 'image',
    render: function(data, type, full, meta){
     return "<img src={{ URL::to('/') }}/images/" + data + " width='70' class='img-thumbnail' />";
    },
    orderable: false
   },
   { data: 'action', name: 'action',
    orderable: false
   }
  ]
 });

 $('#create_petugas').click(function(){
  $('.modal-title').text("Tambah Akun Petugas");
     $('#action_button').val("Tambah");
     $('#action').val("Tambah");
     $('#formModal').modal('show');
 });

 $('#sample_form').on('submit', function(event){
  event.preventDefault();
  if($('#action').val() == 'Tambah')
  {
   $.ajax({
    url:"{{ route('crud_petugas.store') }}",
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
      $('#user_table').DataTable().ajax.reload();
     }
     $('#form_result').html(html);
    }
   })
  }

  if($('#action').val() == "Edit")
  {
   $.ajax({
    url:"{{ route('crud_petugas.update') }}",
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
      $('#user_table').DataTable().ajax.reload();
     }
     $('#form_result').html(html);
    }
   });
  }
 });

 $(document).on('click', '.edit', function(){
  var id = $(this).attr('id');
  $('#form_result1').html('');
  $.ajax({
   url:"crud_petugas/"+id+"/edit",
   dataType:"json",
   success:function(html){
    $('#name').val(html.data.name);
    $('#username').val(html.data.username);
    $('#email').val(html.data.email);
    $('#password').val(html.data.password);
    $('#role').val(html.data.role);
    $('#no_hp').val(html.data.no_hp);
    $('#jenis_kelamin').val(html.data.jenis_kelamin);
    $('#alamat').val(html.data.alamat);
    $('#store_image').html("<img src={{ URL::to('/') }}/images/" + html.data.image + " width='70' class='img-thumbnail' />");
    $('#store_image').append("<input type='hidden' name='hidden_image' value='"+html.data.image+"' />");
    $('#hidden_id').val(html.data.id);
    $('.modal-title').text("Edit Akun Petugas");
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
   url:"crud_petugas/destroy/"+user_id,
   beforeSend:function(){
    $('#ok_button').text('Hapus');
   },
   success:function(data)
   {
    setTimeout(function(){
     $('#confirmModal').modal('hide');
     $('#user_table').DataTable().ajax.reload();
    }, 2000);
   }
  })
 });

});
</script>
@endsection