@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h1>Controller-</h1>
            <h3>we can create,update,delete and get data using controller</h3>
            <p>Instead of defining all of your request handling logic as closures in your route files, you may wish to organize this behavior using "controller" classes. Controllers can group related request handling logic into a single class. For example, a UserController class might handle all incoming requests related to users, including showing, creating, updating, and deleting users. By default, controllers are stored in the app/Http/Controllers directory.for more information<span>click here</span></p>
            <h5><a href="/createcontroller">create data</a></h5>
            <h5><a href="/updatecontroller">update data</a></h5>
            <h5><a href="/deletecontrolle">delete data</a></h5>
            <h5><a href="/datadisplaycontroller">get a data</a></h5>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <h1>Model</h1>
            <p>we can create,update,delete and get data using controller</p>
            <a href="/createcontroller">create data</a>
            <br>
            <a href="/updatecontroller">update data</a>
            <br>
            <a href="/deletecontrolle">delete data</a>
            <br>
            <a href="/getdatacontroller">get a data</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <h1>Route</h1>
            <p>we can create,update,delete and get data using controller</p>
            <a href="/createcontroller">create data</a>
            <br>
            <a href="/updatecontroller">update data</a>
            <br>
            <a href="/deletecontrolle">delete data</a>
            <br>
            <a href="/getdatacontroller">get a data</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <h1>Middleware</h1>
            <p>we can create,update,delete and get data using controller</p>
            <p>Middleware provide a convenient mechanism for inspecting and filtering HTTP requests entering your application. For example, Laravel includes a middleware that verifies the user of your application is authenticated. If the user is not authenticated, the middleware will redirect the user to your application's login screen. However, if the user is authenticated, the middleware will allow the request to proceed further into the application.</p>
            <a href="/createcontroller">create data</a>
            <br>
            <a href="/updatecontroller">update data</a>
            <br>
            <a href="/deletecontrolle">delete data</a>
            <br>
            <a href="/getdatacontroller">get a data</a>
        </div>
    </div>
</div>
@endsection