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
        <a href="{{ url('/user/apply') }}" role="button" class="btn btn-success btn-lg">Apply For Funding</a>
    </div>
    <div class="col-md-3">
        <p>Sponsors</p>
        <a href="{{ url('/applications/index') }}" role="button" class="btn btn-warning btn-lg">Browse FundRaisers</a>
    </div>
    <div class="col-md-3">
      
    </div>
  </div>
</div>
<br>
<br>
<br>


@stop
