@extends('layouts.website_master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">{{trans('main.dashboard')}}</div>

                    <div class="panel-body text-capitalize">
                       Welcome to INETS website
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">{{trans('main.dashboard')}}</div>

                    <div class="panel-body text-capitalize">
                        Right Information
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
