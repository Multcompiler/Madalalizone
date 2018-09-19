<!doctype html>
<html lang="en">

<head>
    @include('partials._head')

    @include('partials._styles')

    @section('title','| Luku Management')

</head>

<body>
<div id="main-wrapper" class="our-agents-content">
    <header id="header">
        <div class="header-top-bar">
            <div class="header-notification-bar">
                @include('partials._navigation')
            </div>
        </div>


    </header>
    <div class="header-page-title clearfix">
        <div class="title-overlay"></div>

    </div>
    <div id="page-content" class="candidate-profile client-bg-color">
        <div class="container">
                <div class="page-content">
                    <div class="responsive-tabs dashboard-tabs">

                        <div class="tab-content" style="padding-top: 0px;">
                            <div class="tab-pane active" id="termsandconditions">
                                <div class="row" style="margin-top: 10px;">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <div class="widget sidebar-widget white-container contact-form-widget">
                                            <h5 class="widget-title text-center">LUKU MANAGEMENT</h5>

                                            <div class="widget-content" style="font-family:'Raleway', sans-serif;">
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-12">
                                                        <p style="margin-top: 5px;"> <strong>Latest Token </strong><br/>
                                                            @if($latest_info_check > 0)
                                                            {{\App\RoomUsers::where("id",$latest_info->user_id)->pluck("firstname")->first()." ".\App\RoomUsers::where("id",$latest_info->user_id)->pluck("lastname")->first() }} | {{$latest_info->amount}}tsh | {{$latest_info->token_units}} unit
                                                                @else
                                                                No Data Added
                                                            @endif
                                                        </p>
                                                        <p>
                                                            <a class="btn btn-primary btn-block" href="{{route("add_luku_info")}}" style="color: white;">Add Luku</a>
                                                        </p>
                                                        <hr/>
                                                        <div class="form-group">
                                                            <select id="month_check" onchange="fetchMonthPaymentLuku()" required>
                                                                <option value="">-- Select Month --</option>
                                                                @foreach($months_list as $month)
                                                                <option value="{{$month->month}}">{{date('F', mktime(0, 0, 0, $month->month, 12))}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <p id="demo"></p>
                                                        <hr/>
                                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                                        @if($latest_info_check > 0)
                                                        <script>
                                                            google.charts.load('current', {'packages':['bar']});
                                                            google.charts.setOnLoadCallback(drawChart);


                                                            function drawChart() {

                                                                var data = google.visualization.arrayToDataTable([
                                                                    ['Name', 'Amount'],
                                                                    <?php
                                                                    foreach ($data_charts as $bar)
                                                                    {
                                                                        echo "['".$bar->firstname." ".$bar->lastname."',".$bar->amount."],";
                                                                    }
                                                                    ?>
                                                                ]);
                                                                months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');

                                                                var today = new Date();
                                                                var mm = today.getMonth();
                                                                var curMonth = months[mm];
                                                                var options = {
                                                                    chart: {
                                                                        title: " " + curMonth +" Payments",
                                                                    }
                                                                };
                                                                var chart = new google.charts.Bar(document.getElementById('chart_div'));

                                                                chart.draw(data, options);
                                                            }
                                                        </script>
                                                        @else
                                                            No Data Added
                                                        @endif
                                                        <div id="chart_div" style="width: 100%;"></div>
                                                        <hr/>


                                                            @if($latest_info_check > 0)

                                                            <strong>{{ "All Users Payments" }} </strong>
                                                            <ol>
                                                                @foreach($users_view as $room_user)

                                                                    <li>
                                                                        <p>
                                                                            {{$room_user->firstname." ".$room_user->lastname}}  <br/>
                                                                            {{"Amount :". $room_user->amount }} <br/>
                                                                            <a href="{{route("single_luku_member",$room_user->user_id)}}">View Luku Info</a>
                                                                        </p>
                                                                    </li>
                                                                @endforeach
                                                            </ol>
                                                            @else
                                                                No Data Added
                                                            @endif

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

        </div> <!-- end .container -->
    </div>

    <footer id="footer">
        @include('partials._footer')
    </footer>

</div>
<!-- Scripts -->

{{Html::script('js/bootstrap.js')}}
{{Html::script('js/jquery.ba-outside-events.min.js')}}
{{Html::script('js/jquery.responsive-tabs.js')}}
{{Html::script('js/jquery.flexslider-min.js')}}
{{Html::script('js/jquery.fitvids.js')}}
{{Html::script('js/jquery.inview.min.js')}}


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">

    function fetchMonthPaymentLuku() {
        const monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        const d = new Date();
        var x = document.getElementById("month_check").value;
        //document.write("The current month is " + monthNames[x-1]);



        $.get("{{ url('/payment/month')}}",
            {option: document.getElementById("month_check").value},
            function (data_chart) {
                google.charts.load('current', {'packages':['bar']});
                google.charts.setOnLoadCallback(drawChart);

                function drawChart() {
                    var data = [];
                    var Header = ['Name', 'Amount'];
                    data.push(Header);

                    $.each(data_chart, function (key, val) {
                        var temp = [];
                        temp.push(val.firstname + " " + val.lastname);
                        temp.push(val.amount);
                        data.push(temp);
                    });

                    var data_charts = google.visualization.arrayToDataTable(data);


                    var options = {
                        chart: {
                            title: " " + monthNames[x-1] +" Payments",
                        }
                    };

                    var chart = new google.charts.Bar(document.getElementById('chart_div'));

                    chart.draw(data_charts, google.charts.Bar.convertOptions(options));
                }
            });
    }
</script>


</body>

</html>