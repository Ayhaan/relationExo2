@extends('layouts.index')

@section('content')
    <h1>All colors</h1>
    <a href="{{ route('home') }}" class="btn btn-secondary">back admin</a>
    <a href="{{ route('color.create') }}" class="btn btn-success">Add</a>
    @include('layouts.flash')

    <div class="my-5">
        @foreach ($colors as $color)
            <p>{{ $color->color }}</p>
            <hr>
        @endforeach
    </div>


@endsection