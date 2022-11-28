@extends ('admin.master')

@section('judul')
Earport - Edit Profil
@endsection

@section ('konten')
<div class="container-fluid">
 <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Profil</h6>
  </div>
  <div class="card-body">
  <div class="row">
              <div class="col-lg-5 ">
                <div align="center">
              <img src="{{ asset('earport fix.png') }}" class="img-circle" style=" padding-top: 70px; padding-bottom: 30px; width:150px; height:250px; ">
              <div class="col-md-8">
             <input type="file" name="image" id="image" />
             <span id="store_image"></span>
</div>
              </div>
</div>
              <div class="col-lg-6">
                <div class="user-avatar">
                
                  <form class="user">
                  <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">Username</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter No. Handphone" value="" maxlength="50" required="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="no_hp" class="col-sm-3 control-label">No HP</label>
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Enter No Handphone" value="" maxlength="50" required="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Jenis Kelamin</label>
                        <div class="col-sm-12">
                        <div class="radio">
                            <input type="radio" id="genderL" name="genderL" value="Laki-Laki" maxlength="50" required="">
                            <label for="genderL"> Laki-laki</label>
                    
                            <input type="radio" id="genderP" name="genderP" value="Perempuan" maxlength="50" required="">
                            <label for="genderP"> Perempuan</label>
                    </div>
                    </div>
                    </div>
                    </div>

                    <button href="" class="btn btn-primary btn-user btn-block">
                      Simpan
                    </button>
  </div>
</div>

</div>
@endsection

