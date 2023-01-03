@extends('layout')
@section('title') Desi Catering - FAQ'S @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')
<section>
<h1 align="center" class="black-text col-md-12" style="font-weight:bold;">Pertanyaan yang sering diajukan</h1>
  <p align="center"></p>
  <div align="center">
    <!--Grid column-->
      <div align="left" class="col-md-6" style="font-family: 'Balsamiq Sans', cursive;">

        <!--Accordion wrapper-->
        <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

          <!-- Q1 -->
          <div class="card p-3">

            <!-- Card header -->
            <div role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                aria-controls="collapseOne1">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> Bagaimana cara melakukan pemesanan catering?

                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>

            </div>



            <!-- Card body -->
            <div id="collapseOne1" class="collapse" role="tabpanel" aria-labelledby="headingOne1"
              data-parent="#accordionEx">
              <div class="card-body">
              Untuk melakukan pemesanan anda harus melakukan login terlebih dahulu. Bila anda belum mempunyai akun, maka anda akan kami arahkan untuk melakukan register atau pendaftaran akun terlebih dahulu.
              Setelah anda login, barulah anda dapat melanjutkan proses checkout pesanan.
              Selanjutnya anda akan diminta mengisikan data pada Detail Pengiriman & Pembayaran, setelah anda mengisi data tersebut dengan baik maka pesanan anda akan dikirim kepada pihak catering.
              Anda dapat melihat daftar dan status pesanan anda pada menu "Pesanan", setelah anda melakukan pembayaran, maka status pemesanan anda akan berubah, dan pesanan anda siap untuk diproses hihak catering.
              </div>
            </div>

          </div>
          <!-- Q1 -->
          <!--Q2-->
          <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne1">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading2"
                aria-controls="heading2">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> Apa catering ini termasuk catering “Layanan Penuh”?


                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>

            </div>

            <!-- Card body -->
            <div id="heading2" class="collapse" role="tabpanel" aria-labelledby="heading2"
              data-parent="#accordionEx">
              <div class="card-body">
                  Di Desi Catering, “Layanan Penuh” berarti kami menyediakan semua aspek katering acara Anda. Ini termasuk persiapan makanan, pengantaran, pengiriman, penyiapan, layanan, kerusakan, dan pembersihan. Tujuan kami adalah melakukan semua pekerjaan agar Anda dapat merasa seperti tamu di acara Anda sendiri.
              </div>
            </div>

          </div>
          <!-- Q2 -->

            <!--Q3-->
          <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne3">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading3"
                aria-controls="heading3">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> Bagaimana saya membayar pesanan saya?

                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>

            </div>

            <!-- Card body -->
            <div id="heading3" class="collapse" role="tabpanel" aria-labelledby="heading3"
              data-parent="#accordionEx">
              <div class="card-body">
                  Untuk saat ini, Desi Catering hanya menerima pembayaran tunai di Toko.
                  Jadi, pelanggan dapat melakukan pembayaran secara langsung dengan datang ke Toko kami dialamat yang telah tertera pada website.
                  Setelah anda melakukan pembayaran, barulah pesanan anda akan siap kami proses hingga selesai.
                  </div>
            </div>

          </div>
          <!-- Q3 -->

           <!--Q4-->
          <div class="card p-3 my-5">

            <!-- Card header -->
            <div role="tab" id="headingOne4">
              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading4"
                aria-controls="heading4">
                <p class="mb-0 dark-grey-text" style="float:left;">
                    <i class="far fa-question-circle"></i> Masih ada pertanyaan yang belum kejawab nih, gimana dong?

                </p>
                <p align="right">
                    <i class="fas fa-angle-down rotate-icon"></i>
             </p>
              </a>

            </div>

            <!-- Card body -->
            <div id="heading4" class="collapse" role="tabpanel" aria-labelledby="heading4"
              data-parent="#accordionEx">
              <div class="card-body">
                  Ayo ngobrol langsung dengan agen kami melalui fitur jivochat! Tanyakan langsung pertanyaanmu melalui fitur jivochat yang ada pada bagian kanan bawah website, ya!

              </div>
            </div>

          </div>
          <!-- Q4 -->
            <!--Q5-->
{{--             <div class="card p-3 my-5">--}}

