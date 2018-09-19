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

            <div class="tab-content" style="padding-top: 0px;">
                <div class="tab-pane active" id="termsandconditions">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="widget sidebar-widget white-container contact-form-widget">
                                <h5 class="widget-title text-center">PARTY BUDGET USAGE</h5>

                                <div class="widget-content" style="font-family:'Raleway', sans-serif;">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">

                                            @if($budget_usage_count > 0)

                                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                                <script>
                                                    google.charts.load('43', {packages: ['corechart', 'bar']});
                                                    google.charts.setOnLoadCallback(drawBasic);

                                                    function drawBasic() {

                                                        var data = google.visualization.arrayToDataTable([
                                                            ['Usage For',''],
                                                            <?php
                                                            foreach ($graph_usage as $bar)
                                                            {
                                                                echo "['".$bar->usage_for."',".$bar->amount."],";
                                                            }
                                                            ?>
                                                        ]);

                                                        var options = {
                                                            chartArea: {width: '60%'},
                                                            hAxis: {
                                                                title: 'Usage For',
                                                                minValue: 0
                                                            },
                                                            vAxis: {
                                                                title: 'Amount'
                                                            }
                                                        };

                                                        var chart = new google.visualization.ColumnChart(document.getElementById('year_div'));

                                                        chart.draw(data, options);
                                                    }
                                                </script>

                                                <div id="year_div" style="width: 100%; height:auto;"></div>

                                                <hr/>
                                                <h5 class="widget-title text-center">DETAILED AMOUNT USAGE</h5>

                                                @foreach($budget_usage as $budget_info)
                                                    <img src="{{asset('img/exit.png')}}"> Usage For: {{$budget_info->usage_for}} <br/>
                                                    <img src="{{asset('img/exit.png')}}"> Amount: {{$budget_info->amount}} <br/>
                                                    <img src="{{asset('img/exit.png')}}"> Total: {{$budget_info->total}} <br/>

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
                                                    <p style="text-align: center">No Available Party Usage Information's</p>
                                                @endif
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="widget sidebar-widget white-container contact-form-widget">
                                <h5 class="widget-title text-center">PARTY PARTICIPANTS</h5>

                                <div class="widget-content" style="font-family:'Raleway', sans-serif;">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12">
                                            <h4 style="margin-top: 0px;"> Bsc in/with Computer Science</h4>
                                        </div>
                                        <div class="col-xs-12 col-sm-12">
                                            <hr/>
                                            <p style="margin-top: 5px;"><strong>CS IN</strong> ({{$in_perticiparts}}) Total Payment(s) Received</p>
                                            <hr/>
                                            <p style="margin-top: 5px;"><strong>CS WITH</strong> ({{$with_perticiparts}}) Total Payment(s) Received</p>
                                            <hr/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <a class="btn btn-primary btn-block" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                View Participants
                                            </a>
                                            <div class="collapse" id="collapseExample">
                                                <div class="well">
                                                    <div class="row">
                                                        <ul class="list-unstyled">
                                                            @if($check_participants > 0)
                                                                @foreach($all_participants as $all_participant)
                                                                    <li><span>Full name:  <b class="aplicant-detail">{{$all_participant->fullname}}</b></span></li>
                                                                    <li><span>Faculty:  <b class="aplicant-detail">{{$all_participant->faculty}}</b></span></li>
                                                                    <li><span>Amount: <b class="aplicant-detail">{{number_format($all_participant->amount)}}tsh</b></span></li>
                                                                    <li><span>Status: <b class="aplicant-detail"><span class="label label-primary">Confirmed Received</span></b></span></li>
                                                                    <hr/>
                                                                @endforeach
                                                                <p style="text-align: center;">Amount Collected: {{number_format($amount_collected->total_amount)}} tsh</p>
                                                            @else
                                                                <p style="text-align: center">No payment Received Yet</p>
                                                            @endif
                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
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