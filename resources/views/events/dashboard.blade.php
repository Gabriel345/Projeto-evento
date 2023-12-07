@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <h1 class="mt-4">Meus Eventos</h1>
    @if (count($events) > 0)
        <table class="table mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td><a href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                        <td>{{ count($event->users) }}</td>
                        <td class="d-flex justify-content-between">
                            <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn">
                                <ion-icon name="create-outline"></ion-icon> Editar
                            </a>
                            <form action="/events/{{ $event->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-btn">
                                    <ion-icon name="trash-outline"></ion-icon> Deletar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="mt-4">Você ainda não tem eventos, <a href="/events/create">Criar Evento</a></p>
    @endif
</div>


@endsection
