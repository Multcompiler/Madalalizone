@extends('main')

@section('title','| Sell or Buy')

@section('content')
    <div class="page-content">
        <div class="responsive-tabs dashboard-tabs">
            <div class="tab-content">
                <div class="tab-pane active" id="buy">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 page-content">
                            <div class="widget sidebar-widget white-container contact-form-widget">

                                @include('partials._messages')

                                <h5 class="widget-title">POST BUY REQUEST</h5>

                                <div class="widget-content">
                                    <p>Item Name: {{$post->itemname}}</p>
                                    <p>Item Brand: {{$post->brand}}</p>
                                    <p>Item Description: {{$post->description}}</p>
                                    <p>Amount: {{$post->offeramount}}</p>
                                    <p>Location: {{$post->location}}</p>
                                    <p>Phone: {{$post->phone}}</p>
                                    <p>Posted At: {{date('M j, Y',strtotime($post->created_at))}}</p>
                                    <p class="status_text">
                                        {{($post->status)}}
                                    </p>

                                    <a href="tel:{{$post->phone}}" class="text-center btn btn-block btn-default" style="margin-top: 10px;"><i
                                                    class="fa fa-phone"></i> Contact Customer</a>
                                    <a href="{{route('admin.buy.edit',$post->id)}}"
                                       class="text-center btn btn-block btn-default top_space">Mark As Solved</a>


                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end .tabe pane -->


            </div> <!-- end .tab-content -->
        </div> <!-- end .responsive-tabs.dashboard-tabs -->

    </div> <!-- end .page-content -->
@endsection