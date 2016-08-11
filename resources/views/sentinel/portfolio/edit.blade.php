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

        <div class="col-md-4 col-md-offset-4">
            <form method="POST" action="{{ route('portfolio.update',['id'=>$portfolio->portfolio_id]) }}" accept-charset="UTF-8">
                <input name="_method" value="PUT" type="hidden">
                <input name="_token" value="{{ csrf_token() }}" type="hidden">


                    <div class="form-group">
                        <input id="portfolioname" name="portfolioname" type="text" class="form-control" value="{{$portfolio->portfolioname }}">
                        {{ ($errors->has('portfolioname') ? $errors->first('portfolioname') : '') }}
                    </div>

                <span>File</span>
                    <div class="btn">
                        <input type="file" name="imageurl">
                    </div>


                    <div class="form-group">
                        <input id="description" name="description" type="text" class="form-control" value="{{$portfolio->description}}">
                        {{ ($errors->has('description') ? $errors->first('description') : '') }}
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
