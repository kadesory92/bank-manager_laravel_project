@extends('layouts.app')

@section('title', 'Client')
    
@section('content')
    <div class="card container">
        <div class="card-header">
            <p class='card-header-title'>Client</p>
        </div>
        <div class="card-body">
            <div class="content ml-5 mr-5">
                <div class="form-group">
                    <label for="label">ID:</label>
                    <input type="text" name="id" class="form-control" value="{{$client->id}} " />
                </div>
                <div class="form-group">
                    <label for="label">Last Name:</label>
                    <input type="text" name="id" class="form-control" value="{{$client->nom}} " />
                </div>
                <div class="form-group">
                    <label for="label">First Name:</label>
                    <input type="text" name="id" class="form-control" value="{{$client->prenom}} " />
                </div>
                <div class="form-group">
                    <label for="label">Birthday:</label>
                    <input type="text" name="id" class="form-control" value="{{$client->dateNaissance}} " />
                </div>
                <div class="form-group">
                    <label for="label">Address:</label>
                    <textarea  name="id" class="form-control" value="{{$client->adresse}} " >{{$client->adresse}}</textarea>
                </div>
                <div class="form-group">
                    <label for="label">Phone:</label>
                    <input type="text" name="id" class="form-control" value="{{$client->tel}} " />
                </div>
            </div>  
        </div>
    </div>
@endsection

