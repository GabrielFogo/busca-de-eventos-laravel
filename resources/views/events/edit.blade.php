@extends('layouts.main')
@section('title', 'Editando ' . $editEvent->title)
@section('content')
    <div class="w-1/2 m-auto">
        <h1 class="text-2xl mb-3">Editando o Evento: {{ $editEvent->title }}</h1>
        <form action="/events/update/{{$editEvent->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="image">Imagem do evento:</label>
                <input type="file" id="image" name="image"
                       class="w-full border border-gray rounded-md p-2 outline-none focus:border-gray-700 my-1">
                <div class="w-1/2">
                    <img src="/img/events/{{ $editEvent->image }}">
                </div>
            </div>
            <div class="mb-3">
                <label for="title">Evento:</label>
                <input type="text" id="title" name="title"
                       class="w-full border border-gray rounded-md p-2 outline-none focus:border-gray-700 my-1"
                       placeholder="Nome do Evento" value="{{ $editEvent->title }}">
            </div>
            <div class="mb-3">
                <label for="title">Data:</label>
                <input type="date" id="date" name="date"
                       class="w-full border border-gray rounded-md p-2 outline-none focus:border-gray-700 my-1"
                       placeholder="Data do Evento" value="{{ $date->format('Y-m-d') }}">
            </div>
            <div class="mb-3">
                <label for="city">Cidade:</label>
                <input type="text" id="city" name="city"
                       class="w-full border border-gray rounded-md p-2 outline-none focus:border-gray-700 my-1"
                       placeholder="Local do Evento" value="{{ $editEvent->city }}">
            </div>
            <div class="mb-3">
                <label for="private">É privado:</label>
                <select id="private" name="private"
                        class="w-full border border-gray rounded-md p-2 outline-none focus:border-gray-700 my-1">
                    <option value="0" {{ $editEvent->private == 0 ? 'selected' : '' }}>Não</option>
                    <option value="1" {{ $editEvent->private == 1 ? 'selected' : '' }}>Sim</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="description">Descrição:</label>
                <textarea id="description" name="description"
                          class="w-full border border-gray rounded-md p-2 outline-none focus:border-gray-700 my-1"
                          placeholder="O que vai acontecer no evento ?">{{ $editEvent->description }}</textarea>
            </div>
            <div class="mb-3 flex flex-col">
                <label class="mb-2">Adicione itens de infraestrutura:</label>
                <div class="mb-1">
                    <input type="checkbox" name="items[]" value="Open Food" class="form-checkbox mr-2">
                    <span>Open food</span>
                </div>
                <div class="mb-1">
                    <input type="checkbox" name="items[]" value="Open Bar" class="form-checkbox mr-2">
                    <span>Open bar</span>
                </div>
                <div class="mb-1">
                    <input type="checkbox" name="items[]" value="Cadeiras" class="form-checkbox mr-2">
                    <span>Cadeiras</span>
                </div>
                <div class="mb-1">
                    <input type="checkbox" name="items[]" value="Palco" class="form-checkbox mr-2">
                    <span>Palco</span>
                </div>
            </div>

            <input type="submit" class="px-5 py-2 bg-blue-500 rounded-md text-white hover:bg-blue-700"
                   value="Atualizar"/>
        </form>
    </div>
@endsection
