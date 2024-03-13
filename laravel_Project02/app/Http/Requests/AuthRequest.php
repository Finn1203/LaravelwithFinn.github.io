<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules():array
    {
        return [
            'email' => 'required|email|max:255',
            'password' => 'required',
        ];
    }

    public function messages():array
    {
        return [
            'email.required' =>'Bạn chưa nhập vào email.',
            'email.email'=>'Email chưa đúng định dạng. Ví dụ: abc@gmail.com',
            'password.required' =>'Bạn chưa nhập vào mật khẩu.'
        ];
    }
}
