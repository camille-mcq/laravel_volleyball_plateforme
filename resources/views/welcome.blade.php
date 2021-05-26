@extends('layouts.app')

@section('content')
    <section class="d-flex welcome">
        @include('partials.nav')
        <section class="main">
            <h1 class="text-center">Welcome To The Volleyball Platform</h1>
            @foreach ($continents as $continent)
                <p>{{ $continent->nom }}</p>
            @endforeach
        </section>
    </section>
@endsection
