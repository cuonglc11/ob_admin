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
         <img src="{{asset('admin/img_de/line.svg')}}" style="margin-left: 10px;"/>
         <br>
         <img src="{{asset('admin/img_de/step1.svg')}}"/> <span style="color: #092938 ; font-size: 16px">Token Sale Agreement</span>
         <br>
         <img src="{{asset('admin/img_de/line.svg')}}" style="margin-left: 10px;"/>
         <br>
         <img src="{{asset('admin/img_de/step1.svg')}}"/> <span style="color: #092938 ; font-size: 16px">Token Sale Agreement</span>
         <br>
         <img src="{{asset('admin/img_de/line.svg')}}" style="margin-left: 10px;"/>
         <br>
         <img src="{{asset('admin/img_de/step1.svg')}}"/> <span style="color: #092938 ; font-size: 16px">Token Sale Agreement</span>
         <div class="row" style="margin-top: 1rem">
            <div class="col-6">
                  <button>Admin</button>
            </div>
            <div class="col-6">
                <button>Admin</button>
          </div>
         </div>

        </div>
        <div class="col-lg-7 col-md-12" style="background: #fff ; padding: 1rem  ; border-radius: 1rem ; margin-left: 1rem" >
            <h5>Token Sale Agreement</h5>
            <div class="row">
               <div class="col-lg-6">
                 <h6 style="color: #092938; font-size: 16px;">SIGN TOKEN SALE AGREEMENT</h6>
                 <p>AFTER SIGNING, YOU CAN VIEW THE DOCUMENT</p>
               </div>
               <div class="col-lg-6">
                    <button style="background: #092938 ; padding: 10px 24px ; border-radius: 12px ; color:  #fff ;float: inline-end;">View document</button>
                </div>
            </div>
        </div>
    </div>
@endsection
