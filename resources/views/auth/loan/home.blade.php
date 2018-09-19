@extends('main')

@section('title','| Register')

@section('content')
    <div class="page-content">
        <div class="responsive-tabs dashboard-tabs">
            <div class="col-sm-8 col-sm-offset-2 page-content" style="padding-top: 60px;padding-bottom: 180px;">

                @include('partials._messages')

                <div class="widget sidebar-widget white-container contact-form-widget">
                    <h5 class="widget-title text-center">CREATE A LOAN REQUEST</h5>
                    <div class="widget-content">
                        {!! Form::open(['class' => 'mt30','data-parsley-validate' => '']) !!}
                        <div class="form-group">
                            {{Form::text('title', null, ['placeholder' => 'Company name Or Title Or Name','class' => 'form-control','required' => ''])}}
                        </div>
                         <div class="form-group">
                            {{Form::textarea('description', null, ['placeholder' => 'Description Info For Loan','class' => 'form-control','required' => ''])}}
                        </div>
                        <div class="form-group">
                            {{Form::text('miniamount', null, ['placeholder' => 'Minimum Amount Provided','class' => 'form-control','required' => ''])}}
                        </div>
                        <div class="form-group">
                            {{Form::text('maxamount', null, ['placeholder' => 'Maximum Amount Provided','class' => 'form-control','required' => ''])}}
                        </div>
                        <div class="form-group">
                            {{Form::text('rate', null, ['placeholder' => 'Loan Rate. 1 - 100','class' => 'form-control','required' => ''])}}
                        </div>
                        <div class="form-group">
                            {{Form::text('penalty', null, ['placeholder' => 'Penalty Rate. 1 - 100','class' => 'form-control','required' => ''])}}
                        </div>
                        {{ Form::button('<i class="fa fa-lock"></i> Create', ['type' => 'submit', 'class' => 'btn btn-block btn-default'] )  }}
                        {!! Form::close() !!}

                        <div class="form-group" style="padding-top: 20px;">
                            <a href="{{url('/')}}"><i class="fa fa-long-arrow-left"></i> Home</a>
                        </div>

                    </div>
                </div>
            </div> <!-- end .responsive-tabs.dashboard-tabs -->
        </div>
    </div> <!-- end .page-content -->
@endsection