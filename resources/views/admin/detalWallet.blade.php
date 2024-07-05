@extends('layouts.admin')
@section('content')
Home
@endsection

@section('main')
    <div class="row">
        <div class="col-lg-4 col-md-12" style="background: #fff ; padding: 1rem  ; border-radius: 1rem" >
         <h4 style="color: #092938 ; font-size: 16px ">Steps to payment</h4>
         <img src="{{asset('admin/img_de/step1.svg')}}"/> <span style="color: #092938 ; font-size: 16px">Token Sale Agreement</span>
         <br>

        </div>
        <div class="col-lg-7 col-md-12" style="background: #fff ; padding: 1rem  ; border-radius: 1rem ; margin-left: 1rem" >
            <h5>Token Sale Agreement</h5>
            <div class="row">
               <div class="col-lg-6">
                 <h6>SIGN TOKEN SALE AGREEMENT</h6>
                 <p>AFTER SIGNING, YOU CAN VIEW THE DOCUMENT</p>
               </div>
               <div class="col-lg-6">
                    <button>View document</button>
                </div>
            </div>
        </div>
    </div>

@endsection
