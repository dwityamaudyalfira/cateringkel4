@extends('layouts.pemilik')
@section('title') Desi Catering @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<div align="center" style="background:#1CD5E8;padding:20px;">
  <h3  class="black-text" style="font-weight:bold;"><a href="{{url('pemilik-dash')}}">Pemilik Dashboard</a></h3>
<p class="white-text" style="font-weight:bold;"> </p>
@if (session('status'))
  <div class="alert alert-danger" role="alert">
      {{ session('status') }}
  </div>
  @endif


</div>



<div class="container py-2">

   <p align="center">
        <img src="{{asset('Img/admin_image.png')}}" class="img-fluid" style="width:70px;" >
   </p>

        <div class="row h-100 justify-content-center align-items-center">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success  text-white mb-4">
                <div class="card-body"> <i class="fas fa-file"></i> Pesanan</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{url('pemilik-Orders')}}">Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger  text-white mb-4">
                <div class="card-body"><i class="fab fa-product-hunt"></i> Menu </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{url('pemilik-products')}}">Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
{{--        <div class="col-xl-3 col-md-6">--}}
{{--            <div class="card bg-dark      text-white mb-4">--}}
{{--                <div class="card-body"> <i class="fas fa-dollar-sign"></i> Transaksi</div>--}}
{{--                <div class="card-footer d-flex align-items-center justify-content-between">--}}
{{--                    <a class="small text-white stretched-link" href="{{url('pemilik-Transactions')}}">Selengkapnya</a>--}}
{{--                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
    </div>
<hr>
@endsection
