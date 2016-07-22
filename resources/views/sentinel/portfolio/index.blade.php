@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
    @parent
    Portfolio
@stop

{{-- Content --}}
@section('content')
    <div class="row">
        <div class='page-header'>
            <div class='btn-toolbar pull-right'>
                <div class='btn-group'>

                    <a class='btn btn-primary' href="{{ route('portfolio.create') }}" >New Portfolio</a>
                </div>
            </div>
            <h1>Current Portfolio</h1>
        </div>
    </div>

    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <th>Name</th>
                <th>Nature</th>
                <th>Options</th>
                </thead>
                <tbody>
                @if(!$portfolios->isEmpty())
                @foreach ($portfolios as $portfolio)
                    <tr>
                        <td><a href="{{ route('sentinel.users.show', array($portfolio->hash)) }}">{{ $portfolio->email }}</a></td>
                        <td>{{ $portfolio->status }} </td>
                        <td>
                            <button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.edit', array($portfolio->hash)) }}'">Edit</button>
                            @if ($portfolio->status != 'Suspended')
                                <button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.suspend', array($portfolio->hash)) }}'">Suspend</button>
                            @else
                                <button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.unsuspend', array($portfolio->hash)) }}'">Un-Suspend</button>
                            @endif
                            @if ($portfolio->status != 'Banned')
                                <button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.ban', array($portfolio->hash)) }}'">Ban</button>
                            @else
                                <button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.unban', array($portfolio->hash)) }}'">Un-Ban</button>
                            @endif
                            <button class="btn btn-default action_confirm" href="{{ route('sentinel.users.destroy', array($portfolio->hash)) }}" data-token="{{ Session::getToken() }}" data-method="delete">Delete</button>
                        </td>
                    </tr>
                @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
   {{--{!! $portfolios->render() !!}--}}
    </div>
@stop
