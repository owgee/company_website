@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
    @parent
    Create New Portfolio
@stop

{{-- Content --}}
@section('content')
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form method="POST" action="{{ route('portfolio.store') }}" accept-charset="UTF-8">
                <input name="_token" value="{{ csrf_token() }}" type="hidden">

                <h2>Create New Portfolio</h2>

                    <div class="form-group {{ ($errors->has('portfolioname')) ? 'has-error' : '' }}">
                        <input id="portfolioname" placeholder="Portfolio Name" name="portfolioname" type="text" class="form-control" value="{{ Request::old('portfolioname') }}">

                        {{ ($errors->has('portfolioname') ? $errors->first('portfolioname') : '') }}
                    </div>



                <div class="file-field input-field">
                    <span>Image</span>
                    <div class="btn">
                        <input type="file" name="imageurl">
                    </div>

                </div>

                    <div class="form-group {{ ($errors->has('description')) ? 'has-error' : '' }}">
                        <input id="description" name="description" placeholder="Portfolio Description" type="text" class="form-control">

                        {{ ($errors->has('description') ? $errors->first('description') : '') }}
                    </div>


                <p>
                    <button class="btn btn-primary btn-block" type="submit" name="action">Create
                        <i class="mdi-content-send right"></i>
                    </button>
                </p>



            </form>
        </div>
    </div>
@stop