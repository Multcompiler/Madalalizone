@extends('main')

@section('title','| Buy')

@section('content')
    <div class="page-content">
        <div class="responsive-tabs dashboard-tabs">
            <div class="tab-content">
                <div class="tab-pane active" id="buy">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 page-content">
                            <div class="widget sidebar-widget white-container contact-form-widget">

                                @include('partials._messages')

                                <h5 class="widget-title">ALL BUY REQUEST</h5>

                                <div class="widget-content">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>

                                            <th>#</th>
                                            <th>Item</th>
                                            <th>Brand</th>
                                            <th>Offer</th>
                                            <th>location</th>
                                            <th>Phone</th>
                                            <th></th>

                                            </thead>
                                            <tbody>

                                            @foreach($buy_post as $buy)
                                                <tr>
                                                    <td>{{$buy->id}}</td>
                                                    <td>{{$buy->itemname}}</td>
                                                    <td>{{$buy->brand}}</td>
                                                    <td>{{$buy->offeramount}}</td>
                                                    <td>{{$buy->location}}</td>
                                                    <td>{{$buy->phone }}</td>
                                                    <td>
                                                     <a href="{{route('admin.buy.show',$buy->id)}}" class="btn btn-primary">View</a>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                        <div class="text-center">
                                            {{$buy_post->links()}}
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