<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'title_eng' => 'required|max:255|unique:posts',
            'title_ar' => 'required|max:255|unique:posts',
            'body_eng' => 'required|max:1000',
            'body_ar' => 'required|max:1000',
            'category_id' => 'required|numeric',
            'photo' => 'required|image|mimes:png,jpg,jpeg|max:2040',
        ];
    }
}
