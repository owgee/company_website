@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
    @parent
    Edit Clients
@stop

{{-- Content --}}
@section('content')

    <div class="row">
        <div class='page-header'>
            <h2>
                Edit

                {{ $client->clientname }}

            </h2>

        </div>
        <div class="divider"></div>
        <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form method="POST" action="{{ route('clients.update',['id'=>$client->client_id]) }}" accept-charset="UTF-8">
                        <input name="_method" value="PUT" type="hidden">
                        <input name="_token" value="{{ csrf_token() }}" type="hidden">


                            <div class="form-group">
                                <input id="clientname" name="clientname" type="text" class="form-control" value="{{$client->clientname }}">
                                {{ ($errors->has('clientname') ? $errors->first('clientname') : '') }}
                            </div>



                        <div class="file-field input-field">
                            <span>Image</span>
                            <div class="btn">

                                <input type="file" name="imageurl">
                            </div>

                        </div>

                            <div class="form-group">
                                <input id="description" name="description" type="text" class="form-control" value="{{$client->clientdescription}}">
                                {{ ($errors->has('clientdescription') ? $errors->first('clientdescription') : '') }}
                        </div>

                        <p>
                            <button class="btn btn-primary" type="submit" name="action">Update
                                <i class="mdi-content-send right"></i>
                            </button>
                        </p>



                    </form>
                </div>
        </div>
@stop
