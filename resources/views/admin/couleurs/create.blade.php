@extends('layouts.index')

@section('content')
    <h1>Add new voiture</h1>
    <a href="{{ route('voiture.index') }}" class="btn btn-secondary">back</a>
    <form action="{{ route('color.store') }}" method="POST" class="w-50 mx-auto my-5">
        @csrf
        <div class="form-group">
          <label for="color">color</label>
          <input type="text" class="form-control" id="color" name="color" placeholder="color">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection