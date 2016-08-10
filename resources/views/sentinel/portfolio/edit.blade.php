@extends(config('sentinel.layout'))

{{-- Web site Title --}}
@section('title')
@parent
Edit Portfolio
@stop

{{-- Content --}}
@section('content')

<div class="row">
    <div class='page-header'>
        <h2>
            Edit

                {{ $portfolio->portfolioname }}

        </h2>

    </div>
    <div class="divider"></div>
<div class="row">
    <div class="row">
        <div class="col l6 offset-l3 m8 offset-m2 s12">
            <form method="POST" action="{{ route('portfolio.update',['id'=>$portfolio->portfolio_id]) }}" accept-charset="UTF-8">
                <input name="_method" value="PUT" type="hidden">
                <input name="_token" value="{{ csrf_token() }}" type="hidden">

                <div class="row">
                    <div class="input-field col s12">
                        <input id="portfolioname" name="portfolioname" type="text" class="validate" value="{{$portfolio->portfolioname }}">
                        <label for="name">Name</label>
                        {{ ($errors->has('portfolioname') ? $errors->first('portfolioname') : '') }}
                    </div>
                </div>


                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="imageurl">
                    </div>

                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="description" name="description" type="text" class="validate" value="{{$portfolio->description}}">
                        <label for="name">Description</label>
                        {{ ($errors->has('description') ? $errors->first('description') : '') }}
                    </div>
                </div>

                <p>
                    <button class="btn waves-effect waves-light red" type="submit" name="action">Update
                        <i class="mdi-content-send right"></i>
                    </button>
                </p>



            </form>
        </div>
    </div>
</div>
@stop
