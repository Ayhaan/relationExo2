@extends('layouts.index')
@section('content')
    <h1>Page HOME</h1>
    <a href="{{ route('voiture.index') }}" class="btn btn-secondary">Voitures</a>
    <a href="{{ route('color.index') }}" class="btn btn-secondary">colors</a>
    <a href="{{ route('section') }}" class="btn btn-secondary">section</a>
@endsection