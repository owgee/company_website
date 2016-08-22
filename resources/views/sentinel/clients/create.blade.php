@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
@parent
Clients
@stop

{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <form method="POST" action="{{ route('admin.clients.store') }}" accept-charset="UTF-8">

            <h2>Create New Client</h2>

            <div class="form-group {{ ($errors->has('clientname')) ? 'has-error' : '' }}">
                <input class="form-control" placeholder="Name" name="clientname" type="text"  value="{{ Request::old('clientname') }}">
                {{ ($errors->has('clientname') ? $errors->first('clientname') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('clientweburl')) ? 'has-error' : '' }}">
                <input class="form-control" placeholder="Website URL" name="clientweburl" type="text"  value="{{ Request::old('clientweburl') }}">
                {{ ($errors->has('clientweburl') ? $errors->first('clientweburl') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('pasclientimgurlsword')) ? 'has-error' : '' }}">
                <input placeholder="Client Logo" name="clientimgurl" value="" type="file">
                {{ ($errors->has('clientimgurl') ?  $errors->first('clientimgurl') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('clientdescription')) ? 'has-error' : '' }}">
                            <div id="editor">

                    </div>

            </div>

            <input name="_token" value="{{ csrf_token() }}" type="hidden">
            <input class="btn btn-primary form-control" value="Create" type="submit">

        </form>

  </div
>
</div>


@stop