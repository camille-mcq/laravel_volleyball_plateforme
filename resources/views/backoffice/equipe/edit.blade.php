@extends('layouts.app')

@section('content')
    <section class="d-flex welcome">
        @include('partials.nav2')
        <h2>Modifier une équipe</h2>
        <section class="main center">
            <form action={{ route('equipes.update', $equipe->id) }} method="post" enctype="multipart/form-data">
                @csrf
                @method("put")
                <div class="mb-3">
                    <label class="form-label" >Nom</label>
                    <input type="text" class="form-control" name="nom" value={{ $equipe->nom }}>
               </div>
               <div class="mb-3">
                   <label class="form-label">Ville</label>
                   <input type="text" class="form-control" name="ville" value="{{ $equipe->ville }}">
               </div>
               <div class="mb-3">
                   <label class="form-label">Nombre de joueurs max</label>
                   <input type="text" class="form-control" name="max" value="{{ $equipe->max }}">
               </div>
               <div class="mb-3">
                    <label class="form-label">Continent</label>
                    <input type="text" class="form-control" name="continent_id" value="{{ $equipe->continent }}">
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </section>
    </section>
@endsection



