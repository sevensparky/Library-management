<?php

namespace Samkaveh\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|min:3|string',
            'mobile' => 'required|digits_between:10,11|numeric',
            'father_name' => 'required|min:3|string',
            'national_code' => 'required|digits_between:10,11|numeric',
            'latest_evidence' => 'required|string',
            'email' => 'nullable|email|unique:users',
            'img_profile' => 'required|mimes:png,jpg,jpeg'
        ];
    }
}
