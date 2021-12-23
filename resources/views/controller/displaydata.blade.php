@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h3><b>method 1:-get data using table name</b></h3>
            <br>
            <p>
                public function {{$data['functionName']}}()<br>
                {
                <br>
                @if(isset($data['selectfiled']))
                $users = DB::table('{{$data['tableName']}}')->select(
                @foreach($data['selectfiled'] as $selectf)
                '{{$selectf}}',
                @endforeach
                )->get();
                @else
                $users = DB::table('{{$data['tableName']}}')->select('*')->get();
                @endif
                <br>
                }
            </p>
        </div>
        <div class="col-sm">
            <h3><b>method 2:-get data using model name</b></h3>
            <br>
            <p>
                public function {{$data['functionName']}}()<br>
                {
                <br>
                @if(isset($data['selectfiled']))
                $users = {{$data['modelName']}}::select(
                @foreach($data['selectfiled'] as $selectf)
                '{{$selectf}}',
                @endforeach
                )->get();
                @else
                $users = {{$data['modelName']}}::all();
                @endif
                <br>
                }
            </p>
        </div>
        <div class="col-sm">
            <h3><b>method 3:-insert using table name</b></h3>
            <p>

            </p>
        </div>
    </div>
</div>
@endsection