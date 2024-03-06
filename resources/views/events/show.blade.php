@extends('layouts.main')

@section('title', 'Agenda de Eventos')

@section('content')
    <div class="flex gap-4 justfy-center">
        <div class="w-1/2">
            <img src="{{ asset("img/events/$event->image") }}" alt="{{$event->title}}" class="mb-3 rounded">
            <h3 class="text-xl font-semibold mb-2">Sobre o evento</h3>
            <p class="text-gray-700">{{$event->description}}</p>
        </div>
        <div class="w-1/2">
            <h1 class="text-2xl font-bold mb-4">{{$event->title}}</h1>
            <ul class="mb-4">
                <li>
                    <strong class="text-gray-800">Cidade:</strong>
                    {{$event->city}}
                </li>
                <li>
                    <strong class="text-gray-800">Participantes:</strong>
                </li>
                <li>
                    <strong class="text-gray-800">Dono do evento:</strong>
                </li>
                <li>
                    <strong class="text-gray-800">Data do evento:</strong>
                    {{date('d/m/Y', strtotime($event->date))}}
                </li>
            </ul>
            <h1 class="text-2xl font-bold mb-4">O evento contara com:</h1>
            <ul class="mb-4">
                @foreach($event->items as $item)
                    <li>
                        <strong class="text-gray-800">{{$item}}</strong>
                    </li>
                @endforeach
            </ul>
            <button class="px-5 py-2 bg-blue-500 rounded-md text-white hover:bg-blue-700">Confirmar presença</button>
        </div>
    </div>
@endsection
