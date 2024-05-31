<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'location' => 'required|string',
			'name' => 'required|string',
			'parking_slots' => 'required',
			'max_people' => 'required',
			'person_id' => 'required',
			'access_id' => 'required',
        ];
    }
}
