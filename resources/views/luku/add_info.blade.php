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

                            <h5 class="widget-title text-center">LUKU INFORMATION'S</h5>

                            <div class="widget-content">
                                <form method="post" action="{{route('store_luku_info')}}" class="mt30" enctype="multipart/form-data" data-parsley-validate>
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <select class="form-control" name="user_id" required>
                                            <option value="">-- Select Your Name --</option>
                                            @foreach($users_room as $users)
                                                <option value="{{$users->id}}">{{$users->firstname." ".$users->lastname}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type='date' name="date_bought" class="form-control" placeholder="Token Date Bought" required/>
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('token_number', null, ['placeholder' => 'Token Number','class' => 'form-control','required' => ''])}}
                                    </div>

                                    <div class="form-group">
                                        {{Form::text('token_units', null, ['placeholder' => 'Token Units','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('amount', null, ['placeholder' => 'Amount','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        <input type='file' name="proof_image" class="form-control" placeholder="Screenshot of Token" required/>
                                    </div>
                                    <div class="alert alert-warning text-center" role="alert">
                                        You Can't Edit Once You Submit Your Form, Please Verify All The information First.
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block" style="color: white;"><i
                                                class="fa fa-envelope-o"></i> Submit Luku Info
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