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

    public function show() {
    	return view('patients.show');
    }



    public function create() {

       			 // $users = Patients::all(); // use a variable you want. for ex. $users from the model/user table on the databse, (see file: how to create a new crud), and the query/function you want to use. in this case show all from the table User.

    	return view('patients.create');
    }


    public function store()
    {
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


