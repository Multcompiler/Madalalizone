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
                <div class="tab-pane active" id="application-form">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 page-content">
                            <div class="widget sidebar-widget white-container contact-form-widget">

                                @include('partials._messages')

                                <h5 class="widget-title text-center">LOAN APPLICANT BEHAVIOR</h5>

                                <div class="widget-content">
                                    <div class="candidate-description client-description applicants-content">
                                        <div class="row" style="margin-bottom: 15px;">
                                            <div class="col-md-9">
                                                {{Form::text('name', null, ['placeholder' => 'Name','class' => 'form-control','required' => ''])}}
                                            </div>
                                            <div class="col-md-3">
                                                {{Form::submit('Search',['class' =>'text-center btn btn-block btn-default','style' => 'margin-top:5px;'])}}
                                            </div>
                                        </div>
                                        <div class="language-print client-des clearfix">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="aplicant-details-show clearfix">
                                                        <h5>Name:Mercy Queen</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="aplicant-details-show clearfix">
                                                        <ul class="list-unstyled pull-left" style="width:100%;">
                                                            <li><span>Applied From:  <b class="aplicant-detail">Miande Enterprise</b></span>
                                                            </li>

                                                            <li><span>Behavior: <b
                                                                            class="aplicant-detail">Good</b></span></li>

                                                            <li><span>Date: <b
                                                                            class="aplicant-detail">26 Jan 2018</b></span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end .aplicant-details-show -->
                                        </div> <!-- end .language-print -->
                                    </div> <!-- end .candidate-description -->
                                    <hr/>
                                    <div class="candidate-description client-description applicants-content">

                                        <div class="language-print client-des clearfix"">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="aplicant-details-show clearfix">
                                                        <h5>Name: Burger King</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="aplicant-details-show clearfix">
                                                        <ul class="list-unstyled pull-left" style="width:100%;">
                                                            <li><span>Applied From:  <b class="aplicant-detail">Miande Enterprise</b></span>
                                                            </li>

                                                            <li><span>Behavior: <b
                                                                            class="aplicant-detail">Good</b></span></li>

                                                            <li><span>Date: <b
                                                                            class="aplicant-detail">26 Jan 2018</b></span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end .aplicant-details-show -->
                                        </div> <!-- end .language-print -->
                                    </div> <!-- end .candidate-description -->
                                    <hr/>
                                </div>

                            </div>
                            @yield('partials._advertise');
                        </div>
                    </div>
                </div> <!-- end .tabe pane -->

            </div> <!-- end .tab-content -->
        </div> <!-- end .responsive-tabs.dashboard-tabs -->

    </div> <!-- end .page-content -->
@endsection