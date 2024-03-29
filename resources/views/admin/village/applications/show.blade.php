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
                    <p>{{ $application->profile   }}</p>
                    <p><b>Status:</b> <span class="instock">{{ $application->getStatus() }}</span></p>
                    <ul class="price-box">                	
                        <li class="price" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                          <span itemprop="price">{{ $application->amount }}
                          </span>
                        </li>
                        <li></li>                 
                    </ul>
                    @if($application->status == 2)
                    <h4 class="text-center">Fundings</h4>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $i = 1;
                                ?>
                                @foreach($application->sponsor as $fund)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td>{{ $fund->created_at->diffForHumans() }}</td>
                                    <td>{{ $fund->amount }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td></td>
                                    <td>TOTAL</td>
                                    <td>{{ $application->sponsor->sum(['amount']) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    @endif
                    <div id="product">
                        {!! Form::model($application, ['url' => 'admin/village/applications/'.$application->id]) !!}
                        {!! method_field('PUT') !!}
                    	<div class="input-group">
            				<select class="form-control" id="status" name="status">
    		                    <option value=""> --- Select New Status --- </option>
                                <option value="0">Pending</option>
                                <option value="1">Approved</option>
                                <option value="2">In fund</option>
                                <option value="3">Funded</option>
    		                    <option value="4">Rejected</option>
    		                </select>
                            <span class="input-group-btn">
                                <input type="submit" class="btn btn-primary" data-loading-text="Loading..." id="button-coupon" value="Change Status">
                            </span>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
              </div>
            </div>
        </div>
@stop
