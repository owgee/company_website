@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
    @parent
    Create New Portfolio
@stop

{{-- Content --}}
@section('content')
    <div class="row">
        <div class="col l6 offset-l3 m8 offset-m2 s12">
            <form method="POST" action="{{ route('portfolio.store') }}" accept-charset="UTF-8">
                <input name="_token" value="{{ csrf_token() }}" type="hidden">

                <h2>Create New Portfolio</h2>

                <div class="row">
                    <div class="input-field col s12">
                        <input id="portfolioname" name="portfolioname" type="text" class="validate" value="{{ Request::old('portfolioname') }}">
                        <label for="name">Name</label>
                        {{ ($errors->has('portfolioname') ? $errors->first('portfolioname') : '') }}
                    </div>
                </div>


                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="imageurl">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="description" name="description" type="text" class="validate">
                        <label for="name">Description</label>
                        {{ ($errors->has('description') ? $errors->first('description') : '') }}
                    </div>
                </div>

                <p>
                    <button class="btn waves-effect waves-light red" type="submit" name="action">Create
                        <i class="mdi-content-send right"></i>
                    </button>
                </p>



            </form>
        </div>
    </div>
@stop