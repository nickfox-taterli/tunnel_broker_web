@extends('layouts.app')

@section('title', $user->name . ' 的个人中心')

@section('content')

<div class="row">

  <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
    <div class="card ">
      <img src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar"/>
      <div class="card-body">
            <h5><strong>注册于</strong></h5>        
            <p>{{ $user->created_at->diffForHumans() }}</p>
      </div>
    </div>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
    <div class="card ">
      <div class="card-body">
          <h1 class="mb-0" style="font-size:22px;">Hello {{ $user->name }},Welcome to TunnelBroker.</h1>
      </div>
    </div>
    <hr>

    <div class="card ">
      <div class="card-body">
        @include('users.tunnel')
      </div>
    </div>

  </div>
</div>
@stop