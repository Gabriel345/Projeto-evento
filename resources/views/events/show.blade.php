@extends('layouts.main')
@section('title', $event->title)
@section('content')
<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6 mb-4">
            <img src="/img/events/{{ $event->image }}" alt="capa do evento {{ $event->title }}" class="img-fluid">
        </div>
        <div id="info-container" class="col-md-6">
            <h1 class="text">{{ $event->title }}</h1>
            <p class="event-city text"><ion-icon name="location-outline"></ion-icon>{{ $event->city }}</p>
            <p class="event-participants text"><ion-icon name="people-outline"></ion-icon>{{ count($event->users) }} participantes</p>
            <p class="event-owner text"><ion-icon name="star-outline"></ion-icon>{{ $eventOwner['name'] }}</p>
            <p class="event-owner text">R${{ $event->itens }}</p>

            <form action="/events/join/{{$event->id}}" method='POST'>
                @csrf
                <a href="/events/join/{{$event->id}}"
                    class="btn btn-primary"
                    id="event-submit"
                    onclick="event.preventDefault(); this.closest('form').submit();"
                >Confirmar Presença</a>
            </form>
        </div>
        <div class="col-md-12" id="description-container">
            <h3 class='text'>Sobre o evento:</h3>
            <p class="event-description text">Dia do Evento {{ date('d/m/Y', strtotime($event->date)) }}</p>
            <p class="event-description text">{{ $event->description }}</p>
        </div>
    </div>
</div>

 @endsection
