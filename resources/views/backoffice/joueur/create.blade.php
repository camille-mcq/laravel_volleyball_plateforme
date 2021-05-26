@extends('layouts.app')

@section('content')
    @include('partials.nav2')
    <div class="container">
        <h1 class="text-center my-5">Créer un nouveau joueur</h1>
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
                <input type="text" class="form-control" name="nom">
            </div>
            <div class="mb-3">
                <label class="form-label">Prénom</label>
                <input type="text" class="form-control" name="prenom">
            </div>
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="text" class="form-control" name="age">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">téléphone</label>
                <input type="text" class="form-control" name="telephone">
            </div>
            <div class="mb-3">
                <label class="form-label">Genre</label>
                <input type="text" class="form-control" name="genre">
            </div>
            <div class="mb-3">
                <label class="form-label">Pays d'origine</label>
                <input type="text" class="form-control" name="pays">
            </div>
            <div class="mb-3">
                <label class="form-label">Poste occupé</label>
                <input type="text" class="form-control" name="role">
            </div>
            <div class="mb-3">
                <label class="form-label">Equipe</label>
                <select name="equipe_id" class="form-control">
                    @foreach ($equipes as $equipe)
                        <option value={{ $album->id }}>{{ $album->nom }}</option>
                    @endforeach
                </select>
            </div>
           
           
           
            
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>
@endsection