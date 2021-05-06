@extends('layouts.index')

@section('content')
    <h1>Voitures par section couleurs</h1>
    <a href="{{ route('home') }}" class="btn btn-success">back home</a>

    <div class="my-5">
        <h3>Voitures rouge</h3>
        @forelse ($voitures as $item)
            @if ($item->color_id == 1)
                <p>{{ $item->marque }}</p>
            @endif
        @empty
            <p>pas de voiture rouge dispo</p>
        @endforelse

        <h3>Voitures bleu</h3>
        @forelse ($voitures as $item)
            @if ($item->color_id == 2)
                <p>{{ $item->marque }}</p>
            @endif
        @empty
            <p>pas de voiture bleu dispo</p>
        @endforelse

        <h3>Autre voiture couleur</h3>
        @forelse ($voitures as $item)
            @if ($item->color_id != 1 && $item->color_id != 2)
                <p>{{ $item->marque }}</p>
            @endif
        @empty
            <p>aucune voiture dispo</p>
        @endforelse
    </div>
@endsection