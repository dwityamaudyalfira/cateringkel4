    <!-- ======= Header ======= -->
    <header id="header" >
        <div class="container d-flex" >

          <div class="logo mr-auto" >
            <!--  <h1 class="text-light"><a href="/">CompanYName</a></h1>  -->
            <a href="/pemilik-dash"><img src=" {{asset('assets/img/Desi.png')}}" alt="" class="img-fluid" ></a>

          </div>
          <p class="mobile-nav-toggle"><i class="fas fa-bars"></i> </p>
          <nav class="nav-menu d-none d-lg-block contentfont" >
            <ul style="margin-top:5px">
              <li class="active"><a href="/pemilik-dash">Home</a></li>
{{--              <li><a href="/#about">Tentang kami</a></li>--}}
{{--              <li><a href="/#Startups">Menu</a></li>--}}

{{--              <li><a href="/#Startups">Team</a></li>--}}

{{--              <li><a href="/#Startups"><i class="fas fa-headset"  ></i> Bantuan</a></li>--}}

                @if (Route::has('login'))

                @auth
                  <li class="drop-down"><a href="#">Dashboard <i class="fas fa-angle-down"></i></a>
                       <ul>

                            <li><a href="{{url('pemilik-Orders')}}" >Pesanan</a></li>
{{--                            <li><a href="{{url('pemilik-Transactions')}}" >Rincian Transaksi</a></li>--}}
                            <li><a href="/#Products"> Menu Makanan</a></li>
                            <a   href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            </li>
                        </ul>
                  </li>

                @else
                <li> <a href="{{ route('login') }}">Login</a> </li>

                    @if (Route::has('register'))
                    <li> <a href="{{ route('register') }}">Daftar</a> </li>
                    @endif
                @endauth

                @endif



{{--             <li><a href="/#Startups" style="margin-left:15px;">   <i class="fas fa-shopping-cart fa-2x"></i></a></li>--}}

            </ul>

          </nav><!-- .nav-menu -->

        </div>
      </header><!-- End Header -->
