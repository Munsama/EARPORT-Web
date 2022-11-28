@extends ('admin.master')

@section('judul')
Earport - Edit Profil
@endsection

@section ('konten')
<div class="container-fluid">
 <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Detail Laporan</h6>
  </div>
  <div class="card-body">
  <div class="row">
              <div class="col-lg-4 ">
                <div align="center">
                <b><label for="fotolaporan" class="col-sm-5 control-label">Foto</label></b>
                
              <div><img id="fotolaporan" src="{{ asset('kebakaran.jpg') }}" class="img-circle" style=" padding-top: 10px;  padding-bottom: 10px; width:270px; height:270px; ">

</div>
             <!--MAPS LEAFLET -->
             
             <b><label for="mapid" class="col-sm-5 control-label">Lokasi</label></b>
<div id="mapid" style="padding-top: 30px; width: 270px; height: 270px;"></div>


<!-- End of Main Content -->



</div>
</div>
              <div class="col-lg-8">
                  <form class="user">
                  <div class="form-group">
                      <b><label for="name" class="col-sm-4 control-label">Pelapor</label></b>
                      <label for="name" class="col-sm-6 control-label">Irfan</label>
                    </div>

                    <div class="form-group">
                        <b><label for="username" style="vertical-align: middle;" class="col-sm-4 control-label">Kategori</label></b>
                        <label for="username" class="col-sm-6 control-label">Kebakaran</label>
                    </div>

                    <div class="form-group">
                        <b><label for="email" class="col-sm-4 control-label">Deskripsi</label></b>
                        <label for="email" class="col-sm-6 control-label">Terjadi Kebakaran Pak, Tolong!</label>
                    </div>

                    <div class="form-group">
                        <b><label for="no_hp" class="col-sm-4 control-label">Tanggal Buat</label></b>
                        <label for="no_hp" class="col-sm-6 control-label">13-09-2019</label>
                    </div>

                    <div class="form-group">
                    <b><label for="name" class="col-sm-4 control-label">Status</label></b>
                        <label for="name" class="col-sm-6 control-label">Selesai</label>
                    </div>

                    <div class="form-group">
                    <b><label for="name" class="col-sm-4 control-label">Solusi</label></b>
                        <label for="name" class="col-sm-6 control-label">Masalah anda akan ditindak lanjuti oleh Pemadam Kebakaran Surabaya</label>
                    </div>
                    
                    <div class="form-group">
                    <b><label for="name" class="col-sm-4 control-label">Tanggal Mulai</label></b>
                        <label for="name" class="col-sm-6 control-label">13-09-2019</label>
                    </div>

                    <div class="form-group">
                    <b><label for="name" class="col-sm-4 control-label">Tanggal Selesai</label></b>
                    <label for="name" class="col-sm-6 control-label">13-09-2019</label>
                    </div>
                    
                    <div class="form-group">
                    <b><label for="name" class="col-sm-4 control-label">Durasi</label></b>
                        <label for="name" class="col-sm-6 control-label">0 Hari</label>
                        </div>
                    </b>
                    </div>

                    <div align = "right" class="col-sm-offset-2 col-sm-12">
                    <a href="admin_laporan" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Back" class="btn btn-danger">Kembali</a>
                    </div>
                    
                    

  </div>
</div>
</div>

<!--SCRIPT LEAFLET-->
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
  integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
  crossorigin=""></script>
    <script>
        var mymap = L.map('mapid').setView([-7.313069, 112.728345], 20);
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	minZoom:16, maxZoom: 16, 
	id: 'mapbox.streets',
	accessToken: 'pk.eyJ1IjoibXVxaXRvIiwiYSI6ImNrMHpkenFscTBwOWszbHAxZjExMjdtejEifQ.iBhvDRb3F2V_LMD5LaX1wg'
}).addTo(mymap);

var myIcon = L.icon({
    iconUrl: 'icons/fire.png',
    iconSize: [40, 40],
    iconAnchor: [20, 20],
});

   var marker = L.marker([-7.313069, 112.728345], {icon: myIcon}).addTo(mymap);
       marker.bindPopup("<b><center>Kebakaran!</b></center><br>UJC, Ketintang, Surabaya.").openPopup();

    </script>
@endsection

