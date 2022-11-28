@extends('admin.master')

@section('judul')
Earport - Informasi Admin
@endsection

@section('AJAX')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endsection

@section('konten')

<div class="container-fluid">
 <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Admin</h6>
  </div>
  <div class="card-body">
  <div align="right">
  <a class="btn btn-success btn-sm" href="javascript:void(0)" id="createNewAdmin" style="margin-top:1%"> Tambah Admin</a>
     </div>
     <br />
    <div class="table-responsive">
      <table class="table table-bordered table-hover admin_table"  width="100%" cellspacing="0">

        <thead>
          <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>No. HP</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th>Aksi</th>
          </tr>
        </thead>

        <tfoot>
          <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>No. HP</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th>Aksi</th>
          </tr>
        </tfoot>
<tbody>
</tbody>
      </table>
    </div>
  </div>
</div>

</div>

<div id="ajaxModel" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
          <h4 class="modal-title" id="modelHeading"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <div class="modal-body">
        <form id="productForm" name="productForm" class="form-horizontal">
        <input type="hidden" name="status_id" id="status_id">

          <div class="form-group">
            <label class="control-label col-md-4" >Nama Lengkap : </label>
            <div class="col-md-8">
             <input type="text" name="name" id="name" placeholder="Masukkan Nama Lengkap" class="form-control" />
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-4">Username : </label>
            <div class="col-md-8">
             <input type="text" name="username" id="username" placeholder="Masukkan Username" class="form-control" />
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-4">Email : </label>
            <div class="col-md-8">
             <input type="email" name="email" id="email" placeholder="Masukkan Email" class="form-control" />
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-4">Password : </label>
            <div class="col-md-8">
             <input type="password" name="password" id="password" placeholder="Masukkan Password" class="form-control" />
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-4">Role : </label>
            <div class="col-md-8">
             <input readonly type="text" name="role" id="role" value="admin" class="form-control" />
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-4"> Jenis Kelamin</label>
            <div class="col-md-8">
            <select class="form-control" name ="jenis_kelamin" id="jenis_kelamin" placeholder="Pilih Jenis Kelamin">
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            </div>
          </div>

           <div class="form-group">
            <label class="control-label col-md-4">Nomor Telepon : </label>
            <div class="col-md-8">
             <input type="integer" name="no_hp" id="no_hp" class="form-control" />
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-4">Alamat: </label>
            <div class="col-md-8">
             <textarea  name="alamat" id="alamat" class="form-control" rows="3" placeholder="Masukkan Alamat"></textarea>
            </div>
           </div>

           <div class="form-group">
            <label class="control-label col-md-4">Pilih Gambar Profil : </label>
            <div class="col-md-8">
             <input type="file" name="image" id="image" />
             <span id="store_image"></span>
            </div>
           </div>

           <div class="modal-footer">
            <div align="right">
                <button type="button" class="btn btn-secondary btn-sm"  data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary btn-sm" id="saveBtn" value="create">Save changes</button>
            </div>
            </div>
         </form>
        </div>
     </div>
    </div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h2 class="modal-title">Confirmation</h2>
            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

    
<script type="text/javascript">
  $(function () {
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
    });

    var table = $('.admin_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin_crud.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'username', name: 'username'},
            {data: 'email', name: 'email'},
            {data: 'password', name: 'password'},
            {data: 'role', name: 'role'},
            {data: 'no_hp', name: 'no_hp'},
            {data: 'jenis_kelamin', name: 'jenis_kelamin'},
            {data: 'alamat', name: 'alamat'},
            {data: 'image', name: 'image'},
          
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });

    $('#createNewAdmin').click(function () {
        $('#saveBtn').val("create-product");
        $('#user_id').val('');
        $('#productForm').trigger("reset");
        $('#modelHeading').html("Form Tambah Admin");
        $('#ajaxModel').modal('show');
    });

    $('body').on('click', '.editAkun', function () {
      var user_id = $(this).data('id');
      $.get("{{ route('admin_crud.index') }}" +'/' + user_id +'/edit', function (data) {
        $('#modelHeading').html("Form Edit Admin");
        $('#saveBtn').val("edit-user");
        $('#ajaxModel').modal('show');
        $('#user_id').val(data.id);
        $('#name').val(data.name);
        $('#username').val(html.data.username);
        $('#email').val(html.data.email);
        $('#password').val(html.data.password);
        $('#role').val(html.data.role);
        $('#jenis_kelamin').val(html.data.jenis_kelamin);
        $('#no_hp').val(html.data.no_hp);
        $('#alamat').val(html.data.alamat);
      
        })
   });

    $('#saveBtn').click(function (e) {
        e.preventDefault();
        $(this).html('Simpan');
        $.ajax({
          data: $('#productForm').serialize(),
          url: "{{ route('admin_crud.store') }}",
          type: "POST",
          dataType: 'json',
          success: function (data) {
              $('#productForm').trigger("reset");
              $('#ajaxModel').modal('hide');
              table.draw();
          },
          error: function (data) {
              console.log('Error:', data);
              $('#saveBtn').html('Simpan');
          }
      });
    });

    $('body').on('click', '.deleteAkun', function () {
        var user_id = $(this).data("id");
        confirm("Yakin Ingin Menghapus?");
        $.ajax({
            type: "delete",
            url: "{{ route('admin_crud.store') }}"+'/'+user_id,
            success: function (data) {
                table.draw();
            },
            error: function (data) {
                console.log('Error:', data);
            }
        });
    });
  });

</script>



@endsection