
@foreach($data as $key=>$value)
    {{$value->username}}&nbsp;&nbsp;&nbsp;{{$value->call}}&nbsp;&nbsp;&nbsp;{{$value->email}}<br/>
@endforeach