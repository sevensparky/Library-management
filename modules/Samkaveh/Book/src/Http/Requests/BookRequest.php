<?php

namespace Samkaveh\Book\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|min:3|unique:books', 
            'print_series' => 'required|min:3',
            'publishers_name' => 'required|min:3',
            'head_id' => 'required|min:3',
            'publication_details' => 'required|min:3',
            'ISBN' => 'required|min:10|unique:books',
            'price' => 'required|numeric',
            'image' => 'required|mimes:jpg,png,jpeg',
            'pages' => 'required|numeric',
            'weigth' => 'required|numeric',
            'authors' => 'required',
            'subjects' => 'required',
            'description' => 'nullable',
            'count' => 'required|numeric',
        ];
    }
}
