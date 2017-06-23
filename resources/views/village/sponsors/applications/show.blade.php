@extends('layouts.default')


@section('content')	
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
                <p>{{ $application->profile }}</p>
                <ul class="price-box">
                	@if($application->sponsorAmt())
                  	<li class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer"><span class="price-old">$1,202.00</span> <span itemprop="price">$1,142.00<span itemprop="availability" content="In Stock"></span></span></li>
                  	<li></li>
                  	<li>Ex Tax: $950.00</li>
                  @else
                    <li class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                      <span itemprop="price">{{ $application->amount }}
                      </span>
                    </li>
                    <li></li>
                  @endif
                </ul>
                <div id="product">
                  <div class="cart">
                    <div>
                      <a href="{{ url('/applications/'.$application->id.'/fund') }}" type="button" id="button-cart" class="btn btn-primary btn-lg">Sponsor</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

@stop