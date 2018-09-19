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

                                <h5 class="widget-title">POST REQUEST EDIT</h5>

                                <div class="widget-content">
                                    {!! Form::model($posts, ['route' => ['admin.buy.update', $posts->id],'method' => 'PUT'],['data-parsley-validate' => '']) !!}
                                    {{ Form::select('status', ['unsolved' => 'unsolved', 'solved' => 'solved'],null,['class' => 'form-control','required' => '']) }}
                                    {{Form::submit('Save',['class' =>'text-center btn btn-block btn-default top_space'])}}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end .tabe pane -->


            </div> <!-- end .tab-content -->
        </div> <!-- end .responsive-tabs.dashboard-tabs -->

    </div> <!-- end .page-content -->
@endsection