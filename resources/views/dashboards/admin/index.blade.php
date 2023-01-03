@extends('layouts.admin')
@section('title') Desi Catering @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<div align="center" style="background:#213D3D;padding:20px;">
  <h3  class="white-text" style="font-weight:bold;"><a href="{{url('admin-dash')}}" style="color: white">Admin Dashboard</a></h3>
<p class="white-text" style="font-weight:bold;"> </p>
@if (session('status'))
  <div class="alert alert-danger" role="alert">
      {{ session('status') }}
  </div>
  @endif


</div>



<div class="container py-2">

   <p align="center">
        <img src="{{asset('Img/admin.png')}}" class="img-fluid" style="width:200px;" >
   </p>
    <div class="row">
        <div class="col-xl-3 col-md-6">
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background-color: #a0ced9">
                <div class="card-body"><i class="fas fa-users"></i> Akun Terdaftar</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="admin-all-users">Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6" >
            <div class="card text-white mb-4" style="background-color: #83af9b" >
                <div class="card-body" > <i class="fas fa-file"></i> Pesanan</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{url('admin-Orders')}}">Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" >
        <div class="col-xl-3 col-md-6"style="margin-right: 150px">
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card text-white mb-4" style="background-color: #fe4365">
                <div class="card-body"><i class="fab fa-product-hunt"></i> Menu </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{url('admin-products')}}">Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
{{--        <div class="col-xl-3 col-md-6">--}}
{{--            <div class="card bg-dark      text-white mb-4">--}}
{{--                <div class="card-body"> <i class="fas fa-dollar-sign"></i> Transaksi</div>--}}
{{--                <div class="card-footer d-flex align-items-center justify-content-between">--}}
{{--                    <a class="small text-white stretched-link" href="{{url('admin-Transactions')}}">Selengkapnya</a>--}}
{{--                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
         <div class="col-xl-12 col-md-6" style="margin-bottom: -80px">
            <div class="card mb-4"  style="background-color: #ffc09f">
                <div class="card-body"> Daftar pelanggan yang berlangganan email</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small  stretched-link" href="{{url('admin-news-letter')}}" style="color: black">Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div><br><br>
        </div>
</div>
<hr>
@endsection
