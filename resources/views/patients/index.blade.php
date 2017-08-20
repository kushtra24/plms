@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h1>Patient List</h1>
                  
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="thead-inverse">
                          <tr>
                            <th>Patient Id</th>
                            <th>File No</th>
                            <th>Patient Name</th>
                            <th>Patient Surname</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                      </thead>
                      @foreach ($patients as $patient)
                        <tr>
                          <td>{{ $patient->FileNo }}</td>
                          <td>{{ $patient->InstitutionId }}</td>
                          <td>{{ $patient->FirstName }}</td>
                          <td>{{ $patient->LastName }}</td>
                           <td>{{ $patient->Gender == 'F' ? 'Female' : 'Male' }}</td>
                        <td><p>{{ $patient->age }} years</p></td>
                        </tr>
                        @endforeach
                    </table>
                  </div>
        </div>
    </div>
</div>
@endsection
