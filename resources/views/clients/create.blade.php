@extends('layouts.app')

@section('title', 'Ajouter un nouveau client')

@section('content')
<div class="card container">
    <div class="card-header">
        <p class="card-header-title">Add a new Client</p>
    </div>
    <div class="card-body">
        <form action="">
            <label for="">Last Name:</label>
            <input type="text" name="nom" id="nom">
            <label for="">First Name:</label>
            <input type="text" name="prenom" id="prenm">
            <label for="">Birthday:</label>
            <input type="text" name="naissance" id="naissance">
            <label for="">Address:</label>
            <input type="text" name="adresse" id="adresse">
            <label for="">Phone:</label>
            <input type="text" name="tel" id="tel">
        </form>
    </div>
</div>
@endsection