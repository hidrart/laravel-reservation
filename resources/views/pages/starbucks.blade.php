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
    <img src="https://promositoday.com/wp-content/uploads/2020/08/body-91.jpg" class="card-img-top" alt="">
  </div> 
  <div class="card">
    <img src="https://www.foodierate.com/uploads/fullsize/111/1rOjbL5f3626832228d_menu-starbucks-coffee.jpg" class="card-img-top" alt="">
  </div>
  <div class="card">
    <img src="https://assets-pergikuliner.com/30PeyZfzmWm8cCZgUYvimGvSvtA=/385x290/smart/https://assets-pergikuliner.com/uploads/image/picture/1608163/picture-1569471231.jpg" class="card-img-top" alt="">
  </div>
  <div class="card">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSErQfQF-n0ESZ9jZcozyRefbM2oEGjqNdrQ&usqp=CAU" class="card-img-top" alt="">
  </div>
  <div class="card">
    <img src="https://assets-pergikuliner.com/Ia3owA1sbB1Prz-DBVdJPw0eYkQ=/312x0/smart/https://assets-pergikuliner.com/uploads/image/picture/1550017/picture-1566528966.jpg" class="card-img-top" alt="">
  </div>
  <div class="card">
    <img src="https://lh5.googleusercontent.com/p/AF1QipP_2P_ET5W1QL0S8esC1KLX0rNiQ2nwMamNtuwq=w500-h500-k-no" class="card-img-top" alt="">
  </div>
  <div class="card">
    <img src="https://fastly.4sqi.net/img/general/600x600/19615828_4pWBr3JlBFHDOZZQonOgFdX-Kp3G5PXwcbBo79LzUtc.jpg" class="card-img-top" alt="">
  </div>
  <div class="card">
    <img src="https://i.pinimg.com/474x/69/b2/87/69b287f5dc3385985a0742d00069f4e7.jpg" class="card-img-top" alt="">
  </div>
</div>
</div>
</div>
</div>
</div>
@endsection
