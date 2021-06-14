@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
      @include('users.partials.header', [
            'title' => __('Tables List'),
            'description' => __('Choose the table that you want to reserve here'),
            'class' => __('col-sm-3')
      ])   
      <div>
            @include('layouts.footers.auth')
      </div>
@endsection
