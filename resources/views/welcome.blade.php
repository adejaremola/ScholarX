@extends('layouts.default')

@section('content')
<br>
<br>
<br>

<div class="jumbotron text-center" style="width: 70%; margin-left: 15%;">
  <h1>ScholarX Village</h1> 
  <p>A Platform that helps needing Senior Secondary and Undergraduate students get their school fees paid by individuals.</p> 
  <br>
  <div class="row" >
    <div class="col-md-3">
      
    </div>
    <div class="col-md-3">
        <p>Students</p>
        <a href="{{ route('apply') }}" role="button" class="btn btn-success btn-lg">Apply For Funding</a>
    </div>
    <div class="col-md-3">
        <p>Sponsors</p>
        <a href="{{ route('index') }}" role="button" class="btn btn-warning btn-lg">Fund a Student Today</a>
    </div>
    <div class="col-md-3">
      
    </div>
  </div>
</div>
<br>
<div  class="category-module" id="latest_category">
    <h3 class="subtitle">Latest Applications - <a class="viewall" href="category.tpl">view all</a></h3>
    <div class="category-module-content">
        <div id="tab-cat1" class="tab_content">
            <div id="carousel" class="owl-carousel nxt">
                @foreach($applications as $application)
                <div class="item text-center"> 
                    <a href="{{ url('/applications/'.$application->id.'/details') }}">
                        <img src="{{ $application->profiler->pic_url }}" alt="Palm" class="img-responsive" />
                    </a> 
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<br>


@stop
