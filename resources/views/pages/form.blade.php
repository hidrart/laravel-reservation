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
                <form class= " "method="POST" action="{{ config('http://localhost')}}/form">
                @csrf
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Nama</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Isi Nama Anda" name="nama">
                  </div>
                <form>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlInput1">Nomor Telepon</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Isi Nomor Telepon Anda" name="nohp">
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlSelect1">Pilihan Cafe</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="cafe">
                      <option>Excelso</option>
                      <option></option>
                      <option></option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="example-datetime-local-input" class="form-control-label">Datetime</label>
                    <div>
                      <input class="form-control" type="datetime-local" value="2018-11-23T10:30:00" id="example-datetime-local-input" name="waktu">
                    </div>
                  </div>
                  <form>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlSelect1">Pilihan Meja</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="meja">
                      <option>Meja 1</option>
                      <option>Meja 2</option>
                      <option>Meja 3</option>
                      <option>Meja 4</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlSelect2">Pilihan Menu</label>
                    <select multiple class="form-control" id="exampleFormControlSelect2" name="menu">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-control-label" for="exampleFormControlTextarea1">Keterangan Tambahan</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="tambahan"></textarea>
                  </div>
                  </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection