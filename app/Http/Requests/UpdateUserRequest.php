<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\User;

class UpdateUserRequest extends FormRequest
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
            'name' => 'required|string|min:2|max:30',
            'email' => ['required',Rule::unique(User::class,'email')->ignore($this->id)],
            'phone' => 'required|numeric|min:6',
            'avatar' =>   'nullable|image|dimensions:min_width=100,min_height=200|size:512|mimes:jpg,bmp,png',
            'user_token' =>'nullable',
            'provider_name' =>'nullable',
            'provider_id' =>'nullable',
        ];
    }
}