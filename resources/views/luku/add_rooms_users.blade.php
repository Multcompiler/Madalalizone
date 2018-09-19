@extends('main')

@section('title','| Loan Application')

@section('innerlinks')
    <div class="header-page-title clearfix">
        <div class="title-overlay"></div>

    </div>
@endsection
@section('content')
    <div class="row" style="margin-top: 10px;">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="row">
                @include('partials._messages')
            </div>
            <div class="widget sidebar-widget white-container contact-form-widget">
                <div id="payment_add" class="row">
                    <div class="col-sm-10 col-sm-offset-1 page-content">
                        <div class="widget sidebar-widget white-container contact-form-widget">

                            <h5 class="widget-title text-center">USER ADD</h5>

                            <div class="widget-content">
                                <form method="post" action="{{route('add_room_users')}}" class="mt30" enctype="multipart/form-data" data-parsley-validate>
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        {{Form::text('firstname', null, ['placeholder' => 'Firstname','class' => 'form-control','required' => ''])}}
                                    </div>

                                    <div class="form-group">
                                        {{Form::text('lastname', null, ['placeholder' => 'Lastname','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('phone', null, ['placeholder' => 'Phone','class' => 'form-control','required' => ''])}}
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-block" style="color: white;"><i
                                                class="fa fa-envelope-o"></i> Upload User
                                    </button>
                                </form>


                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection