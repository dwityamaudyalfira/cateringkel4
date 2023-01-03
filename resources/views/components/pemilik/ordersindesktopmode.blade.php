<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
{{--    <h3 class="py-2 px-5">Daftar Pesanan</h3>--}}
   <div class="row px-5">

       <div class="col-md-12">
               <div class="card">
                   <div class="card-body table-responsive">
                       <table class="table table-striped table-bordered ">
                           <thead>
                               <th>No.</th>
                               <th>Rincian Pesanan</th>
                               <th>Alamat Pengiriman</th>
                               <th>Total Harga (Rp)</th>
{{--                               <th>Action</th>--}}
                           </thead>
                           @php
                           $total = 0;
                           $email= Auth::user()->email;
                           $Orders=App\Models\Order::all();
                         @endphp
                           <tbody>
                               @foreach ($Orders as $item)
                           <tr>

                               <td>{{$item->id}}</td>
                               <td><?php echo $item->Order_Details?></td>
                               <td><?php echo $item->Delivery_Address ?></td>
                               <td>Rp.{{number_format($item->Amount)}}</td>
{{--                               <td>--}}
                                @php
                                $total += $item->Amount;
                                @endphp
{{--                                <a href="{{url('pemilik-Order-Status/'.$item->id.'')}}" class="badge btaobtn btaobtn-primary px-2 py-2">Check Status</a>--}}

{{--                                 @if($item->Delivery_Status!='pending' || $item->Order_Cancel_Status==1)--}}
{{--                                  <a href="{{url('pemilik-Order-Status/'.$item->id.'')}}"    class="badge btaobtn btaobtn-danger px-2 py-2 disabled">Cancel Order</a>--}}
{{--                                  @else--}}
{{--                                      <a href="{{url('pemilik-Order-Cancel/'.$item->id.'')}}" class="badge btaobtn btaobtn-danger px-2 py-2">Cancel Order</a>--}}

{{--                                 @endif--}}

{{--                               </td>--}}
                           </tr>
                               @endforeach
                           <tr>
                               <td colspan="2"></td>
                               <th>Total :</th>
                               <td>Rp.{{number_format($total)}}</td>
                           </tr>
                           </tbody>

                       </table>
                   </div>
               </div>
       </div>
{{--        <div class="col-md-12">--}}
{{--            <br>--}}
{{--            <p  align="center">--}}
{{--            {{ $Orders->links()}}</p>--}}
{{--        </div>--}}
   </div>

   </div>

