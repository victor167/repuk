@extends('demo/parent')

@section('title','Ejemplo de titulo')

@section('content')
    <div>
        <div>Contenido de ejemplo</div>
        <div id="variable">
            {{ $param1 }}
        </div>
        <div id="foreach">
            @foreach($param2 as $item)
            {{$item}}
            @endforeach
        </div>
        <div id="for">
            @for($i = 0; $i < 3; $i++)
            Loop N°{{$i}}
            @endfor
        </div>
        <div id="if">
            @if($param1==1)
            Salio 1
            @elseif($param1==2)
            Salio 2
            @else
            Salio
            @endif
        </div>
    </div>
@endsection