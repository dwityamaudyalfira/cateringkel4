<div class="col-md-7  " id="shipping_and_returns" >
    <form method="POST" action="order-proceed">
        @csrf

        <!--Form Data For Shippping and Payment Details Started at  Here -->
        <div class="card  p-3 animated fadeInUp" >

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                    <input type="text"   name="Door_No"  placeholder="Nomor Rumah" value="{{Auth::user()->address1}}"  class="form-control">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">

                    <input type="text"   name="LandMark"  placeholder="Alamat"    value="{{Auth::user()->address2}}" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">

                    <input type="text" name="city" placeholder="Kota"   value="{{Auth::user()->city}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">

                    <input type="text"     name="pincode"  placeholder="Kode Pos"    value="{{Auth::user()->pincode}}"  class="form-control">
                    </div>
            </div>


                <div class="col-md-12">
                    <div class="form-group">

                    <input type="text"      name="state"   placeholder="Provinsi"  value="{{Auth::user()->state}}" class="form-control">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">

                    <input type="text"   placeholder="Negara"    name="country" value="{{Auth::user()->country}}"  class="form-control">
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="form-group">

                    <input type="number"  placeholder="No. Handphone"   name="mno" class="form-control" value="{{Auth::user()->mnumber}}">
                    </div>
                </div>
                <div class="col-md-12   ">
                    <div class="form-group">

                    <input type="number"  placeholder="No. Handphone Alternatif"     name="alternativemno"  class="form-control" value="{{Auth::user()->alternativemno}}">
                    </div>
                </div>






            <div class="col-md-12   ">
                <strong>  Metode Pembayaran:   </strong>
            </div>


            <div class="row px-3">
{{--                <div class="col-md-12">--}}
{{--                    <div class="form-group">--}}
{{--                            <input type="radio"  name="Payment_Method" value="Online"> Online :     <img src="http://i0.wp.com/ecoheater.ie/wp-content/uploads/2018/10/cards-.jpg" style="width:200px;">--}}
{{--            --}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-md-12">
                    <div class="form-group">
                            <input type="radio" name="Payment_Method" value="Tunai"> Tunai di Toko
                    </div>
                </div>



            </div>


        </div>


            <!--Form Data For Shippping and Payment Details Ended Here -->
            <!--Form Data For Order Details,....Starts Here-->
            @if(session('cart'))
                <?php $total=0;$count=0;$order_details='';$delivery_charges=0;?>

                @foreach(session('cart') as $id => $details)
                    <?php     $count=$count +1 ;
                    $total += $details['Final_Price'] * $details['item_quantity'] ?>
                    <?php $delivery_charges = $delivery_charges + $details['delivery_charges'] ?>
                    @php
                        $order_details=$order_details.'<br>'.
                        ('Product Name:'.$details["item_name"].', Quantity: '.$details["item_quantity"].
                        '<br> Price:'.$details["Final_Price"]);
                    @endphp
                @endforeach


            @endif
            @if(session('promocode'))
                <input type="hidden" value="{{ $total + $delivery_charges - session('discount') * $total / 100 }}" class="form-control" name="Amount" >
            @else
                <input type="hidden" value="{{$total + $delivery_charges}}" name="Amount" class="form-control">
            @endif
            <textarea  hidden class="form-control">{{$order_details}}</textarea>
            <input type="hidden" value="{{session('promocode')}}" class="form-control">
            <div align="center" class="col-md-12">

                <button type="submit"   class="btn btn-dark btn-lg">BUAT PESANAN</button>

            </div>
        <!--Form Data For Order Details,....Ended Here-->
    </form>
</div>
