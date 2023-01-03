@extends('layout')
@section('title') Desi Catering -419 page @endsection
@section('keywords') Home,About,Contact,Car @endsection
@section('description') Write some descripton about the webpage @endsection
@section('content')

 <style>

@media (min-width: 768px)
{
    .not_found_image
    {
        width:60%;
        margin-top:-10%;
    }
}
@media (max-width: 768px)
{
    .not_found_image
    {
        width:100%;

    }
}
 </style>
<div align="center"  style=" background-color:#DADADA;padding:10%;">

    <img src="{{asset('img/419.png')}}" class="not_found_image">

                <p>Silakan kembali dan segarkan halaman lalu coba lagi! Jika tidak berhasil maka tutup browser dan lakukan lagi...</p>


</div>
@endsection
