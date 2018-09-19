@extends('main')

@section('title','| Register')

@section('content')

    <div class="page-content">
        <div class="responsive-tabs dashboard-tabs">
            <div class="col-sm-7 col-sm-offset-1 page-content" style="padding-top: 25px;">

                @include('partials._messages')

                <div class="widget sidebar-widget white-container contact-form-widget">
                    <h5 class="widget-title text-center">SEND US A MESSAGE</h5>
                    <div class="widget-content">

                        {!! Form::open(['class' => 'mt30','data-parsley-validate' => '']) !!}
                        <div class="form-group">
                            {{Form::email('email', null, ['placeholder' => 'Email Address','class' => 'form-control','required' => ''])}}
                        </div>
                        <div class="form-group">
                            {{Form::email('name', null, ['placeholder' => 'Name','class' => 'form-control','required' => ''])}}
                        </div>
                        <div class="form-group">
                            {{Form::textarea('message', null, ['placeholder' => 'How can we help ','class' => 'form-control','required' => ''])}}
                        </div>
                        {{ Form::button('<i class="fa fa-envelope-o"></i> Send Message', ['type' => 'submit', 'class' => 'btn btn-block btn-default'] )  }}

                        {!! Form::close() !!}

                        <div class="form-group" style="padding-top: 20px;">
                            <a href="{{url('/')}}"><i class="fa fa-long-arrow-left"></i> Home</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3 page-content" style="padding-top: 25px;">

                @include('partials._messages')

                <div class="widget sidebar-widget white-container contact-form-widget">
                    <div class="row">
                        <div class="col-sm-12">
                            <h5 class="bottom-line mt10">Office</h5>
                                  <hr/>
                            <address>
                                University Road, UDSM <br>
                                University Of Dar es Salaam <br>
                            </address>

                            <p>
                                Phone: <a href="tel:+11234567890">+255 768064878</a> <br>
                                Email: <a href="mailto:godsonmandla@gmail.com">godsonmandla@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="widget sidebar-widget white-container contact-form-widget">
                    <div class="row">
                        <div class="col-sm-12">
                            <img src="{{asset('img/miande.jpg')}}">
                        </div>
                    </div>
                </div>
            </div> <!-- end .responsive-tabs.dashboard-tabs -->
        </div>
    </div> <!-- end .page-content -->
@endsection