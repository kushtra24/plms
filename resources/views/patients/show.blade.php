@extends('layouts.app')


<style>
  

ul,
li {
  list-style: none;
  margin: 0;
  padding: 0;
}

.tg-list {
  text-align: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.tg-list-item {
  margin: 0 2em;
}

h2 {
  color: #777;
}

h4 {
  color: #999;
}

.tgl {
  display: none;
}
.tgl, .tgl:after, .tgl:before, .tgl *, .tgl *:after, .tgl *:before, .tgl + .tgl-btn {
  box-sizing: border-box;
}
.tgl::-moz-selection, .tgl:after::-moz-selection, .tgl:before::-moz-selection, .tgl *::-moz-selection, .tgl *:after::-moz-selection, .tgl *:before::-moz-selection, .tgl + .tgl-btn::-moz-selection {
  background: none;
}
.tgl::selection, .tgl:after::selection, .tgl:before::selection, .tgl *::selection, .tgl *:after::selection, .tgl *:before::selection, .tgl + .tgl-btn::selection {
  background: none;
}
.tgl + .tgl-btn {
  outline: 0;
  display: block;
  width: 4em;
  height: 2em;
  position: relative;
  cursor: pointer;
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
}
.tgl + .tgl-btn:after, .tgl + .tgl-btn:before {
  position: relative;
  display: block;
  content: "";
  width: 50%;
  height: 100%;
}
.tgl + .tgl-btn:after {
  left: 0;
}
.tgl + .tgl-btn:before {
  display: none;
}
.tgl:checked + .tgl-btn:after {
  left: 50%;
}

.tgl-light + .tgl-btn {
  background: #f0f0f0;
  border-radius: 2em;
  padding: 2px;
  -webkit-transition: all .4s ease;
  transition: all .4s ease;
}
.tgl-light + .tgl-btn:after {
  border-radius: 50%;
  background: #fff;
  -webkit-transition: all .2s ease;
  transition: all .2s ease;
}
.tgl-light:checked + .tgl-btn {
  background: #9FD6AE;
}

</style>

@section('content')
<div class="container">
    <div class="row">
       <h1>Patients details</h1>

        <div class="patients-overview">
        @if(isset($next) AND $next != null AND $next != 0)
          <a class="btn btn-default pull-right" href="/patients/show/{{$next}}" role="button"> Next</a>
        @endif
        @if(isset($prev) && $prev != null && $prev != 0)
          <a class="btn btn-default pull-right" href="/patients/show/{{$prev}}" role="button">Previous </a>
        @endif
          <button class="btn btn-default"  role="button" onclick="window.history.back()">Back</button>
        </div>
<hr>
        <div class="patients-overview">
          <div class="col-md-2 col-sm-2 col-xs-6 col-xs-offset-3 col-sm-offset-0 thumbnail">
            <img src="{{ asset('images/avatar-default.png') }}" alt="avater">
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <h2><strong>{{ $patient->FirstName }} {{ $patient->LastName }}</strong></h2>
            <h4>{{ $patient->Gender == 'F' ? 'Female' : 'Male' }}, {{ $patient->age }} years old</h4>
            <h4><i class="glyphicon glyphicon-edit"></i> <strong>File No:</strong> {{ $patient->FileNo }}</h4>
            <hr>
            <h4> <i class="glyphicon glyphicon-paperclip"></i> <strong>Institution Id:</strong> {{ $patient->InstitutionId }}</h4>
          </div><!-- col-md-8 -->
          <div class="col-md-2 col-xs-12">
            <a class="btn btn-warning pull-right" href="{{ action('patientsController@edit', ['id' => $patient->id]) }}" role="button">Edit</a>
          </div>
        </div>
<hr>
        <div class="patients-overview">
               <div class="col-md-6">
                 <h3>Contact: </h3>
                 <p><i class="glyphicon glyphicon-earphone"></i> <strong>Telephone </strong>{{ $patient->Telephone }} </p>
                 <p> <i class="glyphicon glyphicon-home"></i> <strong>Address: </strong><br>
                 {{ $patient->Address }} <br>
                 {{ $patient->City }} {{ $patient->ZipCode }}<br>
                 {{ $patient->province }}<br>
                 <hr>
                 <h3>Other: </h3>
                 <p> <i class="glyphicon glyphicon-leaf"> </i> <strong> Borth date: </strong> {{ $patient->BirthDate }} </p>
                 <p> <i class="glyphicon glyphicon-road"></i> <strong>Distance To Center Km: </strong>{{ $patient->DistanceToCenterKm }} </p>
                 <p> <i class="glyphicon glyphicon-user"></i> <strong>Number of Siblings: </strong>{{ $patient->SiblingsNr }} </p>
                 <p> <i class="glyphicon glyphicon-asterisk"></i> <strong>Entered By </strong>{{ $patient->EnteredBy }} </p>
                 <p> <i class="glyphicon glyphicon-wrench"></i> <strong>Modified By </strong>{{ $patient->modifiedBy }} </p>
                 </p>
               </div>
               <div class="col-md-6">
                 <h3>Parents Information:</h3>
                 <p> <strong>Last Name </strong>{{ $patient->ParentLastName }} </p>
                 <p> <strong>First Name </strong>{{ $patient->ParentFirstName }} </p>
                 <p> <strong>Partent Relationship </strong>{{ $patient->PartentRelationship }} </p>
                 <p> <strong>Fathers Occupation </strong>{{ $patient->FathersOccupation }} </p>
                 <p> <strong>Mothers Occupation </strong>{{ $patient->MothersOccupation }} </p>
                 <p> <strong>Annual Income </strong>{{ $patient->AnnualIncome }} </p>
               </div>
        </div>
<hr>

        <div class="patients-overview" style="margin-bottom: 30px;">
            <table class="table table-hover">
              <thead class="thead-inverse">
                  <tr>
                    <th>Patient Id</th>
                    <th>File No</th>
                    <th>Patient Name</th>
                    <th>Patient Surname</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Disable/Enable</th>
                  </tr>
              </thead>
                <tr class="testing-table">
                  <td>{{ $patient->FileNo }}</td>
                  <td>{{ $patient->InstitutionId }}</td>
                  <td>{{ $patient->FirstName }}
                    <div class="setting">
                    <a class="btn btn-success btn-xs" href="{{ action('patientsController@show', ['id' => $patient->id]) }}" role="button">View</a>
                    <a class="btn btn-warning btn-xs" href="#" role="button">Edit</a>
                    <a class="btn btn-danger btn-xs" href="#" role="button">Delete</a>
                    </div>
                  </td>
                  <td>{{ $patient->LastName }}</td>
                  <td>{{ $patient->Gender == 'F' ? 'Female' : 'Male' }}</td>
                  <td>{{ $patient->age }} years</td>
                  <td>
                  <form action="">
                    <input class="tgl tgl-light" id="cb1" type="checkbox"/>
                    <label class="tgl-btn" for="cb1"></label>
                  </form>
                </tr>
            </table>
        </div>
 @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

</div>
</div>
@endsection
