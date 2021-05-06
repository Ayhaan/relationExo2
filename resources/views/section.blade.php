@extends('layouts.index')

@section('content')
    <h1>Voitures par section couleurs</h1>
    <a href="{{ route('home') }}" class="btn btn-success">back home</a>

    <div class="my-5">
        <h3>Voitures rouge</h3>
        @foreach ($voitures as $item)
            @if ($item->color_id == 1)
                <p>{{ $item->marque }}</p>
            @endif
        @endforeach
    
        <h3>Voitures bleu</h3>
        @foreach ($voitures as $item)
            @if ($item->color_id == 2)
            <p>{{ $item->marque }}</p>
            @endif
        @endforeach
    
        <h3>Autre couleur</h3>
        @foreach ($voitures as $item)
            @if ($item->color_id != 1 && $item->color_id != 2)
                <p>{{ $item->marque }}</p>
            @endif
        @endforeach
    </div>

    
@endsection