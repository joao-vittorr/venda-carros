<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdvertRequest extends FormRequest
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
        $rules = [

            "title" => 'required|max:200',
            'type' => 'required|max:200', 
            "brand"=> 'required|max:200',
            "model"=> 'required|max:200',
            "color"=> 'required|max:200',
            "mult"=> 'required|max:200',
            "manuf_year"=> 'required|max:200',
            "mileage"=> 'required|max:200',
            "price" => 'required|max:50',
            "description" => 'required|max:500',
        ];

        if ($this->method() == "POST"){
            $rules['photo'] = 'required|image|max:1024';
        } else
        if ($this->method() == "PUT"){
            $rules['photo'] = 'image|max:1024';
        }

        return $rules;
    }

}
