<?php
{{--// laravel 模板的循环体--}}
{{--@foreach($validate as $key=>$value)--}}
{{--@endforeach--}}
{{--// laravel 中视图的if语句--}}
{{--@if(条件表达式1)--}}
{{--执行语句1--}}
{{--@elseif(条件表达式2)--}}
{{--执行语句2--}}
{{--@else--}}
{{--默认的执行语句2--}}
{{--@elseif--}}
?>
当前的时间是 {{$data}} <hr/>
当前的正确时间 :{{date('Y-m-d H:i:s',$time)}}
