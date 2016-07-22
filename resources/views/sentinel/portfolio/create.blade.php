@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
@parent
Create New User
@stop

{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <form method="POST" action="{{ route('sentinel.users.store') }}" accept-charset="UTF-8">

            <h2>Create New Portfolio</h2>

            <div class="form-group {{ ($errors->has('portfolioname')) ? 'has-error' : '' }}">
                <input class="form-control" placeholder="Name" name="portfolioname" type="text"  value="{{ Request::old('portfolioname') }}">
                {{ ($errors->has('portfolioname') ? $errors->first('portfolioname') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('client')) ? 'has-error' : '' }}">
                <input class="form-control" placeholder="E-mail" name="client" type="text"  value="{{ Request::old('client') }}">
                {{ ($errors->has('client') ? $errors->first('client') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('password')) ? 'has-error' : '' }}">
                <input class="form-control" placeholder="Password" name="password" value="" type="password">
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            </div>

            <div class="form-group {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                <input class="form-control" placeholder="Confirm Password" name="password_confirmation" value="" type="password">
                {{ ($errors->has('password_confirmation') ?  $errors->first('password_confirmation') : '') }}
            </div>

            <div class="form-group">
                <label class="checkbox">
                    <input name="activate" value="activate" type="checkbox"> Activate
                </label>
            </div>

            <input name="_token" value="{{ csrf_token() }}" type="hidden">
            <input class="btn btn-primary form-control" value="Create" type="submit">

        </form>
    </div>
</div>


@stop