
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
                @if (session('status'))

                @endif
            </div>
            <h1>Current Portfolio</h1>
        </div>
    </div>

    <div class="row">
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <th>Name</th>
                <th>Description</th>
                <th>Options</th>
                </thead>
                <tbody>
                @if(!$portfolios->isEmpty())
                @foreach ($portfolios as $portfolio)
                    <tr>
                        <td><a href="{{ route('portfolio.show', array($portfolio->portfolio_id)) }}">{{ $portfolio->portfolioname }}</a></td>
                        <td>{{ $portfolio->description }} </td>
                        <td>
                            <a class="btn btn-default" type="button" href="{{ route('portfolio.edit', array($portfolio->portfolio_id)) }}">Edit</a>
                            <button class="btn btn-default action_confirm" href="{{ action('AdminController@destroy', array($portfolio->portfolio_id)) }}" data-token="{{ Session::getToken() }}" data-method="DELETE">Delete</button>
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
