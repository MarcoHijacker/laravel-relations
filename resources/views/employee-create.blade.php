@extends('layouts.main-layout')
@section('content')

  <form action="{{ route('employee-store') }}" method="post">
    @csrf
    @method('POST')

    <div class="form-group">
      <label for="firstname">FIRSTNAME</label><br>
      <input type="text" name="firstname" value="">
    </div>
    <div class="form-group">
      <label for="lastname">LASTNAME</label><br>
      <input type="text" name="lastname" value="">
    </div>
    <div class="form-group">
      <label for="date_of_birth">DATE OF BIRTH</label><br>
      <input type="date" name="date_of_birth" value="">
    </div>
    <div class="form-group">
      <label for="private_code">PRIVATE CODE</label><br>
      <input type="number" name="private_code" value="">
    </div>
    <div class="form-group">
      <label for="location_id">LOCATION</label><br>
      <select name="location_id">
        @foreach ($locs as $loc)
          <option value="{{ $loc -> id }}">{{ $loc -> name }} ( {{ $loc -> state }} )</option>
        @endforeach
      </select>
    </div><br>

      <button type="submit" name="button">SAVE</button>

    </div>
  </form>

@endsection
