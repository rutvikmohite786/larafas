 @extends('layouts.app')
 @section('content')
 <div class="container">
     <div class="row">
         <div class="col-sm">
             <h3><b>method:1(update data using array)</b></h3>
             <br>
             <p>
                 public function {{$data['functionName']}}(Request $request)<br>
                 {
                 <br>
                 <span>${{$data['variableName1']}}=[</span>
                 @foreach($data['fieldName'] as $key=>$value)
                 '{{$value}}'<span>=>{{$value}},</span>
                 <br>
                 @endforeach
                 <span>]</span>
                 <br>
                 ${{$data['variableName2']}} = {{$data['modelName']}}::find({{$data['inputId'] ? $data['inputId'] : $data['dropdownlistforid'] }});
                 <br>
                 ${{$data['variableName2']}}->update(${{$data['variableName1']}});
                 <br>
                 }
             </p>
         </div>
         <div class="col-sm">
             method:2(update data without using array)
         </div>
     </div>
 </div>
 @endsection