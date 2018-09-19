@extends('main')

@section('title','| Register')

@section('content')
<div class="page-content">
    <div class="responsive-tabs dashboard-tabs">
        <div class="col-sm-6 col-sm-offset-3 page-content" style="padding-top: 25px;padding-bottom: 180px;">

            @include('partials._messages')

            <div class="widget sidebar-widget white-container contact-form-widget">
                <h5 class="widget-title text-center">CHOOSE CATEGORY</h5>

                <div class="widget-content">
                    <div class="form-group">
                        <a href="{{url('/auth/dalali/register')}}" class="btn btn-default btn-block">Dalali</a>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/auth/loan/register')}}" class="btn btn-default btn-block">Loan Provider</a>
                    </div>


                </div>
            </div>
        </div> <!-- end .responsive-tabs.dashboard-tabs -->
    </div>
</div> <!-- end .page-content -->
@endsection