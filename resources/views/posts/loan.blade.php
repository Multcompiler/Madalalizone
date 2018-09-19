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

            <ul class="nav nav-tabs">
                <li class="active"><a href="#buy">Buy</a></li>
                <li><a href="#sell">Sell</a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="application-form">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 page-content">
                            <div class="widget sidebar-widget white-container contact-form-widget">

                                @include('partials._messages')

                                <h5 class="widget-title">APPLICATION LOAN FORM</h5>

                                <div class="widget-content">

                                    <div class="container">
                                        <div class="search-holder">
                                            <h1>MotiJobs</h1>
                                            <h2>the most complete HR Admin Template</h2>

                                            <div id="header-search">
                                                <div class="header-search-bar">
                                                    <div class="">
                                                        <form>
                                                            <div class="basic-form clearfix"> <a href="#" class="toggle"><span></span></a>
                                                                <div class="hsb-input-1">
                                                                    <input type="text" class="form-control" placeholder="Keywords">
                                                                </div>
                                                                <div class="hsb-text-1">in</div>
                                                                <div class="hsb-container">
                                                                    <div class="hsb-input-2">
                                                                        <input type="text" class="form-control" placeholder="Location">
                                                                    </div>
                                                                    <div class="hsb-select">
                                                                        <select class="form-control">
                                                                            <option value="0">Select Category</option>
                                                                            <option value="">Banking</option>
                                                                            <option value="">Finance</option>
                                                                            <option value="">IT</option>
                                                                            <option value="">Specialists</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="hsb-submit">
                                                                    <button type="submit" class="btn btn-default btn-block"><i class="fa fa-search"></i><span>Search</span></button>
                                                                </div>
                                                            </div>
                                                            <div class="advanced-form">
                                                                <div class="">
                                                                    <div class="row">
                                                                        <label class="col-md-3">Distance</label>
                                                                        <div class="col-md-9">
                                                                            <div class="range-slider">
                                                                                <div class="slider" data-min="1" data-max="200" data-current="100"></div>
                                                                                <div class="last-value"><span>100</span> km</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label class="col-md-3">Rating</label>
                                                                        <div class="col-md-9">
                                                                            <div class="range-slider">
                                                                                <div class="slider" data-min="1" data-max="100" data-current="20"></div>
                                                                                <div class="last-value">&gt; <span>20</span> %</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label class="col-md-3">Days Published</label>
                                                                        <div class="col-md-9">
                                                                            <div class="range-slider">
                                                                                <div class="slider" data-min="1" data-max="60" data-current="30"></div>
                                                                                <div class="last-value">&lt; <span>30</span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label class="col-md-3">Location</label>
                                                                        <div class="col-md-9">
                                                                            <input type="text" class="form-control" placeholder="Switzerland">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <label class="col-md-3">Category</label>
                                                                        <div class="col-md-9">
                                                                            <select class="form-control">
                                                                                <option value="">Select Category</option>
                                                                                <option value="">Banking</option>
                                                                                <option value="">Finance</option>
                                                                                <option value="">IT</option>
                                                                                <option value="">Specialists</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
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