{{--            <!-- Card header -->--}}
{{--            <div role="tab" id="headingOne5">--}}
{{--              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading5"--}}
{{--                aria-controls="heading5">--}}
{{--                <p class="mb-0 dark-grey-text" style="float:left;">--}}
{{--                    <i class="far fa-question-circle"></i>If I have question, what's the fastest way to get an answer ?--}}

{{--                </p>--}}
{{--                <p align="right">--}}
{{--                    <i class="fas fa-angle-down rotate-icon"></i>--}}
{{--             </p>--}}
{{--              </a>--}}

{{--            </div>--}}

{{--            <!-- Card body -->--}}
{{--            <div id="heading5" class="collapse" role="tabpanel" aria-labelledby="heading5"--}}
{{--              data-parent="#accordionEx">--}}
{{--              <div class="card-body">--}}
{{--                You can email us at any time.--}}
{{--              </div>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--              <!--Q5-->--}}

{{--               <!--Q6-->--}}
{{--             <div class="card p-3 my-5">--}}

{{--            <!-- Card header -->--}}
{{--            <div role="tab" id="headingOne6">--}}
{{--              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading6"--}}
{{--                aria-controls="heading6">--}}
{{--                <p class="mb-0 dark-grey-text" style="float:left;">--}}
{{--                    <i class="far fa-question-circle"></i> Do your products vary from the product photos of your website ?--}}

{{--                </p>--}}
{{--                <p align="right">--}}
{{--                    <i class="fas fa-angle-down rotate-icon"></i>--}}
{{--             </p>--}}
{{--              </a>--}}

{{--            </div>--}}

{{--            <!-- Card body -->--}}
{{--            <div id="heading6" class="collapse" role="tabpanel" aria-labelledby="heading6"--}}
{{--              data-parent="#accordionEx">--}}
{{--              <div class="card-body">--}}
{{--             No, but sometimes might be due to lighting--}}
{{--              </div>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--              <!--Q6-->--}}
{{--                <!--Q7-->--}}
{{--             <div class="card p-3 my-5">--}}

{{--            <!-- Card header -->--}}
{{--            <div role="tab" id="headingOne7">--}}
{{--              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading7"--}}
{{--                aria-controls="heading7">--}}
{{--                <p class="mb-0 dark-grey-text" style="float:left;">--}}
{{--                    <i class="far fa-question-circle"></i> Will I be able to trace my order ?--}}
{{--                </p>--}}
{{--                <p align="right">--}}
{{--                    <i class="fas fa-angle-down rotate-icon"></i>--}}
{{--             </p>--}}
{{--              </a>--}}

{{--            </div>--}}

{{--            <!-- Card body -->--}}
{{--            <div id="heading7" class="collapse" role="tabpanel" aria-labelledby="heading7"--}}
{{--              data-parent="#accordionEx">--}}
{{--              <div class="card-body">--}}
{{--              Yeah you can--}}
{{--              </div>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--              <!--Q7-->--}}

{{--               <!--Q8-->--}}
{{--             <div class="card p-3 my-5">--}}

{{--            <!-- Card header -->--}}
{{--            <div role="tab" id="headingOne8">--}}
{{--              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading8"--}}
{{--                aria-controls="heading8">--}}
{{--                <p class="mb-0 dark-grey-text" style="float:left;">--}}
{{--                    <i class="far fa-question-circle"></i>Do I need to pay any additional taxes ?--}}
{{--                </p>--}}
{{--                <p align="right">--}}
{{--                    <i class="fas fa-angle-down rotate-icon"></i>--}}
{{--             </p>--}}
{{--              </a>--}}

{{--            </div>--}}

{{--            <!-- Card body -->--}}
{{--            <div id="heading8" class="collapse" role="tabpanel" aria-labelledby="heading8"--}}
{{--              data-parent="#accordionEx">--}}
{{--              <div class="card-body">--}}
{{--             No, but if it is beyond our boundary.--}}
{{--              </div>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--              <!--Q8-->--}}

{{--                <!--Q9-->--}}
{{--             <div class="card p-3 my-5">--}}

{{--            <!-- Card header -->--}}
{{--            <div role="tab" id="headingOne9">--}}
{{--              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading9"--}}
{{--                aria-controls="heading9">--}}
{{--                <p class="mb-0 dark-grey-text" style="float:left;">--}}
{{--                    <i class="far fa-question-circle"></i> Can I customize my order for multiple purchase ?--}}

{{--                </p>--}}
{{--                <p align="right">--}}
{{--                    <i class="fas fa-angle-down rotate-icon"></i>--}}
{{--             </p>--}}
{{--              </a>--}}

{{--            </div>--}}

{{--            <!-- Card body -->--}}
{{--            <div id="heading9" class="collapse" role="tabpanel" aria-labelledby="heading9"--}}
{{--              data-parent="#accordionEx">--}}
{{--              <div class="card-body">--}}
{{--             Yeah you can customise based on your requirements.--}}
{{--              </div>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--              <!--Q9-->--}}

{{--               <!--Q10-->--}}
{{--             <div class="card p-3 my-5">--}}

{{--            <!-- Card header -->--}}
{{--            <div role="tab" id="headingOne10">--}}
{{--              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading10"--}}
{{--                aria-controls="heading10">--}}
{{--                <p class="mb-0 dark-grey-text" style="float:left;">--}}
{{--                    <i class="far fa-question-circle"></i>What if I do not feel satisfied with my goods ?--}}

{{--                </p>--}}
{{--                <p align="right">--}}
{{--                    <i class="fas fa-angle-down rotate-icon"></i>--}}
{{--             </p>--}}
{{--              </a>--}}

{{--            </div>--}}

{{--            <!-- Card body -->--}}
{{--            <div id="heading10" class="collapse" role="tabpanel" aria-labelledby="heading10"--}}
{{--              data-parent="#accordionEx">--}}
{{--              <div class="card-body">--}}
{{--              You write to us at any time, we will try to make satisfied by--}}
{{--exchanging or some other process.--}}
{{--              </div>--}}
{{--            </div>--}}

{{--          </div>--}}
{{--              <!--Q10-->--}}
{{--                  <!--Q10-->--}}
{{--             <div class="card p-3 my-5">--}}

{{--            <!-- Card header -->--}}
{{--            <div role="tab" id="headingOne11">--}}
{{--              <a data-toggle="collapse" data-parent="#accordionEx" href="#heading11"--}}
{{--                aria-controls="heading11">--}}
{{--                <p class="mb-0 dark-grey-text" style="float:left;">--}}
{{--                    <i class="far fa-question-circle"></i>What is the return policy ?--}}

{{--                </p>--}}
{{--                <p align="right">--}}
{{--                    <i class="fas fa-angle-down rotate-icon"></i>--}}
{{--             </p>--}}
{{--              </a>--}}

{{--            </div>--}}

{{--            <!-- Card body -->--}}
{{--            <div id="heading11" class="collapse" role="tabpanel" aria-labelledby="heading11"--}}
{{--              data-parent="#accordionEx">--}}
{{--              <div class="card-body">--}}
{{--            Yeah you can return at any time, if not satisfied.--}}
{{--              </div>--}}
{{--            </div>--}}

{{--          </div>--}}
              <!--Q11-->

        </div>
        <!-- Accordion wrapper -->


      </div>
      <!--Grid column-->
      </div>

</section>
@endsection
