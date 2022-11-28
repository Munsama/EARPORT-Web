@extends('admin.master')

@section('judul')
 Dashboard Admin Earport
@endsection

@section ('konten')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
  
</div>


<!-- Content Row -->
<div class="row">

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Laporan</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">4</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-database fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Belum</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-envelope fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Earnings (Monthly) Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Proses</div>
            <div class="row no-gutters align-items-center">
              <div class="col-auto">
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">2</div>
              </div>
            </div>
          </div>
          <div class="col-auto">
            <i class="fas fa-paper-plane fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Pending Requests Card Example -->
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Selesai</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">1</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-award fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!--MAPS LEAFLET -->
<div id="mapid" style="height: 500px;"></div>



</div>
<!-- End of Main Content -->

<!--SCRIPT LEAFLET-->
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
  integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
  crossorigin=""></script>
    <script>
        var mymap = L.map('mapid').setView([-7.313069, 112.728345], 17);
        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	maxZoom: 20,
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

       var myIcon1 = L.icon({
    iconUrl: 'icons/flood.png',
    iconSize: [40, 40],
    iconAnchor: [20, 20],
});

   var marker1 = L.marker([-7.314149, 112.726115], {icon: myIcon1}).addTo(mymap);
       marker1.bindPopup("<b><center>Banjir!</b></center><br>Danau UNESA, Ketintang, Surabaya.").openPopup();
    </script>
@endsection