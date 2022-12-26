@extends('layout')
@section('title') Desi Catering @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<style>

    .checked {
      color: orange;
    }
    </style>

<div id="slide_show_in_desktop_mode">
  @include('components.desktopslideshow')
</div>
<div id="slide_show_in_mobile_mode">
  @include('components.mobileslideshow')
</div>
<!-- About Starts Here -->
<script>
    $( document ).ready(function() {
  new WOW().init();
  $( ".wow" ).addClass( "fadeInLeft" );
});
</script>
 <div id="About" class="container-fluid" style="background:white;">
    <br>
      <div class="row ">
        <div class="col-md-4 wow animated zoomIn slow">
        <img src="{{asset('Img/tentang.jpg')}}" alt="Cinque Terre" style="margin-bottom: 20px; height: 300px; width: 500px;" >
        </div>
        <div  align="center" class="col-md-8 wow animated flash slow">
            <h1 class="black-text" style="font-weight:bold;">Tentang Desi Catering</h1>
            <div class="col-md-3" style=" border-bottom: 2px solid #003399;"></div>
              <div class="col-md-6" >
                    <ul align="right" style="list-style:none;">
                        <h1 align="justify" class="black-text" style="font-weight:bold; margin-top:30px; margin-left: -120px; margin-right: -180px; margin-bottom: 30px; font-size: 20px">Desi Catering merupakan salah satu tempat usaha catering makanan terkenal
                            sejak berdirinya tahun 1983, dimana Desi Catering menjual beberapa paket catering
                            untuk berbagai acara seperti acara pernikahan, acara khitanan dan beberapa acara
                            lainnya.</h1>
                    </ul>
              </div>
{{--              <div class="col-md-6">--}}
{{--                    <ul align="left" style="list-style:none;">--}}
{{--                    <li><i class="fab fa-pagelines"></i> Paket Ikan</li><br>--}}
{{--                    <li><i class="fab fa-pagelines"></i> Paket Ayam</li>--}}
{{--                  </ul>--}}
{{--              </div>--}}
            <p  align="center" class="mx-5" style="margin-top:-30px; font-family: 'Balsamiq Sans', cursive;">
              <a href="{{url('about')}}"  target="_blank" class="btn btn-dark rounded-pill">Selengkapnya</a>
              </p>

        </div>
      </div>

</div>

<!-- About completed Here -->

@php
$Products=App\Models\Products::where('status','=','1')->get();
@endphp
<!-- Products Starts Here -->
<section id="Products" align="center" class="px-5 wow animated fadeInUpBig fast" style=" font-family: 'Balsamiq Sans', cursive;">

    <h1 class="black-text" style="font-weight:bold;">Menu</h1>
    <div align="center">
        <p  class="col-md-2" style=" border-bottom: 2px solid #003399;"></p>
    </div>
    <div  class="row my-4 px-4 "  style="width:100%;" >
      @foreach($Products as $item)
      <div class="col-md-3 px-4 my-5"  >
          <a href="{{url('Shop/'.$item->url)}}">
              <img src=" {{asset('Uploads/Products/'.$item->image1)}}" alt="" class="img-fluid"  >
              </a>
          <div class="py-2" style="background:white;">
            <span class="black-text my-3" style="font-weight:bold; font-family: 'Balsamiq Sans', cursive;">{{$item->name}}</span>
            <br>
            Harga : Rp {{$item->price}}<br>
              @if($item->rating==1)
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                          @elseif($item->rating==2)
                          <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star "></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>
                            @elseif($item->rating==3)
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>
                              <span class="fa fa-star"></span>

                            @elseif($item->rating==4)
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star"></span>

                            @else
                            <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                              <span class="fa fa-star checked"></span>
                            @endif

                            <br>

               <a href="Shop/{{$item->url}}" class="btn  btn-primary rounded-pill"> Pesan </a>

          </div>
      </div>
     @endforeach

    </div>

    <hr class="col-md-6">
</section>
<!-- Products Ends Here -->


<!--Team Starts Here-->
 <div id="Team">
<div id="teaminthedesktopmode" class="container" align="center" >
      @include('components.teamindesktopmode')
</div>
<div id="teaminthemobilemode" class="container"  align="center" >
      @include('components.teaminmobilemode')
</div>
 </div>
<!--Team Ends Here-->
<!-- ======= Contact Section Starts Here ======= -->

  <section id="contact" class="contact" style="background:white" >
          <div class="container">

            <div class="section-title" >

              <h2>Hubungi Desi Catering</h2>
              <p style=" font-family: 'Balsamiq Sans', cursive;">  </p>
            </div>

            <div class="row wow animated zoomIn slow">

              <div class="col-lg-5 d-flex align-items-stretch" style="margin: auto">
                <div align="left" class="info">
                  <div class="address" >
                  <i class="fas fa-map-marker-alt"></i>
                    <h4>Lokasi:</h4>
                    <p> Jl. Suka Karya, Kota Pekanbaru</p>
                  </div>

                  <div class="email">
                  <i class="fas fa-envelope"></i>
                    <h4>Email:</h4>
                    <p>desicatering@gmail.com</p>
                  </div>

                  <div class="phone">
                  <i class="fas fa-phone"></i>
                    <h4>Telepon:</h4>
                    <p>Desi  : +6281234567891 <br>
                       Admin : +6289876543210</p>
                  </div>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3188.6285239439912!2d101.38550179326414!3d0.4495066332950674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5a9c3f0a297d3%3A0x9ce305e21a252b4c!2sPerumahan%20Karya%20Pesona%20Mandiri!5e0!3m2!1sid!2sid!4v1671694294955!5m2!1sid!2sid" width=100% height=290px style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

              </div>

