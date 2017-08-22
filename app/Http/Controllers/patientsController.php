<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Patient;

class patientsController extends Controller
{


    public function index() {

    	$patients = Patient::all();

    	return view('patients.index', compact('patients'));
    }


    public function show($patientId) {
        $patient = Patient::find($patientId);

        $next = Patient::where('id', '>', $patientId)->min('id');
        $prev = Patient::where('id', '<', $patientId)->max('id');

    	return view('patients.show', compact('patient', 'next', 'prev'));
    }


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
    public function update(Request $patient, $id)
    {

        $patient = Patient::find($id);

        $patient->FileNo = request('fileNo');
        $patient->InstitutionId = request('institutionId');
        $patient->LastName = request('lastName');
        $patient->FirstName = request('firstName');
        $patient->BirthDate = request('birthDate');
        $patient->Gender = request('gender', 2);
        $patient->City = request('city');
        $patient->Address = request('address');
        $patient->province = request('province');
        $patient->ZipCode = request('zipCode', 50);
        $patient->Telephone = request('telephone');
        $patient->ParentLastName = request('parentLastName');
        $patient->ParentFirstName = request('parentFirstName');
        $patient->PartentRelationship = request('partentRelationship', 50);
        $patient->DistanceToCenterKm = request('distanceToCenterKm');
        $patient->SiblingsNr = request('siblingsNr');
        $patient->FathersOccupation = request('fathersOccupation');
        $patient->MothersOccupation = request('mothersOccupation');
        $patient->AnnualIncome = request('annualIncome');
        $patient->EnteredBy = request('enteredBy');
        $patient->modifiedBy = request('modifiedBy');
        
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

    public function store(){
    	$storePatient = new Patient;

    	$storePatient->FileNo = request('fileNo');
    	$storePatient->InstitutionId = request('institutionId');
        $storePatient->LastName = request('lastName');
        $storePatient->FirstName = request('firstName');
        $storePatient->BirthDate = request('birthDate');
        $storePatient->Gender = request('gender', 2);
        $storePatient->City = request('city');
        $storePatient->Address = request('address');
        $storePatient->Province = request('province');
        $storePatient->ZipCode = request('zipCode', 50);
        $storePatient->Telephone = request('telephone');
        $storePatient->ParentLastName = request('parentLastName');
        $storePatient->ParentFirstName = request('parentFirstName');
        $storePatient->PartentRelationship = request('partentRelationship', 50);
        $storePatient->DistanceToCenterKm = request('distanceToCenterKm');
        $storePatient->SiblingsNr = request('siblingsNr');
        $storePatient->FathersOccupation = request('fathersOccupation');
        $storePatient->MothersOccupation = request('mothersOccupation');
        $storePatient->AnnualIncome = request('annualIncome');
        $storePatient->EnteredBy = request('enteredBy');
        $storePatient->modifiedBy = request('modifiedBy');

        $storePatient->save();

        return redirect('/patients');
    }
}// class end


