<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryEditRequest extends FormRequest
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
        $categoryID = $this->route('category');
        
        return [
            'name' => 'required|string',
            'slug' => ['required', 'string', 'alpha_dash', Rule::unique('categories')->ignore($categoryID)],
            'description' => 'required'
        ];
    }
}
