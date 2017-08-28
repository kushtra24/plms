<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;
use App\Http\Requests\PatientsRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\UploadedFile;
use Carbon\Carbon;


class patientsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

    	$patients = Patient::all();

    	return view('patients.index', compact('patients'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($patientId) {
        $patient = Patient::find($patientId);

        $next = Patient::where('id', '>', $patientId)->min('id');
        $prev = Patient::where('id', '<', $patientId)->max('id');

    	return view('patients.show', compact('patient', 'next', 'prev'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($patientId) {
        
        $patient = Patient::find($patientId);

        return view('patients.edit', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PatientsRequest $request, $id)
    {
        //Updating the fields to the database based on the id
        $patient = Patient::find($id);

        //image
        if($request->hasFile('patientImage')){
            $path = $request->patientImage->store('public/avatars','public');
            $patient->profilePhoto = $path;
            $patient->save();
        }

        $patient->FileNo = $request['fileNo'];
        $patient->InstitutionId = $request['institutionId'];
        $patient->LastName = $request['lastName'];
        $patient->FirstName = $request['firstName'];
        $patient->BirthDate = $request['birthDate'];
        $patient->Gender = $request['gender'];
        $patient->City = $request['city'];
        $patient->Address = $request['address'];
        $patient->Province = $request['province'];
        $patient->ZipCode = $request['zipCode'];
        $patient->Telephone = $request['telephone'];
        $patient->ParentLastName = $request['parentLastName'];
        $patient->ParentFirstName = $request['parentFirstName'];
        $patient->PartentRelationship = $request['partentRelationship'];
        $patient->DistanceToCenterKm = $request['distanceToCenterKm'];
        $patient->SiblingsNr = $request['siblingsNr'];
        $patient->FathersOccupation = $request['fathersOccupation'];
        $patient->MothersOccupation = $request['mothersOccupation'];
        $patient->AnnualIncome = $request['annualIncome'];
        $patient->modifiedBy = $request['modifiedBy'];

        $patient->save();

        return view('patients.show', compact('patient'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

    	return view('patients.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientsRequest $request){
        
         // adding the form of the fields, to the database

    	$storePatient = new Patient;

        if($request->hasFile('patientImage')){
            $path = $request->patientImage->store('public/avatars','public');
            $storePatient->profilePhoto = $path;
        }

        $storePatient->FileNo = $request->input('fileNo');
    	$storePatient->InstitutionId = $request['institutionId'];
        $storePatient->LastName = $request['lastName'];
        $storePatient->FirstName = $request['firstName'];
        $storePatient->BirthDate = $request['birthDate'];
        $storePatient->Gender = $request['gender'];
        $storePatient->City = $request['city'];
        $storePatient->Address = $request['address'];
        $storePatient->Province = $request['province'];
        $storePatient->ZipCode = $request['zipCode'];
        $storePatient->Telephone = $request['telephone'];
        $storePatient->ParentLastName = $request['parentLastName'];
        $storePatient->ParentFirstName = $request['parentFirstName'];
        $storePatient->PartentRelationship = $request['partentRelationship'];
        $storePatient->DistanceToCenterKm = $request['distanceToCenterKm'];
        $storePatient->SiblingsNr = $request['siblingsNr'];
        $storePatient->FathersOccupation = $request['fathersOccupation'];
        $storePatient->MothersOccupation = $request['mothersOccupation'];
        $storePatient->AnnualIncome = $request['annualIncome'];
        $storePatient->EnteredBy = $request['enteredBy'];
        $storePatient->modifiedBy = $request['modifiedBy'];

        $storePatient->save();

        return redirect('/patients');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            $patients = Patient::find($id);

            $patients->delete();

            return back();
    }


}// class end


