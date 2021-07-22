@extends('layouts.app', ['title' => __('Cafe Index')])
@section('content')
@include('layouts.headers.simple', ['title' => __('Cafe')])
<!-- bagian yang di dalam section "content" ini yang butuh di edit -->
<div class="container-fluid mt--6">
      <div class="row justify-content-center">
        <div class=" col ">
<div class="card">
<div class="card-header"> Album Foto : <a href="{{ route('menu.index') }}" class="float-right btn btn-md"> Menu </a> </div>
<div class="card-body">
      <h5 class="card-title"></h5>
      </div>
<div class="card-columns">
  <div class="card">
    <img src="https://ik.imagekit.io/tvlk/ugc-review/guys1L+Yyer9kzI3sp-pb0CG1j2bhflZGFUZOoIf1YOBAm37kEUOKR41ieUZm7ZJ/tvlk-prod-ugc-photo/REVIEW/1555833_REVIEW_1573782345977_5f80b5c415166ecf?tr=q-40,w-300,h-300&amp;_src=imagekit" class="card-img-top" alt="">
  </div> 
  <div class="card">
    <img src="https://fastly.4sqi.net/img/general/600x600/12732623_z0fMRIbts2_NocJNXpl4_w9SqrKvtqY9jlvsezA6_q4.jpg" class="card-img-top" alt="">
  </div>
  <div class="card">
    <img src="https://ik.imagekit.io/tvlk/cul-asset/guys1L+Yyer9kzI3sp-pb0CG1j2bhflZGFUZOoIf1YOBAm37kEUOKR41ieUZm7ZJ/tvlk-prod-cul-assets/culinary/asset/REST_zIG-720x720-FIT_AND_TRIM-23f0ed5de52969d75d751b35fcd01004.jpeg?tr=q-40,c-at_max,w-1080,h-1920&_src=imagekit" class="card-img-top" alt="">
  </div>
  <div class="card">
    <img src="https://media-cdn.tripadvisor.com/media/photo-s/1b/7f/c8/7e/yummy-today-at-excelso.jpg" class="card-img-top" alt="">
  </div>
  <div class="card">
    <img src="https://ik.imagekit.io/tvlk/ugc-review/guys1L+Yyer9kzI3sp-pb0CG1j2bhflZGFUZOoIf1YOBAm37kEUOKR41ieUZm7ZJ/tvlk-prod-ugc-photo/REVIEW/15331102_REVIEW_1577855481153_1bfff61b2aa234cf?tr=q-40,w-300,h-300&amp;_src=imagekit" class="card-img-top" alt="">
  </div>
  <div class="card">
    <img src="https://fastly.4sqi.net/img/general/600x600/3Kc3AlAzWEaHd3PalqrDhbNIwrxidRUYz125G0VR8sY.jpg" class="card-img-top" alt="">
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection
