<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SaveProjectRequest extends FormRequest
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
            'category_id' => ['required' , 'exist:categories,id'],
            'title' => 'required',
            'url' => [
                    'required' ,
                    Rule::unique('projects')->ignore($this->route('project'))],
            'description' => 'required',
            'image' => [
                $this->route('projects') ? '' : 'required',
                $this->route('projects') ? '' : 'image',
                $this->route('projects') ? '' : 'max:2000',
            ],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El Proyecto necesita un titulo',
            'url.required' => 'El Proyecto necesita una url',
            'description.required' => 'El Proyecto necesita una descripcion',
            
        ];
    }
}
