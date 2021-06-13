<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;
use Illuminate\Validation\Rule;

class UserEditRequest extends FormRequest
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
        $userID = $this->route('user');
        return [
            'name' => 'required|string',
            'email' => ['required', 'string', 'email', Rule::unique('users')->ignore($userID)],
            'password' => ['exclude_if:password_change_request,false', 'required', 'confirmed', Rules\Password::min(8)],
            'password_change_request' => 'required',
            'role_id' => 'required',
            'is_active' => 'required',
        ];
    }
}
