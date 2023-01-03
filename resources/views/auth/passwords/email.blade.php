@extends('layouts.app')
@section('title')
    Mengatur Ulang Password - Desi Catering
@endsection

@section('keywords')

@endsection

@section('description')
    Kamu bisa mengatur ulang password mu

@endsection


@section('content')
 <div align="center" class="container-fluid py-5 my-5 animated bounceIn">

    <div class="justify-content-center" >
        <a href="/">
            <img src="{{asset('assets/img/logocat.png')}}" class="text-center" style="width:400px;">
        </a>
    </div>
   <h5 class="my-2" >Atur Ulang Password</h5>
   <div class="row justify-content-center">
        <div class="col-md-7">
             <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div  align="left" class="col-md-6  p-2">

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                            <div class="col-md-12">
                                <button type="submit" class="btaobtn btaobtn-dark px-5 py-2">
                                    {{ __('Kirim Link Atur Ulang Password') }}
                                </button>
                            </div>

                    </form>
                    <div class="col-md-12 ">
                        atau
                                   <p class="my-2">
                                          <a class="black-text" href="/">
                                               <i class="fas fa-arrow-left"></i>
                                           <u>Kembali ke Desi Catering</u>
                                           </a>
                                   </p>
                                </div>
                                             <div class="col-md-12">
                                                 <div class="card-body">
                                                         @if (session('status'))
                                                         <div class="alert alert-success" role="alert">
                                                             <strong>{{ session('status') }}</strong>
                                                        </div>
                                                         @endif
                                                    </div>

                                             </div>
        </div>
    </div>
</div>

@endsection
