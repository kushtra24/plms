@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <h1>Patients details</h1>

 <form method="POST" action="/patients/edit/{{$patient->id}}" class="form-horizontal">
  {{ csrf_field() }}
        <div class="patients-overview">
          <div class="col-md-2 col-sm-2 col-xs-6 col-xs-offset-3 col-sm-offset-0">
          <div class="thumbnail">
            <img src="{{ asset('images/avatar-default.png') }}" alt="avater">
          </div>
          <div class="form-group">
            <label for="exampleInputFile">Change Picture</label>
            <input type="file" id="exampleInputFile">
            <p class="help-block">Plase submit jpg, png, </p>
          </div>
          </div>

    <div class="col-md-8 col-sm-8 col-xs-12">

    <div class="form-group">
      <label for="FileNo" class="col-sm-3 control-label">Last Name</label>
        <div class="col-sm-9">

      <input type="text" class="form-control" name="lastName" id="LastName" value="{{ $patient->LastName }}" placeholder="Last Name">
       </div>
    </div>

    <div class="form-group">
      <label for="FileNo" class="col-sm-3 control-label">First Name</label>
        <div class="col-sm-9">
      <input type="text" class="form-control" name="firstName" id="FirstName" value="{{ $patient->FirstName }}" placeholder="First name">
       </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-3"> Gender</label>
      <div class="col-sm-9">
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="F" {{ $patient->Gender === 'F' ? 'checked' : '' }}> Female
          </label>
        </div>
        <div class="form-check">
          <label class="form-check-label">
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="M" {{ $patient->Gender === 'M' ? 'checked' : '' }}> Male
          </label>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="FileNo" class="col-sm-3 control-label">File No.</label>
        <div class="col-sm-9">
      <input type="number" class="form-control" name="fileNo" id="FileNo" value="{{ $patient->FileNo }}" placeholder="Patients File number">
       </div>
    </div>
            <hr>

    <div class="form-group">
      <label for="FileNo" class="col-sm-3 control-label">Institution Id:</label>
      <div class="col-sm-9">
      <input type="text" class="form-control" name="institutionId" id="InstitutionId" value="{{ $patient->InstitutionId }}" placeholder="Institution Id:">
      </div>
    </div>
</div><!-- col-md-8 -->
</div><!-- patients-overview -->
<hr>
        <div class="patients-overview">
               <div class="col-md-6">
                 <h3>Contact: </h3>
                   <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label"> <i class="glyphicon glyphicon-earphone"></i> Telephone</label>
                      <div class="col-sm-9">
                      <input type="number" class="form-control" name="telephone" id="Telephone" value="{{ $patient->Telephone }}" placeholder="Telephone">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label"> <i class="glyphicon glyphicon-home"></i>  Address</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="address" id="Address" value="{{ $patient->Address }}" placeholder="Address">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label">City</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="city" id="City" value="{{ $patient->City }}" placeholder="City">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label">ZipCode</label>
                      <div class="col-sm-9">
                      <input type="number" class="form-control" name="zipCode" id="ZipCode" value="{{ $patient->ZipCode }}" placeholder="ZipCode">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label">Province</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="province" id="Province" value="{{ $patient->province }}" placeholder="Province">
                      </div>
                    </div>
                 <hr>

                 <h3>Other: </h3>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label">  <i class="glyphicon glyphicon-leaf"> </i> Borth date: </label>
                      <div class="col-sm-9">
                      <input type="date" class="form-control" name="birthDate" id="BirthDate" value="{{ $patient->BirthDate }}" placeholder="Borth date:">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label"><i class="glyphicon glyphicon-road"></i> Distance To Center Km:</label>
                      <div class="col-sm-9">
                      <input type="number" class="form-control" name="distanceToCenterKm" id="DistanceToCenterKm" value="{{ $patient->DistanceToCenterKm }}" placeholder="Distance To Center Km:">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label"><i class="glyphicon glyphicon-user"></i> Number of Siblings:</label>
                      <div class="col-sm-9">
                      <input type="number" class="form-control" name="siblingsNr" id="SiblingsNr" value="{{ $patient->SiblingsNr }}" placeholder="Number of Siblings:">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label"><i class="glyphicon glyphicon-asterisk"></i> Entered By</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="enteredBy" id="EnteredBy" value="{{ $patient->EnteredBy }} " placeholder="Entered By">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label"><i class="glyphicon glyphicon-wrench"></i> Modified By</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name="modifiedBy" id="province" value="{{ $patient->modifiedBy }} " placeholder="Modified By">
                      </div>
                    </div>

               </div>
               <div class="col-md-6">
                 <h3>Parents Information:</h3>

                 <div class="form-group">
                    <label for="FileNo" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="parentLastName" id="ParentLastName" value="{{ $patient->ParentLastName }}" placeholder="Last Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="FileNo" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="parentFirstName" id="ParentFirstName" value="{{ $patient->ParentFirstName }}" placeholder="First Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="FileNo" class="col-sm-3 control-label">Partent Relationship</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="partentRelationship" id="PartentRelationship" value="{{ $patient->PartentRelationship }}" placeholder="Partent Relationship">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="FileNo" class="col-sm-3 control-label">Fathers Occupation</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="fathersOccupation" id="FathersOccupation" value="{{ $patient->FathersOccupation }}" placeholder="Fathers Occupation">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="FileNo" class="col-sm-3 control-label">Mothers Occupation</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="mothersOccupation" id="MothersOccupation" value="{{ $patient->MothersOccupation }}" placeholder="Mothers Occupation">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="FileNo" class="col-sm-3 control-label">Annual Income</label>
                    <div class="col-sm-9">
                    <input type="number" class="form-control" name="annualIncome" id="AnnualIncome" value="{{ $patient->AnnualIncome }}" placeholder="Annual Income">
                    </div>
                  </div>

               </div>
               <div class="col-xs-12">
                <button type="submit" class="btn btn-primary pull-right">Submit Change</button>
               </div>
        </div>

</form>
</div>
</div>
@endsection
