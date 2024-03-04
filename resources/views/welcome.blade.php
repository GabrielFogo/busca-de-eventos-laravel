@extends('layout.main')
@section('title', 'Agenda de Eventos')
@section('content')
    <div class="md:w-1/2 m-auto flex flex-col items-center px-6">
        <h1 class="text-2xl my-2">
            Busque um Evento
        </h1>
        <input type="text" name="search"
               class="w-full border border-gray rounded-md p-2 outline-none focus:border-gray-700 mb-1">
    </div>


    <div class="mb-1">
        <h1 class="text-2xl">
            Próximos eventos
        </h1>
        <p class="text-gray-500">Veja os próximos eventos</p>
    </div>
        @if(count($events) > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-center">
            @foreach($events as $event)
                <div class="border border-gray rounded-md mb-5">
                    <img src="{{asset('img/imagem-evento.jpg')}}" class="rounded-t-md max-h-[150px] w-full">
                    <div class="p-3">
                        <p class="text-sm text-gray-400">12/12/12</p>
                        <h5 class="text-xl mb-2">{{$event->title}}</h5>
                        <p class="text-gray-500">X participantes</p>
                        <div class="my-3">
                            <a class="px-5 py-2 bg-blue-500 rounded-md text-white hover:bg-blue-700 ">Saiba mais</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="flex justify-center items-center p-8">
                <p class="text-3xl">Nenhum evento no momento !!</p>
            </div>
        @endif
    </div>
@endsection
