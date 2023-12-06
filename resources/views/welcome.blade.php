@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    @if ($search)
    @else
        <section class="banner-jessy py-6">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-6 py-2">
                        <img class="img-image" src="/images/imagemhome.jpg" alt="desenho marcando eventos">
                    </div>
                    <div class="col-lg-5 py-5">
                        <h4 class="sub-title">Conectando momentos, criando memórias: <br> <span id="text-sub"> Seu destino para eventos inesquecíveis! </span>
                        </h4>
                        <div class="row">
                            <div class="col-lg-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
                                </svg>
                            </div>
                            <div class="col-lg-11">
                                <p class="main-style"> Divulgue seu evento. </p>
                            </div>
                            <div class="col-lg-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
                                </svg>
                            </div>
                            <div class="col-lg-11">
                                <p class="main-style"> Crie esperiências inesquecíveis.</p>
                            </div>
                            <div class="col-lg-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
                                </svg>
                            </div>
                            <div class="col-lg-11">
                                <p class="main-style"> Ajude quem precisa, faça o bem. </p>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="container">
                        <a href="/"><button class="bn632-hover bn25"> Registrar </button></a>
                    </div> -->


                </div>

            </div>

            </div>
        </section>
    @endif




    <div id="search-container" class="col-md-12">
        <h2>Busque um evento</h2>
        <form action="/" method="GET">
            <label for="search"></label>
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar Evento">
        </form>
    </div>
    @if ($search)
        <h2>Buscando por: {{ $search }}</h2>
    @else
        <div id="events-container" class="col-md-12">
            <h3>Proximos eventos</h3>
            <p>Veja os eventos dos próximos dias</p>
        </div>
    @endif

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
                        <p class="price"> free </p>

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
    @if (count($events) == 0 && $search)
        <p>Não foi possivel encontrar nenhum evento com {{$search}} <a href="/">Inicio</a></p>

    @elseif (count($events) == 0)
        <p>Não há eventos disponiveis</p>
    @endif

@endsection
