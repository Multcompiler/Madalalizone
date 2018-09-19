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

                                                        <p>
                                                            <a class="btn btn-primary btn-block" href="{{route("add_luku_info")}}" style="color: white;">Add Luku</a>
                                                        </p>
                                                        <hr/>
                                                        <p style="margin-top: 5px;text-align: center"> <strong>{{$room_user_details->firstname." ".$room_user_details->lastname}} <br/> {{$room_user_details->phone}} <a href="tel:{{$room_user_details->phone}}"> &nbsp;&nbsp; <i class="fa fa-phone"></i> Call </a> </strong>
                                                        </p>
                                                        <hr/>
                                                         @foreach($single_user as $single)
                                                             <img src="{{asset("luku/proof/".$single->proof_image)}}" width="100%"/>
                                                             <p style="padding-top: 15px;">Token Number: {{substr($single->token_number, 0, 4)." ".substr($single->token_number, 4, 4)." ".substr($single->token_number, 8, 4)." ".substr($single->token_number, 12, 4)." ".substr($single->token_number, 16, 4)}}</p>
                                                             <p>Token Units: {{$single->token_units}}</p>
                                                             <p>Amount: {{$single->amount}}</p>
                                                             <p>Bought Date: {{$single->token_bought_date}}</p>
                                                            <hr/>
                                                         @endforeach

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