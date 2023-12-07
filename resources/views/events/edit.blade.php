@extends('layouts.main')
@section('title','Editando',$event->title)
@section('content')
<div id="event-create-container" class="container mt-3 edit-container">
     <h1>Editando: {{$event->title}}</h1> 
     <div class="container mt-10">

     <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mt-3">
            <label for="image">Imagem do evento:</label>
            <input type="file" id="image" name="image" class="form-control-file">
            <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview img-criacao">
        </div>
        <div class="form-group mt-3">
            <label for="title">Evento:</label>
            <input type="text" class="form-control form-control-lg" id="title" name="title" placeholder="Nome do evento" value="{{$event->title}}">
        </div>
        <div class="form-group mt-3">
            <label for="date">Data do evento</label>
            <input type="date" class="form-control form-control-lg" id="date" name="date" placeholder="Nome do evento" value="{{ $event->date }}">
        </div>
        <div class="form-group mt-3">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control form-control-lg" id="city" name="city" placeholder="Cidade do evento" value="{{$event->city}}">
        </div>
        <div class="form-group mt-3">
            <label for="title">Publico/Privado:</label>
            <select name="private" id="private" class="form-control form-control-lg">
                <option value="0">Publico</option>
                <option value="1"{{$event->private==1?"selected='selected'":""}}>Privado</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <label for="title">Descrição:</label>
           <textarea name="description" id="description"class="form-control form-control-lg" placeholder="descrição do evento">{{$event->description}}</textarea>
        </div>
        <div class="form-group mt-3">
            <label for="title">Preço:</label>
            <input class="form-control form-control-lg" type="text" name="itens" value="{{$event->itens}}">
        </div>
        <input type="submit" class="btn btn-primary" value="Salvar">
     </form>
    </div>
</div>
 @endsection