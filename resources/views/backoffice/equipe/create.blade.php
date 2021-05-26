@extends('layouts.app')

@section('content')
    <section class="d-flex justify-content-evenly">
        @include('partials.nav')
        <section><div class="container">
            <h1 class="text-center my-5">Créer une nouvelle équipe</h1>
            <form action="#" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                     <label class="form-label">Nom</label>
                     <input type="text" class="form-control" name="nom">
                </div>
                <div class="mb-3">
                    <label class="form-label">Ville</label>
                    <input type="text" class="form-control" name="ville">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nombre de joueurs max</label>
                    <input type="text" class="form-control" name="max">
                </div>
                <button type="submit" class="btn btn-primary text-white">Créer</button>
            </form>
        </div></section>
        
    </section>
@endsection
