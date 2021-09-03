@extends('layouts.app')

@section('title', 'Ajouter un nouveau client')

@section('content')
<div class="card container">
    <div class="card-header">
        <h3 class="text-center">Ajout de nouveau client</h3>
    </div>
    <div class="card-body">
        <div class="content ml-5 mr-5">
            <form action="{{ route('clients.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="label">Last Name:</label>
                    <input type="text" name="nom" id="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="label">First Name:</label>
                    <input type="text" name="prenom" id="prenm" class="form-control">
                </div>
                <div class="form-group">
                    <label for="label">Birthday:</label>
                    <input type="text" name="naissance" id="naissance" class="form-control">
                </div>
                <div class="form-group">
                    <label for="label">Address:</label>
                    <input type="text" name="adresse" id="adresse" class="form-control">
                </div>
                <div class="form-group">
                    <label for="label">Phone:</label>
                    <input type="text" name="tel" id="tel" class="form-control">
                </div>
                <button class="btn btn-primary" type="submit">Ajouter</button>
            </form>
        </div>
    </div>
</div>
@endsection