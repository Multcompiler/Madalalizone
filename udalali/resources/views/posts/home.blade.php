@extends('main')

@section('title','| Sell or Buy')

@section('innerlinks')
    <div class="header-page-title clearfix">
        <div class="title-overlay"></div>
    </div>
@endsection
@section('content')
    <div class="page-content">
        <div class="responsive-tabs dashboard-tabs">

            <ul class="nav nav-tabs">
                <li class="active"><a href="#buy">Buy</a></li>
                <li><a href="#sell">Sell</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="buy">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 page-content">
                            <div class="widget sidebar-widget white-container contact-form-widget">

                                @include('partials._messages')

                                <h5 class="widget-title">REQUEST FOR BUY</h5>

                                <div class="widget-content">

                                    {!! Form::open(['action' => 'PostController@storebuy','class' => 'mt30','data-parsley-validate' => '']) !!}
                                    <div class="form-group">
                                        {{Form::text('itemname', null, ['placeholder' => 'Item Name','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::hidden('categoryid', 1 , ['class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('brand', null, ['placeholder' => 'Brand','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('offeramount', null, ['placeholder' => 'Offer Amount','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::textarea('description', null, ['placeholder' => 'Description','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('phone', null, ['placeholder' => 'Phone Number','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('location', null, ['placeholder' => 'Location','class' => 'form-control','required' => ''])}}
                                    </div>

                                    {{ Form::button('<i class="fa fa-envelope-o"></i> Send Request', ['type' => 'submit', 'class' => 'btn btn-block btn-default'] )  }}

                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end .tabe pane -->

                <div class="tab-pane" id="sell">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 page-content">
                            <div class="widget sidebar-widget white-container contact-form-widget">
                                <h5 class="widget-title">REQUEST FOR SELL</h5>

                                <div class="widget-content">

                                    {!! Form::open(['action' => 'PostController@storesell','class' => 'mt30','data-parsley-validate' => '']) !!}
                                    <div class="form-group">
                                        {{Form::text('itemname', null, ['placeholder' => 'Item Name','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::hidden('categoryid', 2 , ['class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('brand', null, ['placeholder' => 'Brand','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('amount', null, ['placeholder' => 'Amount','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::textarea('description', null, ['placeholder' => 'Description','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('phone', null, ['placeholder' => 'Phone Number','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('location', null, ['placeholder' => 'Location','class' => 'form-control','required' => ''])}}
                                    </div>
                                    {{ Form::button('<i class="fa fa-envelope-o"></i> Send Request', ['type' => 'submit', 'class' => 'btn btn-block btn-default'] )  }}

                                    {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end .tabe pane -->


            </div> <!-- end .tab-content -->
        </div> <!-- end .responsive-tabs.dashboard-tabs -->

    </div> <!-- end .page-content -->
@endsection