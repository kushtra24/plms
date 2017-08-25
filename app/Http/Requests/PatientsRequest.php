<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                'fileNo' => 'required',
                'institutionId' => 'required',
                'lastName' => 'required',
                'firstName' => 'required',
                'gender' => 'required',
                'address' => 'required',
                'city' => 'required',
                'province' => 'required',
                'birthDate' => 'required',
                'parentLastName' => 'required',
                'parentFirstName' => 'required',
                'partentRelationship' => 'required'
        ];
    }
}
