<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MuseumRequest extends FormRequest
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
            'name' => 'required|min:3|max:255',
            'coordinates' => 'min:3|max:255',
            'state' => 'min:3|max:255',
            'image' => 'min:3|max:255',
            'theme' => 'min:3|max:255',
            'price' => 'min:3|max:255',
            'ratings' => 'min:3|max:255',
            'rooms' => 'min:3|max:255',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'il nome è un campo obbligatorio',
            'coordinates.min' => 'il nome deve contenere almeno :min caratteri',
            'coordinates.max' => 'il nome può contenere :max caratteri',
            'state.max' => 'il nome può contenere :max caratteri',
            'state.min' => 'il nome deve contenere almeno :min caratteri',
            'image.max' => 'il nome può contenere :max caratteri',
            'image.min' => 'il nome deve contenere almeno :min caratteri',
            'theme.max' => 'il nome può contenere :max caratteri',
            'theme.min' => 'il nome può contenere :max caratteri',
            'name.min' => 'il nome deve contenere almeno :min caratteri',
            'name.max' => 'il nome può contenere :max caratteri',
            'price.min' => 'il nome deve contenere almeno :min caratteri',
            'price.max' => 'il nome può contenere :max caratteri',
            'ratings.min' => 'il nome deve contenere almeno :min caratteri',
            'ratings.max' => 'il nome deve contenere almeno :min caratteri',
            'rooms.max' => 'il nome deve contenere almeno :min caratteri',
            'rooms.min' => 'il nome deve contenere almeno :min caratteri',


        ];
    }
}
