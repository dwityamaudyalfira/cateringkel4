@extends('layouts.admin')
@section('title') Desi Catering @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<div align="center" style="background:#213D3D;padding:20px;">
    <h3  class="white-text" style="font-weight:bold;"><a href="{{url('admin-dash')}}" style="color: white">Admin Dashboard</a></h3>

<p class="white-text" style="font-weight:bold;">
    <a href="{{url('admin-products')}}" class="badge badge-pill btn-green   disabled px-3 py-2">  <i class="fas fa-file-powerpoint"></i>  &nbsp; Tampilkan Semua Menu</a>

    <a href="{{url('admin-add-product')}}" class="badge badge-pill btn-outline-dark   px-3 py-2">   <i class="fas fa-plus"></i>  &nbsp; Tambah Menu Baru</a>
    <a href="{{url('admin-bin-products')}}" class="badge badge-pill btn-outline-danger px-3 py-2"><i class="fas fa-dumpster"></i> Recycle Bin</a>

</p>
@if (session('status'))
  <div class="alert alert-danger" role="alert">
      {{ session('status') }}
  </div>
  @endif


</div>



<div class="container py-5">
    <p align="left">
        <i class="fas fa-file-powerpoint"></i> Semua Menu
   </p>

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>

                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Gambar</th>
                            <th>Harga</th>
                            <th>Show/Hide</th>
                            <th>Aksi</th>

                        </thead>
                        <tbody>
                            @foreach ($Products as $item)
                            <tr>

                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>


                                <td>
                                <img src="{{asset('Uploads/Products/'.$item->image1)}}" width="50px;"  alt="{{$item->image1}}" />
                                <img src="{{asset('Uploads/Products/'.$item->image2)}}" width="50px;"  alt="{{$item->image2}}" />
                                <img src="{{asset('Uploads/Products/'.$item->image3)}}" width="50px;"  alt="{{$item->image3}}" />
                                <img src="{{asset('Uploads/Products/'.$item->image4)}}" width="50px;"  alt="{{$item->image4}}" />


                                </td>
                                <td>{{$item->price}}</td>

                                <td>
                                             <?php
                                                if( $item->status==1)
                                                {
                                                    echo '<p class="badge badge-pill btn-success"><i class="fas fa-check "></i></p>';
                                                }
                                                else
                                                {
                                                    echo '<p class="badge badge-pill btn-danger"><i class="fas fa-times"></i></p>';
                                                }
                                             ?>
                                </td>
                                <td>
                                <a href="{{url('admin-product-edit/'.$item->id)}}" class="badge badge-pill btn-primary px-3 py-2">Edit</a>
                                <a href="{{url('admin-product-delete/'.$item->id)}}" class="badge badge-pill btn-danger px-3 py-2">Hapus</a>

                                </td>
                        </tr>
                            @endforeach

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <br>
            <p  align="center">
            {{ $Products->links()}}</p>
        </div>
</div>

<hr>
@endsection
