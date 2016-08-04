@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{trans('main.dashboard')}}</div>

                <div class="panel-body text-capitalize">
                    {{trans('main.dear')}} {{Auth::user()->name}}, {{trans('main.welcome')}}!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
