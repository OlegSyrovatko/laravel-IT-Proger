<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // додати для всіх юзерів
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|min:2|max:50',
            'eml' => 'email|required|min:2|max:50',
            'pwd' => 'required',
            'ta' => 'required'
        ];
    }
/*
    public function attributes()
    {
        return [
            'username' => 'Ім\'я'
        ];
    }
    */
    public function messages()
    {
        return [
            // 'username.required' => __('messages.username_required'),
            'username.required' => 'Поле Ім\'я є обов\'язковим',
            'username.min' => 'Поле Ім\'я мінімум 2 симв.',
            'eml.required' => 'Поле email є обов\'язковим',
            'pwd.required' => 'Поле pwd є обов\'язковим',
            'ta.required' => 'Поле ta є обов\'язковим'
        ];
    }
}
