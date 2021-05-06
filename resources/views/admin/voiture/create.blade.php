@extends('layouts.index')

@section('content')
    <h1>Add new voiture</h1>
    <a href="{{ route('voiture.index') }}" class="btn btn-secondary">back</a>
    <form action="{{ route('voiture.store') }}" method="POST" class="w-50 mx-auto my-5">
        @csrf
        <div class="form-group">
          <label for="marque">Marque auto</label>
          <input type="text" class="form-control" id="marque" name="marque" placeholder="Name auto">
        </div>
        <div class="form-group">
          <label for="annee">Annee auto</label>
          <input type="number" class="form-control" id="annee" name="annee" placeholder="Annee auto">
        </div>
        <div class="form-group">
            <label for="color">Example select</label>
            <select class="form-control" id="color" name="color_id">
                @foreach ($colors as $color)
                    <option value="{{ $color->id }}">{{ $color->color }}</option>
                    
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection