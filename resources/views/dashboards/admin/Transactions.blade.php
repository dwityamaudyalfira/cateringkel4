@extends('layouts.admin')
@section('title') Desi Catering @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<div align="center" style="background:#213D3D;padding:20px;">
  <h3  class="white-text" style="font-weight:bold;"><a href="{{url('admin-dash')}}" style="color: white">Admin Dashboard</a></h3>
<p class="white-text" style="font-weight:bold;">Transaction Details </p>
@if (session('status'))
  <div class="alert alert-danger" role="alert">
      {{ session('status') }}
  </div>
  @endif


</div>


 <!-- Payments Section Starts Here-->
 <section id="mytransactionsindesktopmode">

    @include('components.admin.mytransactionsindesktozzpmode')
</section>
 <section id="mytransactionsinmobilemode">

    @include('components.admin.mytransactionsinmobilemode')
  </section>

<!-- Payments Section Ends Here-->

@endsection
