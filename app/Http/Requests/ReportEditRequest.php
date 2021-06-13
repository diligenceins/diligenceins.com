<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ReportEditRequest extends FormRequest
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
        $reportID = $this->route('report');

        return [
            'title' => 'required|string',
            'slug' => ['required', 'string', 'alpha_dash', Rule::unique('reports')->ignore($reportID)],
            'sku' => ['required', 'string', 'alpha_num', Rule::unique('reports')->ignore($reportID)],
            'toc' => 'required|string',
            'description' => 'required|string',
            'published' => 'required|date',
            'single_price' => 'required|integer',
            'multiple_price' => 'required|integer',
            'corporate_price' => 'required|integer',
            'category_id' => 'required|integer',
            'status' => 'required|boolean',
            // meta
            // 'meta_title' => 'string|max:255',
            // 'meta_description' => 'string',
            // 'meta_keywords' => 'string',
        ];
    }
}
