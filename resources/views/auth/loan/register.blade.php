@extends('main')

@section('title','| Register')

@section('content')
    <div class="page-content">
        <div class="responsive-tabs dashboard-tabs">
            <div class="col-sm-8 col-sm-offset-2 page-content" style="padding-top: 60px;padding-bottom: 180px;">

                @include('partials._messages')

                <div class="widget sidebar-widget white-container contact-form-widget">
                    <h5 class="widget-title text-center">REGISTER AS LOAN PROVIDER</h5>
                    <div class="widget-content">

                        {!! Form::open(['class' => 'mt30','data-parsley-validate' => '']) !!}
                        <div class="form-group">
                            {{Form::email('email', null, ['placeholder' => 'Email Address','class' => 'form-control','required' => ''])}}
                        </div>
                        <div class="form-group">
                            {{Form::password('password', ['placeholder' => 'Password','class' => 'form-control','required' => ''])}}
                        </div>
                        <div class="form-group">
                            {{Form::password('password_confirmation', ['placeholder' => 'Confirm Password','class' => 'form-control','required' => ''])}}
                        </div>

                        {{ Form::button('<i class="fa fa-lock"></i> Register', ['type' => 'submit', 'class' => 'btn btn-block btn-default'] )  }}
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