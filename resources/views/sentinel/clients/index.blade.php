@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
    @parent
    Users
@stop

{{-- Content --}}
@section('content')
    <div class="row">
        <div class='page-header'>
            <div class='btn-toolbar pull-right'>
                <div class='btn-group'>
                    <a class='btn btn-primary' href="{{ route('clients.create') }}">Create New Client</a>
                </div>
            </div>
            <h1>Current Clients</h1>
        </div>
    </div>

    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <th>Client</th>
                <th>Status</th>
                <th>Options</th>
                </thead>
                <tbody>
                @if(!$clients->isEmpty())
                @foreach ($clients as $client)
                    <tr>
                        <td><a href="{{ route('sentinel.users.show', array($client->hash)) }}">{{ $client->clientname }}</a></td>
                        <td>{{ $client->clientimgurl }} </td>
                        <td>
                            <button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.edit', array($client->hash)) }}'">Edit</button>
                            @if ($client->status != 'Suspended')
                                <button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.suspend', array($client->hash)) }}'">Suspend</button>
                            @else
                                <button class="btn btn-default" type="button" onClick="location.href='{{ route('sentinel.users.unsuspend', array($client->hash)) }}'">Un-Suspend</button>
                            @endif
                            <button class="btn btn-default action_confirm" href="{{ action('ClientsController@destroy', array($client->hash)) }}" data-token="{{ Session::getToken() }}" data-method="delete">Delete</button>
                        </td>
                    </tr>
                @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        {{--{!! $clients->render() !!}--}}
    </div>
@stop
