@extends('layouts.pemilik')
@section('title') Desi Catering @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<div align="center" style="background:#213D3D;padding:20px;">
  <h3  class="white-text" style="font-weight:bold;"><a href="{{url('pemilik-dash')}}" style="color: white">Pemilik Dashboard</a></h3>
<p class="white-text" style="font-weight:bold;">Laporan Penjualan </p>
@if (session('status'))
  <div class="alert alert-danger" role="alert">
      {{ session('status') }}
  </div>
  @endif


</div>


<!-- Orders Section Starts Here-->
<div id="ordersindesktopmode">
    @include('components.pemilik.ordersindesktopmode')
</div>

<div id="ordersinmobilemode">
      @include('components.pemilik.ordersinmobilemode')
</div>

 <!-- Orders Section Ends Here-->
 @if (session('Order_Status'))
    @include('components.pemilik.orderstatus')
    <script>
        $(document).ready(function ()
        {
            $('#show_Order_Status_Modal').modal('show');
        });
    </script>
 @endif


@endsection
