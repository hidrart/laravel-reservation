@extends('layouts.app', ['title' => __('Form Index')])
@section('content')
@include('layouts.headers.simple', ['title' => __('Form')])
<!-- bagian yang di dalam section "content" ini yang butuh di edit -->
<div class="container-fluid mt--6">
<div class="row">
        <div class="col-lg-6">
          <div class="card-wrapper">
            <!-- Form controls -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Form controls</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                <form>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Nama</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Isi Nama Anda">
                  </div>
                <form>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Nomor Telpon</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Isi Nomor Telepon Anda">
                  </div>
                  <div class="card-body">
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlSelect1">Pilihan Meja</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Meja 1</option>
                      <option>Meja 2</option>
                      <option>Meja 3</option>
                      <option>Meja 4</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlSelect2">Pilihan Menu</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlTextarea1">Keterangan Tambahan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection