@extends('layouts.app')

@section('title', 'Liste des clients')

@section('content')
    <div class="card container">
        <div class="card-header">
            <h3 class="text-center">Liste Clients</h3>
            <button class="btn btn-dark"><a class="button is-primary" href="{{ route('clients.create') }}">Ajouter un nouveau client</a></button>
        </div>
        <div class="card-body">
            <div class="content">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                        <tr>
                            <td>{{ $client->id }}</td>
                            <td><strong>{{ $client->nom }}</strong></td>
                            <td><strong>{{ $client->prenom }}</strong></td>
                            <td><a class="button is-primary" href="{{ route('clients.show', $client->id) }}">Voir</a></td>
                            <td><a class="button is-warning" href="{{ route('clients.edit', $client->id) }}">Modifier</a></td>
                            <td>
                                <form action="{{ route('clients.destroy', $client->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button is-danger" type="submit">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer">
            {{ $clients->links() }}
        </div>
    </div>

    @section('css')
        <style>
            .card-footer {
                justify-content: center;
                align-items: center;
                padding: 0.4em;
            }
        </style>
    @endsection
@endsection