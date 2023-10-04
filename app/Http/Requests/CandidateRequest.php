<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'first_name'=>'string|required',
            'last_name'=>'string|required',
            'email'=>'email|required',
            'career_level'=>'string|required',
            'job_major'=>'string|required',
            'years_of_experience'=>'integer|required',
            'degree_type'=>'string|required',
            'skills'=>'array|required',
            'nationality'=>'string|required',
            'city'=>'string|required',
            'salary'=>'float|required',
            'gender'=>'string|required|in:Male,Female,Not Specified',

        ];
    }
}
