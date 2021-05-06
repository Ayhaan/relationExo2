@extends('layouts.index')

@section('content')
    <h1>All voitures</h1>
    <a href="{{ route('home') }}" class="btn btn-secondary">back admin</a>
    <a href="{{ route('voiture.create') }}" class="btn btn-success">Add</a>
    @include('layouts.flash')
    <div class="row my-5">
        @forelse ($voitures as $voiture)
            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <p><b>Marque :</b>{{ $voiture->marque }}</p>
                        <p><b>Color :</b>{{ $voiture->color->color }}</p>   
                    </div>
                </div>
            </div>
        @empty
        <div class="col-12">
            <p>Aucune voiture disponible</p>
        </div>
        @endforelse
    </div>
@endsection