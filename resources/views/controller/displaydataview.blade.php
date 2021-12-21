@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <form action="display/data/controller" method="post">
                @csrf
                <div class="form-group">
                    <label for="function_name">function name</label>
                    <input type="text" class="form-control" id="function_name" name="function_name" placeholder="creat" required>
                </div>
                <div class="form-group">
                    <label for="model_name">model name</label>
                    <input type="text" class="form-control" id="model_name" name="model_name" placeholder="User" required>
                </div>
                <div class="form-group">
                    <label for="table_name">table name</label>
                    <input type="text" class="form-control" id="table_name" name="table_name" placeholder="users">
                </div>
                <br>
                <div class="form-group">

                    <label for="exampleFormControlSelect1">how many column you want to select:-</label>

                    <select id="dropdownlist">
                        <option value='all'>all</option>
                        @foreach($usersfields as $fields)
                        <option value='{{$fields->fields}}'>{{$fields->fields}}</option>
                        @endforeach
                    </select>

                    <div id="inputArea" class="form-group"></div>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-sm">
            <img src="{{ asset('images/codefast.png') }}">
            <br>
            <p><b>Note:-</b></p>
        </div>
    </div>
</div>
<script>
    $("#dropdownlist").change(function() {
        var numInputs = $(this).val();
        $("#fields").html('');
        $("#inputArea").html('');
        $("#title").html('');
        for (var i = 0; i < numInputs; i++) {
            $("#inputArea").append(+i + 1, ':-', '<input name="inputs[]" class="form-control" placeholder ="enter field value"/>');
        }
    });
</script>
@endsection