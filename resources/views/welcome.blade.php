@extends('layout.main')
@section('title','Agenda de Eventos')
@section('content')
    <h1>Algum Titulo</h1>
    @if($nome == 'gabriel')
        <p>{{$nome}}</p>
    @endif
    @for($i = 0; $i < count($arr); $i++)
        {{$arr[$i]}}
    @endfor
@endsection
