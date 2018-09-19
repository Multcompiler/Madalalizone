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

                <div class="row">

                    <div class="col-sm-6">
                        <button onclick="addPayment()" class="btn btn-block btn-primary">Add Payment
                        </button>
                    </div>
                    <div class="col-sm-6">
                        <button onclick="addBudget()" class="btn btn-block btn-primary ">Add Budget
                            Usage
                        </button>

                    </div>
                </div>
                <div id="payment_add" class="row hide">
                    <div class="col-sm-10 col-sm-offset-1 page-content">
                        <div class="widget sidebar-widget white-container contact-form-widget">

                            <h5 class="widget-title text-center">PAYMENT RECEIPT INFO</h5>

                            <div class="widget-content">
                                <form method="post" action="{{route('party_receive')}}" class="mt30"
                                      data-parsley-validate>
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        {{Form::text('fullname', null, ['placeholder' => 'Full Name','class' => 'form-control','required' => ''])}}
                                    </div>

                                    <div class="form-group">
                                        {{Form::text('amount', null, ['placeholder' => 'Amount Received','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" name="faculty" required>
                                            <option value="">-- Default --</option>
                                            <option value="CS IN">CS IN</option>
                                            <option value="CS WITH">CS WITH</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block"><i
                                                class="fa fa-envelope-o"></i> Confirm Payment
                                    </button>
                                </form>


                            </div>

                        </div>

                    </div>
                </div>
                <div id="budget_add" class="row hide">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="widget sidebar-widget white-container contact-form-widget">

                            <h5 class="widget-title text-center">PARTY AMOUNT USAGE INFORMATION</h5>

                            <div class="widget-content">
                                <form method="post" action="{{route('party_budget_add')}}" class="mt30"
                                      data-parsley-validate>
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        {{Form::text('usage_for', null, ['placeholder' => 'Usage For','class' => 'form-control','required' => ''])}}
                                    </div>

                                    <div class="form-group">
                                        {{Form::text('total', null, ['placeholder' => 'Total','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('amount', null, ['placeholder' => 'Amount Spent','class' => 'form-control','required' => ''])}}
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block"><i
                                                class="fa fa-envelope-o"></i> Confirm Budget
                                    </button>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="page-content" style="padding: 0px;">
        <div class="responsive-tabs dashboard-tabs">
            <div class="tab-content" style="padding: 0px;">
                <div class="tab-pane active" id="application-form">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="widget sidebar-widget white-container contact-form-widget">
                                <h5 class="widget-title text-center">SYSTEM INFORMATION'S</h5>

                                <div class="widget-content">

                                    <a class="btn btn-primary btn-block" role="button" style="margin-bottom: 5px;" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                                        View Participants
                                    </a>
                                    <div class="collapse" id="collapseExample1" style="padding: 10px;">
                                        <div class="row">
                                            <ul class="list-unstyled">
                                                @if($check_participants > 0)
                                                    @foreach($all_participants as $all_participant)
                                                        <li><span>Full name:  <b
                                                                        class="aplicant-detail">{{$all_participant->fullname}}</b></span>
                                                        </li>
                                                        <li><span>Faculty:  <b
                                                                        class="aplicant-detail">{{$all_participant->faculty}}</b></span>
                                                        </li>
                                                        <li><span>Amount: <b class="aplicant-detail">{{number_format($all_participant->amount)}}
                                                                    tsh</b></span></li>
                                                        <li><span>Status: <b class="aplicant-detail"><span
                                                                            class="label label-primary">Confirmed Received</span></b></span>
                                                        </li>
                                                        {!! Form::open(['route' => ['party_payment_delete', $all_participant->id],'method' => 'DELETE'],['data-parsley-validate' => '']) !!}
                                                        <button type="submit" class="btn btn-primary btn-block"
                                                                style="margin: 5px;">Delete Payment
                                                        </button>
                                                        {!! Form::close() !!}
                                                        <hr/>
                                                    @endforeach
                                                    <p style="text-align: center;">Amount
                                                        Collected: {{number_format($amount_collected->total_amount)}}tsh</p>
                                                @else
                                                    <p style="text-align: center">No payment Received Yet</p>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="btn btn-primary btn-block" role="button" style="margin-top: 5px;" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                                        View Budget Info
                                    </a>
                                    <div class="collapse" id="collapseExample2" style="padding: 10px;">
                                        @if($budget_usage_count > 0)
                                            @foreach($budget_usage as $budget_info)
                                                <img src="{{asset('img/exit.png')}}"> Usage For: {{$budget_info->usage_for}} <br/>
                                                <img src="{{asset('img/exit.png')}}"> Amount: {{$budget_info->amount}} <br/>
                                                <img src="{{asset('img/exit.png')}}"> Total: {{$budget_info->total}} <br/>
                                                {!! Form::open(['route' => ['party_budget_delete', $budget_info->id],'method' => 'DELETE'],['data-parsley-validate' => '']) !!}
                                                <button type="submit" class="btn btn-primary btn-block"
                                                        style="margin: 5px;">Delete Payment
                                                </button>
                                                {!! Form::close() !!}
                                                <hr/>
                                            @endforeach
                                            <p style="text-align: center;">Amount Remain:
                                                @if($amount_collected->total_amount > $budget_amount->total_amount_usage)
                                                    {{number_format($amount_collected->total_amount - $budget_amount->total_amount_usage)}} tsh
                                                @else
                                                    0 tsh
                                                @endif
                                            </p>
                                        @else
                                            <p style="text-align: center">Add Party Usage Information's</p>
                                        @endif
                                    </div>


                                </div>

                            </div>

                        </div>
                    </div>
                </div> <!-- end .tabe pane -->
            </div> <!-- end .tab-content -->
        </div> <!-- end .responsive-tabs.dashboard-tabs -->

    </div> <!-- end .page-content -->
@endsection