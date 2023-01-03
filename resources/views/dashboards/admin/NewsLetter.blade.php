@extends('layouts.admin')
@section('title') Desi Catering @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<div align="center" style="background:#213D3D;padding:20px;">
    <h3  class="white-text" style="font-weight:bold;"><a href="{{url('admin-dash')}}" style="color: white">Admin Dashboard</a></h3>

<p class="white-text" style="font-weight:bold;">


</p>
@if (session('status'))
  <div class="alert alert-danger" role="alert">
      {{ session('status') }}
  </div>
  @endif


</div>



<div class="container py-5">
    <p align="left">
        <i class="fas fa-file-powerpoint"></i> Data Pelanggan Langganan Email
    </p>

<div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>

                        <th>Name</th>
                        <th>Email Id</th>

                    </thead>
                    <tbody>
                        @foreach ($NewsLetter as $item)
                        <tr>

                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>



                    </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
</div>
</div>
<hr>
@endsection
