@extends('layouts.main-layout')
@section('content')

  <main>

    <h2> {{ $emp -> firstname }} {{ $emp -> lastname }} </h2>
    <br><br>

    <ul>

      <li>
        <u>Date of birth:</u><br> <b> {{ $emp -> date_of_birth }} </b>
      </li>
      <li>
        <u>Private Code:</u><br> <b> {{ $emp -> private_code }} </b>
      </li>
      <li>
        <u>Location:</u><br> <b> {{ $emp -> location -> name }} </b> <br>
        ( City: <i> {{ $emp -> location -> city }} </i> - State: <i> {{ $emp -> location -> state }} </i> )
      </li>

      <li>
        <u>Employee Tasks:</u>
        <ul>
          @foreach ($emp -> tasks as $tas)
            <li>

              <b> {{ $tas -> name }} </b> :
              {{ $tas -> start_date }} - {{ $tas -> end_date }}

            </li>
          @endforeach
        </ul>
      </li>

      <li>
      <strong>
      <a href="{{ route('employee-edit', $emp -> id) }}">EDIT</a>
      <a href="{{ route('employee-destroy', $emp -> id) }}">DELETE</a>
      </strong>
      </li>
    </ul>

  </main>

@endsection
