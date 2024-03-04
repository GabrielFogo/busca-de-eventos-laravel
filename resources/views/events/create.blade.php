@extends('layout.main')
@section('title', 'Agenda de Eventos')
@section('content')
    <div class="w-1/2 m-auto">
        <h1 class="text-2xl mb-3">Crie um evento</h1>
        <form action="/events" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title">Evento:</label>
                <input type="text" id="title" name="title"
                       class="w-full border border-gray rounded-md p-2 outline-none focus:border-gray-700 my-1"
                       placeholder="Nome do Evento">
            </div>
            <div class="mb-3">
                <label for="city">Cidade:</label>
                <input type="text" id="city" name="city"
                       class="w-full border border-gray rounded-md p-2 outline-none focus:border-gray-700 my-1"
                       placeholder="Local do Evento">
            </div>
            <div class="mb-3">
                <label for="private">É privado:</label>
                <select id="private" name="private"
                        class="w-full border border-gray rounded-md p-2 outline-none focus:border-gray-700 my-1">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description">Descrição:</label>
                <textarea id="description" name="description"
                          class="w-full border border-gray rounded-md p-2 outline-none focus:border-gray-700 my-1"
                          placeholder="O que vai acontecer no evento ?"></textarea>
            </div>
            <input type="submit" class="px-5 py-2 bg-blue-500 rounded-md text-white hover:bg-blue-700" value="Cadastrar"/>
        </form>
    </div>
@endsection