{{--              <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">--}}
{{--                <form action="send-email" method="post" role="form" class="php-email-form">--}}
{{--                    @csrf--}}
{{--                  <div class="form-row">--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                      <label for="name">Nama</label>--}}
{{--                      <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Silakan masukkan setidaknya 4 karakter" />--}}
{{--                      <div class="validate"></div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                      <label for="name"> Email</label>--}}
{{--                      <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Silakan masukkan alamat email yang benar" />--}}
{{--                      <div class="validate"></div>--}}
{{--                    </div>--}}
{{--                  </div>--}}
{{--                  <div class="form-group">--}}
{{--                    <label for="name">Subjek</label>--}}
{{--                    <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Silakan masukkan setidaknya 8 karakter" />--}}
{{--                    <div class="validate"></div>--}}
{{--                  </div>--}}
{{--                  <div class="form-group">--}}
{{--                    <label for="name">Pesan</label>--}}
{{--                    <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Silakan tuliskan sesuatu untuk kami"></textarea>--}}
{{--                    <div class="validate"></div>--}}
{{--                  </div>--}}

{{--                  <div class="text-center"><button type="submit">Kirim</button></div>--}}
{{--                </form>--}}
{{--              </div>--}}

            </div>

          </div>
  </section>

<!-- ======= Contact Section Ends Here ======= -->
<div class="d-flex justify-content-center">
    <div class="col-md-8 wow animated flash slow">
        <h1 class="black-text" style="margin-top:30px; font-size: 15px; font-weight: bold" align="center">Untuk mendapatkan promo-promo terbaru dari catering kami, silahkan klik tombol dibawah ini.</h1>
        <p align="center" class="py-2"><br>
            <button class="btn btn-dark rounded-pill" data-toggle="modal" data-target="#modalSocial" >Berlangganan dengan email kami</button>
        </p>
    </div>
</div>



<!--Modal: modalSocial-->
<div class="modal fade" id="modalSocial" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal" role="document">

    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header  darken-3 white-text" style="background-color:#40BFD6;">
        <h4 class="title"><i class="fas fa-users"></i> Berlangganan dengan email kami</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
            aria-hidden="true">&times;</span></button>
      </div>

      <!--Body-->
      <div class="modal-body mb-0 text-center">
            <form method="POST" action="subscribe-news-letter">
                @csrf
                <input type="text" class="form-control"  name="name" placeholder="Your Name" required><br>
                <input type="email"  class="form-control"  name="email" placeholder="Your Email Id" required>
                <button class="btn rounded-pill" style="background-color:#40BFD6;">Submit</button>
            </form>
      </div>

    </div>
    <!--/.Content-->

  </div>
</div>
<!--Modal: modalSocial-->


   @if (session('status'))

        <script>
            $(document).ready(function () {

        $('#centralModalSuccess').modal('show');

        });
        </script>
@endif


@if($errors->any())

        <script>
            $(document).ready(function () {

        $('#centralModaldanger').modal('show');

        });
        </script>
@endif



 <!-- Central Modal Medium Success -->
 <div class="modal fade" id="centralModalSuccess" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-success" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead"> Sukses</p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">
           <i class="fas fa-check fa-4x mb-3 animated rotateIn"></i>
           <p>{{session('status')}} </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">

         <a type="button" class="btn btn-outline-success waves-effect rounded-pill" data-dismiss="modal">Tutup</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Success-->

 <!-- Central Modal Medium Danger -->
 <div class="modal fade" id="centralModaldanger" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog modal-notify modal-danger" role="document">
     <!--Content-->
     <div class="modal-content">
       <!--Header-->
       <div class="modal-header">
         <p class="heading lead"> Pesan tidak terkirim </p>

         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true" class="white-text">&times;</span>
         </button>
       </div>

       <!--Body-->
       <div class="modal-body">
         <div class="text-center">

           <i class="fas fa-exclamation fa-4x mb-3 animated rotateIn"></i>
           <p>@if($errors->any())
    {!! implode('', $errors->all('<div>:message</div>')) !!}
@endif </p>
         </div>
       </div>

       <!--Footer-->
       <div class="modal-footer justify-content-center">

         <a type="button" class="btn btn-outline-danger waves-effect rounded-pill" data-dismiss="modal">Tutup</a>
       </div>
     </div>
     <!--/.Content-->
   </div>
 </div>
 <!-- Central Modal Medium Danger-->

@endsection
