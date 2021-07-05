@extends('layouts.app', ['title' => __('Meja Index')])
@section('content')
@include('layouts.headers.simple', ['title' => __('Meja')])
<!-- bagian yang di dalam section "content" ini yang butuh di edit -->
<div class="container-fluid mt--6">
      <div class="row card-wrapper">
        <div class="col-lg-6">
          <!-- Basic with list group -->
          <div class="card">
            <!-- Card image -->
            <img  src="../../assets/img/theme/meja 2.png" class="mx-auto d-block" width="400px">
            <!-- List group -->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Tipe 1</li>
              <li class="list-group-item">Ukuran 50cm x 50cm</li>
              <li class="list-group-item">Meja Untuk 2 Orang</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <!-- Basic with list group -->
          <div class="card">
            <!-- Card image -->
            <img  src="../../assets/img/theme/meja 4.jpg" class="mx-auto d-block" width="400px">
            <!-- List group -->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Tipe 2</li>
              <li class="list-group-item">Ukuran 100cm x 100cm</li>
              <li class="list-group-item">Meja Untuk 4 Orang</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <!-- Basic with list group -->
          <div class="card">
            <!-- Card image -->
            <img  src="../../assets/img/theme/meja 8.jpg" class="mx-auto d-block" width="250px">
            <!-- List group -->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Tipe 3</li>
              <li class="list-group-item">Ukuran Diameter 5meter</li>
              <li class="list-group-item">Meja Untuk 8 Orang</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6">
          <!-- Basic with list group -->
          <div class="card">
            <!-- Card image -->
            <img  src="../../assets/img/theme/meja 14.gif" lass="mx-auto d-block" width="500px">
            <!-- List group -->
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Tipe 4</li>
              <li class="list-group-item">Ukuran Diameter 10meter</li>
              <li class="list-group-item">Meja Untuk 14 Orang</li>
            </ul>
          </div>
        </div>
    </div>
@endsection