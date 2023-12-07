@extends('layouts.main')
@section('title', 'Criar Evento')
@section('content')
    <div class="container mt-3">
        <h2>Crie seu evento</h2>
        <div id="event-create-container" class="container mt-3 border">
            <form action="/events" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mt-3 mb-3">
                    <label for="image">Imagem do evento</label>
                    <input type="file" id="image" name="image" class="form-control-file">
                </div>
                <div class="mt-3 mb-3">
                    <label for="title">Evento:</label>
                    <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="Nome do evento">
                </div>
                <div class="mt-3 mb-3">
                    <label for="date">Data do evento</label>
                    <input type="date" class="form-control form-control-lg" id="date" name="date" placeholder="Nome do evento">
                </div>
                <div class="mt-3 mb-3">
                    <label for="title">Cidade:</label>
                    <input type="text" class="form-control form-control-lg" id="city" name="city" placeholder="Cidade do evento">
                </div>
                <div class="mt-3 mb-3">
                    <label for="title">Publico/Privado:</label>
                    <select name="private" id="private" class="form-control form-control-lg">
                        <option value="0">Publico</option>
                        <option value="1">Privado</option>
                    </select>
                </div>
                <div class="mt-3 mb-3">
                    <label for="title">Descrição:</label>
                    <textarea name="description" id="description"class="form-control form-control-lg" placeholder="descrição do evento"></textarea>
                </div>
                <div class="mt-3 mb-3">
                    <label for="title">Preços</label>
                    <input class="form-control form-control-lg" type="text" name="itens" value="R$000,00">
                </div>
                <input type="submit" class="btn btn-primary justify-content-end" value="Criar Evento">
            </form>
        </div>
    </div>

@endsection
