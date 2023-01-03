@extends('layouts.admin')
@section('title') Desi Catering @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<div align="center" style="background:#213D3D;padding:20px;">
  <h3  class="white-text" style="font-weight:bold;"><a href="{{url('admin-dash')}}" style="color: white">Admin Dashboard</a></h3>
  <a href="{{url('admin-all-users')}}" class="btaobtn btaobtn-outline-dark" style="background-color: white;">Back</a>
@if (session('status'))
  <div class="alert alert-danger" role="alert">
      {{ session('status') }}
  </div>
  @endif


</div>




<div class="container py-2">
   <p align="left">
    <i class="fas fa-edit"></i> Edit Peran
   </p>

    <!--Grid column-->
    <div class="col-md-12 mb-4">

        <!--Card-->
        <div class="card">

        <!--Card content-->
        <div class="card-body">
            <h3>Current Role:{{$userroles->role}}</h3>
        <form action="{{ url('admin/role-update/'.$userroles->id) }}" method="POST">
            {{  csrf_field()  }}

                <div class="form-group">
                <input type="text" class="form-control" name="name"  placeholder="User Name" readonly value="{{ $userroles->name }}">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="email" readonly value="{{ $userroles->email }}">
                    </div>

                        <div class="form-group">
                            <select class="form-control" name="role">
                                <option value=""  disabled >Pilih--Peran</option>
                                <option value="user">User</option>
                                <option value="admin">Admin</option>
                            </select>
                            </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                         </div>

            </form>


        </div>

    </div>
    <!--/.Card-->

</div>
<!--Grid column-->

</div>
<hr>
@endsection
