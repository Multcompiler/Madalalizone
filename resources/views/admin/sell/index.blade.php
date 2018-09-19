@extends('main')

@section('title','| Sell')

@section('content')
    <div class="page-content">
        <div class="responsive-tabs dashboard-tabs">

            <div class="tab-content">

                <div class="tab-pane active" id="sell">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 page-content">
                            <div class="widget sidebar-widget white-container contact-form-widget">
                                <h5 class="widget-title">ALL SELL REQUEST</h5>

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

                                            @foreach($sell_post as $sell)
                                                <tr>
                                                    <td>{{$sell->id}}</td>
                                                    <td>{{$sell->itemname}}</td>
                                                    <td>{{$sell->brand}}</td>
                                                    <td>{{$sell->amount}}</td>
                                                    <td>{{$sell->location}}</td>
                                                    <td>{{$sell->phone }}</td>
                                                    <td><a href="{{route('admin.sell.show',$sell->id)}}" class="btn btn-primary">View</a></td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                        <div class="text-center">
                                            {{$sell_post->links()}}
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