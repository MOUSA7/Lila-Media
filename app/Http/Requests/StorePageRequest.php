<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePageRequest extends FormRequest
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
            'title' => 'required |max:150',
            'main_image' => 'required |image |mimes:png,jpg',
            'sub_title' => 'nullable |string',
            'gallery' => 'nullable |array ',
            'description' => 'nullable',
            'tags' => 'nullable |string',
            'sub_menus_id'=>'nullable | string',
            'menu_id' => 'nullable|string'


        ];
    }
}
