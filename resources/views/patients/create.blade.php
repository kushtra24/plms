@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h1>Add new Patient</h1>
            <div class="panel panel-default">
                <div class="panel-heading">Patients Informations <span class="pull-right" style="color: orange;">Please note: Orange fields are mandatory</span></div>
                
<div class="panel-body">
  <form method="POST" action="/patients">
  {{ csrf_field() }}

    <div class="form-group">
      <input type="number" class="form-control mandatory" name="fileNo" id="FileNo" aria-describedby="FileNo" placeholder="Patients File Nummber">
    </div>

    <div class="form-group">
      <input type="number" class="form-control mandatory" name="institutionId" id="InstitutionId" aria-describedby="InstitutionId" placeholder="Patients File Nummber">
    </div>

    <div class="form-group">
      <input type="text" class="form-control mandatory" name="lastName" id="LastName" aria-describedby="LastName" placeholder="Patients Last Name">
    </div>

    <div class="form-group">
      <input type="text" class="form-control mandatory" name="firstName" id="FirstName" aria-describedby="FirstName" placeholder="Patients First Name">
    </div>

    <div class="form-group">
      <label> Date of Birth</label>
      <input type="date" class="form-control" name="birthDate" id="BirthDate" aria-describedby="BirthDate" placeholder="Patients Birth Date">
    </div>

  	<div class="form-group">
  	<label> Gender</label>
  		<div class="form-check">
  		  <label class="form-check-label">
  		    <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="F"> Female
  		  </label>
  		</div>
  		<div class="form-check">
  		  <label class="form-check-label">
  		    <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="M"> Male
  		  </label>
  		</div>
  	</div>

    <div class="form-group">
      <input type="text" class="form-control" name="city" id="City" aria-describedby="City" placeholder="City">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" name="address" id="Address" aria-describedby="Address" placeholder="Address">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" name="province" id="province" aria-describedby="province" placeholder="province">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" name="zipCode" id="ZipCode" aria-describedby="ZipCode" placeholder="ZipCode">
    </div>

    <div class="form-group">
      <input type="number" class="form-control" name="telephone" id="Telephone" aria-describedby="Telephone" placeholder="Telephone">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" name="parentLastName" id="ParentLastName" aria-describedby="ParentLastName" placeholder="ParentLastName">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" name="parentFirstName" id="ParentFirstName" aria-describedby="ParentFirstName" placeholder="ParentFirstName">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" name="partentRelationship" id="PartentRelationship" aria-describedby="PartentRelationship" placeholder="PartentRelationship">
    </div>

    <div class="form-group">
      <input type="number" class="form-control" name="distanceToCenterKm" id="DistanceToCenterKm" aria-describedby="DistanceToCenterKm" placeholder="DistanceToCenterKm">
    </div>

    <div class="form-group">
      <input type="number" class="form-control" name="siblingsNr" id="SiblingsNr" aria-describedby="SiblingsNr" placeholder="SiblingsNr">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" name="fathersOccupation" id="FathersOccupation" aria-describedby="FathersOccupation" placeholder="FathersOccupation">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" name="mothersOccupation" id="MothersOccupation" aria-describedby="MothersOccupation" placeholder="MothersOccupation">
    </div>

    <div class="form-group">
      <input type="number" class="form-control" name="annualIncome" id="AnnualIncome" aria-describedby="AnnualIncome" placeholder="AnnualIncome">
    </div>

    <div class="form-group">
      <input type="number" class="form-control" name="enteredBy" id="EnteredBy" aria-describedby="EnteredBy" placeholder="EnteredBy">
    </div>

    <div class="form-group">
      <input type="number" class="form-control" name="modifiedBy" id="modifiedBy" aria-describedby="modifiedBy" placeholder="modifiedBy">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
            </div>
        </div>
    </div>
</div>
@endsection
