@extends('layouts.default')

@section('content') 
        @if (session('message'))
            <div class="alert alert-success">
                <strong>{{ session('message') }}</strong>

                <br>
            </div>
        @endif
        <div itemscope itemtype="http://schema.org/Product">
            <h1 class="title text-center" itemprop="name">{{ $application->profiler->user->name}}</h1>
            <div class="row product-info" style="width: 76%; margin-left: 12%;">
                <div class="col-sm-6">
                    <div class="image">
                        <img class="img-responsive" itemprop="image" id="zoom_01" src="{{ $application->profiler->pic_url }}" data-zoom-image="image/product/macbook_air_1-500x500.jpg" /> 
                    </div>
                    <ul class="list-unstyled description">
                        <li><b>Institution:</b> <a href="#"><span itemprop="brand"> {{ $application->profiler->institution }}</span></a></li>
                        <li><b>Faculty:</b> <span itemprop="mpn"> {{ $application->profiler->faculty }}</span></li>
                        <li><b>Department:</b> {{ $application->profiler->department }}</li>
                        <li><b>Level:</b> {{ $application->profiler->level }}</li>
                        <li><b>CGPA:</b> {{ $application->profiler->cgpa }}</li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <p><b>Status:</b> <span class="instock">{{ $application->getStatus() }}</span></p>
                    <ul class="price-box">                  
                        <li class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <span itemprop="price">{{ $application->amount }}
                            </span>
                        </li>
                        <li></li>                 
                    </ul>
                    <div id="product">
                        {!! Form::open(['route' => 'pay']) !!}
                        <div class="input-group">
                            <input type="hidden" name="email" value="aa@gmail.com"> {{-- required --}}
                            <input type="hidden" name="orderID" value="345">
                            <input type="number" name="amount" id="amount" sr-only> {{-- required in kobo --}}
                            <input type="hidden" name="quantity" value="3">
                            <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                            <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}


                            <input type="number" class="form-control" id="input_coupon" placeholder="Enter your amount here" value="" name="coupon">
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="Fund">
                            </span>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <script>
                    $(document).ready(function(){
                        $("#input_coupon").change(function(){
                            $("#amount").val($("#input_coupon").val() * 100);
                        });
                    });
                    </script>
                  <!-- <form class="form-horizontal">
                    <div class="form-group required">
                      <a href="{{ url('/applications/'.$application->id.'/fund') }}" type="button" id="button-cart" class="col-sm-4 btn btn-primary btn-lg">Sponsor</a>
                      <div class="col-sm-8">
                          
                    </div>
                </div>
                  </ form>-->
                </div>
              </div>
            </div>
        </div>
@stop
