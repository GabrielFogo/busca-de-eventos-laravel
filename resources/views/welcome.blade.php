@extends('layouts.main')
@section('title', 'Agenda de Eventos')
@section('content')
    <div class="md:w-1/2 m-auto flex flex-col items-center px-6">
        <h1 class="text-2xl my-2">
            Busque um Evento
        </h1>
        <form class="w-full" method="get" action="/">
            <input type="text" name="search"
                   class="w-full border border-gray rounded-md p-2 outline-none focus:border-gray-700 mb-1">
        </form>
    </div>

    <div class="my-3">
        @if($search)
            <h1 class="text-2xl">Buscando por "{{$search}}"...</h1>
        @else
            <h1 class="text-2xl">
                Próximos eventos
            </h1>
            <p class="text-gray-500">Veja os próximos eventos</p>
        @endif
    </div>

    @if(count($events) > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 justify-center">
            @foreach($events as $event)

                <div class="bg-white rounded-lg overflow-hidden shadow-md w-[25%] h-64">
                    <div class="h-2/5 overflow-hidden">
                        <img src="{{ asset("img/events/$event->image") }}" alt="Event Image"
                             class="object-cover w-full h-full">
                    </div>
                    <div class="pt-4 px-4">
                        <p class="text-sm text-gray-400">{{date('d/m/Y', strtotime($event->date))}}</p>
                        <h5 class="text-xl mb-2">{{$event->title}}</h5>
                        <p class="text-gray-500">X participantes</p>
                        <div class="my-3">
                            <a class="px-5 py-2 bg-blue-500 rounded-md text-white hover:bg-blue-700 "
                               href="/event/{{$event->id}}">Saiba mais</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        @if($search)
            <div class="flex justify-center items-center p-8">
                <p class="text-3xl">Nenhum resultado para "{{$search}} !"</p>
            </div>
        @else
            <div class="flex justify-center items-center p-8">
                <p class="text-3xl">Nenhum evento no momento !</p>
            </div>
        @endif
    @endif
@endsection
