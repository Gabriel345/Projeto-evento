@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="/" method="GET">
            <label for="search">Buscar Eventos</label>
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar Evento">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        <h2>Proximos eventos</h2>
        <p>Veja os eventos dos próximos dias</p>
    </div>
    <div class="container">
        @foreach ($events as $event)
            <div class="item-container">
                <div class="img-container">
                    <img src="/img/events/{{ $event->image }}" alt="Imagem capa     {{ $event->title }}">
                </div>

                <div class="body-container">
                    <div class="overlay"></div>

                    <div class="event-info">
                        <p class="title">{{ $event->title }}</p>
                        <div class="separator"></div>
                        <p class="info"> {{ $event->city }}</p>
                        <p class="price">Free</p>

                        <div class="additional-info">
                            <p class="info">
                                <i class="fas fa-map-marker-alt"></i>

                            </p>
                            <p class="info">
                                <i class="far fa-calendar-alt"></i>
                                {{ date('d/m/Y', strtotime($event->date)) }}
                            </p>

                            <p class="info description">
                                {{ $event->description }} <span><a href="/events/{{ $event->id }}">Mais...</a></span>
                            </p>
                        </div>
                    </div>
                    <a href="/events/{{ $event->id }}" class="action">reserve aqui</a>
                </div>
            </div>
        @endforeach
    </div>
    @if (count($events) == 0)
        <p>Não há eventos disponiveis</p>
    @endif

@endsection
