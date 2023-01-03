@extends('layouts.app')

@section('title')
Register - Desi Catering
@endsection

@section('keywords')


@endsection

@section('description')

@endsection


@section('content')

<div align="center" class="container-fluid  my-3   animated bounceIn">

        <div class="animated bounceIn justify-content-center" >
            <a href="/">
            <img src="{{asset('assets/img/logocat.png')}}" class="text-center" style="width: 400px;">
            </a>
        </div>
        <h5 class="my-2" style="color: #3b2422; font-weight: bold" > BUAT AKUN</h5>
        <div class="row justify-content-center ">
                <div class="col-md-7" style="width: 100%">



                            <form    method="POST" action="{{ route('register') }}">
                                @csrf

                                <div   class="form-group row  justify-content-center ">

                                    <div   class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="{{ __('Nama') }}" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row  justify-content-center ">

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="{{ __('Alamat E-Mail') }}" autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row  justify-content-center ">

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="{{ __('Password') }}" autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row  justify-content-center ">

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required  placeholder="{{ __('Konfirmasi Password') }}" autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0  justify-content-center" style="color: #3b2422" >
                                    <div class="col-md-12 ">
                                        <button type="submit" class="btaobtn rounded-pill px-5 py-2" style="background-color: #f6c6ce; color: #3b2422; outline-color: #0a2929">
                                            Daftar
                                        </button><br><br>Dengan mendaftar anda menyetujui semua <a href="{{url('Terms-and-Conditions')}}" target="_blank">Syarat dan ketentuan</a>
                                    </div>
                                    <div class="col-md-6 p-2">  <strong>Sudah punya akun? Silakan <a href="login" ><u>Login</u></a></strong>
                                    </div>
                                    <div class="col-md-12 ">
                                        atau
                                   <p class="my-2">
                                          <a class="black-text" href="/">
                                               <i class="fas fa-arrow-left"></i>
                                           <u>kembali ke halaman utama</u>
                                           </a>
                                   </p>
                                 </div>
                                </div>
                            </form>


                </div>
        </div>
</div>
@endsection
