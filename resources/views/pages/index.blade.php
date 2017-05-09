@extends('layouts.default')

@section('content')
<div class="jumbotron text-center">
  <h1>ScholarX Village</h1> 
  <p>A Platform that helps needing Senior Secondary and Undergraduate students get their school fees paid by individuals.</p> 
  <br>
  <div class="row">
    <div class="col-md-6" style="padding-left: 20%">
        <p>Students</p>
        <a href="{{route('raise.fund')}}" role="button" class="btn btn-info btn-lg">Create a FundRaiser</a>
    </div>
    <div class="col-md-6" style="padding-right: 20%">
        <p>Funders/Sponsors</p>
        <a href="{{route('fund_raisers')}}" role="button" class="btn btn-warning btn-lg">Browse FundRaisers</a>
    </div>
  </div>
</div>


@stop