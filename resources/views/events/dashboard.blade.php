@extends('layouts.main')
@section('title', 'Agenda de Eventos')
@section('content')
    <h1 class="text-3xl mb-4">Meus eventos</h1>
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Titulo</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Participantes</th>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
        </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
        @foreach($eventsUser as $eventUser)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">{{$loop->index + 1}}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{$eventUser->title}}</td>
                <td class="px-6 py-4 whitespace-nowrap">0</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                    <a href="#" class="text-red-600 hover:text-red-900 ml-4">Deletar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
