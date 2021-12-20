 @extends('layouts.app')
 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-sm">
             <h3><b>method 1:-insert data using array</b></h3>
             <br>
             <p>
                 public function {{$data['functionName']}}(Request ${{$data['request_var_name'] ? $data['request_var_name'] : 'request'}})<br>
                 {
                 <br>
                 ${{$data['variableName1']}} = $request->all();
                 <br>
                 <span>${{$data['variableName2']}}=[</span>
                 @foreach($data['fieldName'] as $key=>$value)
                 '{{$value}}'<span>=>${{$data['variableName1']}}['{{$value}}''],</span>
                 <br>
                 @endforeach
                 <span>]</span>
                 <br>
                 ${{$data['variableName3']}}= {{$data['modelName']}}::create(${{$data['variableName2']}});
                 <br>
                 }
             </p>
         </div>
         <div class="col-sm">
             <h3><b>method 2:-insert all data</b></h3>
             <br>
             <p>
                 public function {{$data['functionName']}}(Request ${{$data['request_var_name'] ? $data['request_var_name'] : 'request'}})<br>
                 {
                 <br>
                 ${{$data['variableName1']}} = $request->all();
                 <br>
                 ${{$data['variableName3']}}= {{$data['modelName']}}::create(${{$data['variableName1']}});
                 <br>
                 }
             </p>
             <b>OR</b>
             @if(count($data['fieldName'])>1)
             <p>
                 public function {{$data['functionName']}}(Request ${{$data['request_var_name'] ? $data['request_var_name'] : 'request'}})<br>
                 {
                 <br>
                 ${{$data['variableName3']}}= {{$data['modelName']}}::create($request->all());
                 <br>
                 }
             </p>
             @else
             <p>
                 public function {{$data['functionName']}}(Request ${{$data['request_var_name'] ? $data['request_var_name'] : 'request'}})<br>
                 {
                 <br>
                 ${{$data['variableName3']}}= {{$data['modelName']}}::create($request->${{$data['fieldName'][0]}});
                 <br>
                 }
             </p>
             @endif
         </div>
         <div class="col-sm">
             <h3><b>method 3:-insert using table name</b></h3>
             <p>
                 public function {{$data['functionName']}}(Request ${{$data['request_var_name'] ? $data['request_var_name'] : 'request'}})<br>
                 {
                 <br>
                 @foreach($data['fieldName'] as $key=>$value)
                 $data['{{$value}}']=${{$data['request_var_name'] ? $data['request_var_name'] : 'request'}}->input('{{$value}}');
                 <br>
                 @endforeach
                 DB::table({{$data['tableName'] ? $data['tableName'] : 'table_name'}})->insert($data);
                 <br>
                 }
             </p>
         </div>
     </div>
 </div>
 @endsection