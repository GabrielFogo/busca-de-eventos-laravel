@extends('layout.main')
@section('title','Agenda de Eventos')
@section('content')
    <h1 class="text-2xl mb-1">
        Busque um Evento
    </h1>
    <input type="text" name="search" class="w-[100%] border border-gray rounded-md p-2 outline-none focus:border-gray-700 mb-1">
    <div class="mb-1">
        <h1 class="text-2xl">
            Proximos eventos
        </h1>
        <p class="text-gray-500">Veja os proximos eventos</p>
    </div>
    <div class="flex">
        @foreach($events as $event)
            <div class="w-[25%] mt-2 border border-gray rounded-md">
                <img src="{{asset('img/imagem-evento.jpg')}}" class="rounded-t-md max-h-[150px] w-[100%]">
                <div class="mt-2 pb-3 px-3">
                    <p class="text-sm text-gray-400">12/12/12</p>
                    <h5 class="text-xl mb-[30px]">{{$event->title}}</h5>
                    <p class="text-gray-500">X participantes</p>
                    <div class="my-5">
                        <a class="px-5 py-2 bg-blue-500 rounded-md text-white hover:bg-blue-700 ">Saiba mais</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
