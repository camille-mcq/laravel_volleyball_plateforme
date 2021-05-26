@extends('layouts.app')

@section('content')
    @include('partials.nav2')
    <div class="container">
        <h1 class="text-center my-5">Modifier un joueur</h1>
        <form action="#" method="post" enctype="multipart/form-data">>
            @csrf
            <div class="input-group">
                <div class="mb-3 input-group-text">
                    <input class="form-check-input mt-0" type="radio" value="Femme" aria-label="Checkbox for following text input">
                    <p>Femme</p>
                </div>
                <div class="mb-3 input-group-text">
                    <input class="form-check-input mt-0" type="radio" value="Femme" aria-label="Checkbox for following text input">
                    <p>Homme</p>
                </div>
            </div>
            <div class="mb-3">
                <label class="form-label">Nom</label>
                <input type="text" class="form-control" name="nom" value={{ $joueur ?? ''->nom }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Prénom</label>
                <input type="text" class="form-control" name="prenom" value={{ $joueur ?? ''->prenom }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="text" class="form-control" name="age" value={{ $joueur ?? ''->age }}>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value={{ $joueur ?? ''->email }}>
            </div>
            <div class="mb-3">
                <label class="form-label">téléphone</label>
                <input type="text" class="form-control" name="telephone" value={{ $joueur ?? ''->telephone }}>
            </div>
           
            
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection