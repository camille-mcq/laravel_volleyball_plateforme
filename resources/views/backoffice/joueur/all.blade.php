@extends('layouts.app')

@section('content')
    <section class="d-flex welcome">
        @include('partials.nav2')
        <section class="main ">
            <section class="container">
                <h1 class="text-center my-5">Les joueurs</h1>
                <table class="table">
                    <a class="btn btn-success" href="{{ route("joueurs.create") }}">Créer une nouvelle équipe</a>
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Nom d'équipe</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($joueurs as $joueur)
                            <tr>
                                <th scope="row">{{ $joueur->nom}}</th>
                                <td>{{ $joueur->prenom }}</td>
                                <td>{{ $joueur->equipe }}</td>
                                <td>
                                    <a class="btn text-white mx-1 btn-secondary" href="{{ route("joueurs.show", $joueur->id) }}">Détails</a>
                                    <a class="btn text-white mx-1 btn-secondary" href="{{ route("joueurs.edit", $joueur->id) }}">Modifier</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </section>
    </section>
@endsection
