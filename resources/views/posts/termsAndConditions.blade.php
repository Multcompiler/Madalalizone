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

            <div class="tab-content">
                <div class="tab-pane active" id="termsandconditions">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 page-content">
                            <div class="widget sidebar-widget white-container contact-form-widget">

                                @include('partials._messages')

                                <h5 class="widget-title text-center">TERMS FOR THE LOAN</h5>

                                <div class="widget-content" style="font-family:'Raleway', sans-serif;">
                                    <div class="">
                                        <div class="candidate-title">
                                            <h5>Loan Requirements</h5>
                                        </div>


                                        <p>My passion for programming is in my ability to make tools that make people's lives easier.
                                            I love creating value for people, and thrive when I can see the benefit derived from my work
                                            as quickly as possible. I believe good work encourages specific behavior, but doesn't necessarily
                                            enforce it. My programming style is to make the smallest change necessary to achieve my goal,
                                            keep only the most successful work flows and refactor/delete code as part of each change.
                                            I always design the interface first and I model client facing solutions as closely as possible
                                            to the experience of doing it without a computer, which is typically characterized by loose
                                            couplings and graph based models over trees. I keep the clever stuff behind the curtain.
                                        </p>

                                        <p>
                                            Cras vehicula urna non justo adipiscing convallis quis et augue. Proin vestibulum,
                                            nisl ut lobortis tempus, est nulla lacinia felis, ut gravida enim nibh vel turpis.
                                            Vivamus a purus id ipsum tincidunt faucibus non at elit. Duis imperdiet ullamcorper purus,
                                            id tempus dui fringilla porta. Sed lacinia risus eu nulla scelerisque tincidunt. Nam ut velit
                                            quis felis pretium pulvinar ac in sem. Nullam nec porttitor velit, sed posuere massa. In gravida
                                            mattis dolor sit amet lacinia.
                                        </p>
<p>
    NOTE: <br/>
    Tafadhali soma maelezo kwa umakini kabla hujaApply mkopo
</p>

                                        <div class="candidate-title mt40">
                                            <h5>Rate</h5>
                                        </div>
                                        <div class="row mb20">
                                            <div class="col-md-4">
                                                Loan Rate (20%) per month
                                            </div> <!-- end .grid layout -->

                                            <div class="col-md-8">
                                                <div class="progress-bar clearfix">
                                                    <div class="progress-bar-inner progress20"><span></span></div>
                                                </div>
                                            </div> <!-- end .grid layout -->
                                        </div> <!-- end .row -->
                                        <div class="row mb20">
                                            <div class="col-md-4">
                                                Penalty Rate (2%) per day
                                            </div> <!-- end .grid layout -->

                                            <div class="col-md-8">
                                                <div class="progress-bar clearfix">
                                                    <div class="progress-bar-inner progress2"><span></span></div>
                                                </div>
                                            </div> <!-- end .grid layout -->
                                        </div> <!-- end .row -->

                                        <div class="candidate-title mt40">
                                            <h5>Minimum Amount</h5>
                                        </div>
                                        <div class="row mb20">
                                            <div class="col-md-4" style="margin-top: 8px;">
                                                <span style="font-size: larger;"> Amount: </span>
                                            </div> <!-- end .grid layout -->

                                            <div class="col-md-8">
                                                <input class="value-holder" disabled="disabled" placeholder="$5,000 - $10,000" type="text">
                                            </div> <!-- end .grid layout -->
                                        </div> <!-- end .row -->

                                        <div class="candidate-title mt40">
                                            <h5>Maximum Amount</h5>
                                        </div>
                                        <div class="row mb20">
                                            <div class="col-md-4" style="margin-top: 8px;">
                                                Amount:
                                            </div> <!-- end .grid layout -->

                                            <div class="col-md-8">
                                                <input class="value-holder" disabled="disabled" placeholder="$5,000 - $10,000" type="text">
                                            </div> <!-- end .grid layout -->
                                        </div> <!-- end .row -->
                                        <!-- end .apply-share -->
                                    </div>

                                </div>

                                <div class="form-group" style="">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-sm-6" style="padding-left: 0;padding-top: 10px;">
                                                <a href="{{url('/')}}" class="btn btn-default btn-block"> Back</a>
                                            </div>
                                            <div class="col-sm-6" style="padding-left: 0;padding-top: 10px;">
                                                <a href="{{route('form',1/*$buy->id */)}}" class="btn btn-default btn-block"><i class="fa fa-arrow-right"></i> Continue</a>
                                            </div>
                                        </div>
                                    </div>
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