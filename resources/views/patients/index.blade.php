@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1>Patient List</h1>
                  <div class="table-responsive patients-overview">
                    <table class="table table-hover table-striped">
                      <thead class="thead-inverse">
                          <tr>
                            <th>Unique ID</th>
                            <th>File No</th>
                            <th>Institution ID</th>
                            <th>Patient Name (Last, First name)</th>
                            <th>Gender</th>
                            <th>Age</th>
                          </tr>
                      </thead>
                      @foreach ($patients as $patient)
                        <tr class="testing-table">
                          <td>{{ $patient->id }}</td>
                          <td>{{ $patient->FileNo }}</td>
                          <td>{{ $patient->InstitutionId }}</td>
                          <td>{{ $patient->LastName }} {{ $patient->FirstName }}
                            <div class="setting">
                            <a class="btn btn-success btn-xs" href="{{ action('patientsController@show', ['id' => $patient->id]) }}" role="button">View</a>
                            <a class="btn btn-warning btn-xs" href="{{ action('patientsController@edit', ['id' => $patient->id]) }}" role="button">Edit</a>
                <div class="display-inline" style="display: inline-block;">
                    <form method="POST" action="patients/{{ $patient->id }}">
                          {{ csrf_field() }}
                          <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                    </form>
                </div>
                            </div>
                          </td>
                          <td>{{ $patient->Gender == 'F' ? 'Female' : 'Male' }}</td>
                          <td>{{ $patient->age }} years</td>
                        </tr>
                        @endforeach
                    </table>
                  </div>
    </div>
</div>
@endsection
