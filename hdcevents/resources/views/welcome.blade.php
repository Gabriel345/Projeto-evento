@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    @foreach ($events as $event)
        <p><img src="/img/events/{{ $event->image }}" alt="Imagem capa            {{ $event->title }}">{{ $event->title }} -
            {{ $event->description }}-{{ $event->city }}
            <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber Mais</a>
        </p>
    @endforeach @endsection
