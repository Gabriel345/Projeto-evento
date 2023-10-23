@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    @foreach ($events as $event)
        <p><img src="/img/events/{{ $event->image }}" alt="Imagem capa     {{ $event->title }}">{{ $event->title }} -
            {{date('d/m/Y',strtotime($event->date))}}-
            {{ $event->description }}-{{ $event->city }}
            <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber Mais</a>
        </p>
    @endforeach
    @if (count($events) == 0)
        <p>Não há eventos disponiveis</p>
    @endif

@endsection
