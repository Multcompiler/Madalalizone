@extends('main')

@section('title','| Loan Application')

@section('innerlinks')
    <div class="header-page-title clearfix">
        <div class="title-overlay"></div>

    </div>
@endsection
@section('content')
    <div class="page-content">
        <div class="responsive-tabs dashboard-tabs">
            <div class="tab-content">
                <div class="tab-pane active" id="application-form">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 page-content">
                            <div class="widget sidebar-widget white-container contact-form-widget">

                                @include('partials._messages')

                                <h5 class="widget-title">APPLICATION LOAN FORM</h5>

                                <div class="widget-content">

                                    {!! Form::open(['action' => 'PostController@storebuy','class' => 'mt30','data-parsley-validate' => '']) !!}
                                    <div class="form-group">
                                        {{Form::text('fullname', null, ['placeholder' => 'Full Name','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::hidden('sponsorid', 1 /*here goes id for the sponsor */ , ['class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('bonditem', null, ['placeholder' => 'Bond Item','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('bonditemprice', null, ['placeholder' => 'Bond Item Price','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('amountrequest', null, ['placeholder' => 'Amount Request','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('returnmonth', null, ['placeholder' => 'Loan Return Month E.g 1','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('phone', null, ['placeholder' => 'Phone Number','class' => 'form-control','required' => ''])}}
                                    </div>

                                    <div class="form-group">
                                        {{Form::checkbox('acceptterms')}} I accept and Agree terms and Condition
                                    </div>

                                    {{ Form::button('<i class="fa fa-envelope-o"></i> Submit Loan Request', ['type' => 'submit', 'class' => 'btn btn-block btn-default'] )  }}
                                    <a href="/" class="btn btn-default btn-block">Cancel</a>
                                    {!! Form::close() !!}

                                </div>

                            </div>
                            <div class="col-md-12" style="padding: 10px;background-color: #1c94c4;font-size:15px;margin-bottom: 0;margin-top: 5px;">
                                <marquee scrollamount="2">Jinsi ya kupata access ya udalali kwenye website wasiliana na +255768064878
                                    kwa tsh 2000 kwa mwezi
                                </marquee>
                            </div>
                        </div>
                    </div>
                </div> <!-- end .tabe pane -->
            </div> <!-- end .tab-content -->
        </div> <!-- end .responsive-tabs.dashboard-tabs -->

    </div> <!-- end .page-content -->
@endsection