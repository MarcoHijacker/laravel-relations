@extends('layouts.main-layout')
@section('content')

  <main>

    <h2>Employees List:</h2>
    <b><a href="{{ route('employee-create') }}">Create New Employee</a></b>
    </h2>
    <br><br>


    <ul>
      @foreach ($emps as $emp)

        <li>

          <a href="{{ route('employee-show', $emp -> id) }}">
          {{ $emp -> firstname }}
          {{ $emp -> lastname }}
          </a>

        </li>

      @endforeach
    </ul>

  </main>

@endsection
