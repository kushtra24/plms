@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <h1 style="display: inline-block;">Add new Patient</h1>     

 <form method="POST" action="/patients" class="form-horizontal" enctype="multipart/form-data" >
  {{ csrf_field() }}
     <div class="patients-overview">
             <p style=" color: orange; text-align: right;"><strong>Notice: </strong>All Orange fields are mandatory</p>
               <div class="col-md-3 col-sm-3 col-xs-6 col-xs-offset-3 col-sm-offset-0">
                  <div class="thumbnail patientImage">
                    <img src="{{ asset('images/avatar-default.png') }}"  id="imediateImage" alt="avater">
                      <label for="patientImage"><i class="glyphicon glyphicon-camera patientImage-upload" for="patientImage"></i></label>
                      <input type="file" id="patientImage" name="patientImage" style="display: none;" onchange="readURL(this);"><span id="filename"></span>
                  </div>
               </div>

            <div class="col-md-8 col-sm-8 col-xs-12">

                <div class="form-group">
                  <label for="FileNo" class="col-sm-3 control-label mandatory-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control mandatory" name="lastName" id="LastName" placeholder="Last Name">
                    </div>
                </div>

                <div class="form-group">
                  <label for="FileNo" class="col-sm-3 control-label mandatory-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control mandatory" name="firstName" id="FirstName" placeholder="First name">
                    </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-sm-3 mandatory-label"> Gender</label>
                   <div class="col-sm-9">
                        <div class="form-check col-sm-6">
                          <label class="form-check-label">
                            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="F"> Female
                          </label>
                        </div>

                        <div class="form-check col-sm-6">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="M" > Male
                            </label>
                        </div>
                  </div>
                </div>{{--form-group--}}

                <div class="form-group">
                  <label for="FileNo" class="col-sm-3 control-label mandatory-label">File No.</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control mandatory" name="fileNo" id="FileNo" placeholder="Patients File number">
                   </div>
                </div>{{--form-group--}}

                <hr>

                <div class="form-group">
                  <label for="FileNo" class="col-sm-3 control-label mandatory-label">Institution Id:</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control mandatory" name="institutionId" id="InstitutionId" placeholder="Institution Id:">
                  </div>
                </div>{{--form-group--}}
             </div><!-- col-md-8 -->
    </div><!-- patients-overview -->
<hr>
        <div class="patients-overview">
               <div class="col-md-6">
                 <h3>Contact: </h3>
                   <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label"> <i class="glyphicon glyphicon-earphone"></i> Telephone</label>
                      <div class="col-sm-9">
                      <input type="number" class="form-control" name="telephone" id="Telephone" placeholder="Telephone">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label mandatory-label"> <i class="glyphicon glyphicon-home"></i>  Address</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control mandatory" name="address" id="Address" placeholder="Address">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label mandatory-label">City</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control mandatory" name="city" id="City" placeholder="City">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label ">ZipCode</label>
                      <div class="col-sm-9">
                      <input type="number" class="form-control" name="zipCode" id="ZipCode" placeholder="ZipCode">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label mandatory-label">State / Province</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control mandatory" name="province" id="Province" placeholder="Province">
                      </div>
                    </div>
                 <hr>

                 <h3>Other: </h3>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label mandatory-label">  <i class="glyphicon glyphicon-leaf"> </i> Birth date: </label>
                      <div class="col-sm-9">
                      <input type="date" class="form-control mandatory" name="birthDate" id="BirthDate" placeholder="Borth date:">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label"><i class="glyphicon glyphicon-road"></i> Distance To Center (Km):</label>
                      <div class="col-sm-9">
                      <input type="number" class="form-control" name="distanceToCenterKm" id="DistanceToCenterKm" placeholder="Distance To Center Km:">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label"><i class="glyphicon glyphicon-user"></i> Number of Siblings:</label>
                      <div class="col-sm-9">
                      <input type="number" class="form-control" name="siblingsNr" id="SiblingsNr" placeholder="Number of Siblings:">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label"><i class="glyphicon glyphicon-asterisk"></i> Entered By</label>
                      <div class="col-sm-9">
                      <input type="number" class="form-control" name="enteredBy" id="EnteredBy" placeholder="Entered By">
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="FileNo" class="col-sm-3 control-label"><i class="glyphicon glyphicon-wrench"></i> Modified By</label>
                      <div class="col-sm-9">
                      <input type="number" class="form-control" name="modifiedBy" id="province" placeholder="Modified By">
                      </div>
                    </div>

               </div>
               <div class="col-md-6">
                 <h3>Parents Information:</h3>

                 <div class="form-group">
                    <label for="FileNo" class="col-sm-3 control-label mandatory-label">Last Name</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control mandatory" name="parentLastName" id="province" placeholder="Last Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="FileNo" class="col-sm-3 control-label mandatory-label">First Name</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control mandatory" name="parentFirstName" id="ParentFirstName" placeholder="First Name">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="FileNo" class="col-sm-3 control-label mandatory-label">Partent Relationship</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control mandatory" name="partentRelationship" id="PartentRelationship" placeholder="Partent Relationship">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="FileNo" class="col-sm-3 control-label">Fathers Occupation</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="fathersOccupation" id="FathersOccupation" placeholder="Fathers Occupation">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="FileNo" class="col-sm-3 control-label">Mothers Occupation</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="mothersOccupation" id="MothersOccupation" placeholder="Mothers Occupation">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="FileNo" class="col-sm-3 control-label">Annual Income</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="annualIncome" id="AnnualIncome" placeholder="Annual Income">
                    </div>
                  </div>

               </div>
               <div class="col-xs-12">
                <button type="submit" class="btn btn-primary pull-right">Submit</button>
               </div>
        </div>

</form>

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

@section('javascriptSection')
<script>
    $("input[id='patientImage']").change(function (e) {
        var $this = $(this);
        $this.next().html($this.val().split('\\').pop());
    });

//Show image imediately
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imediateImage')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection

