<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel' => ['required', 'numeric', 'digits_between:10,11'],
        ];

    }

    public function messages()
    {
        return [
            'name.required' => 'お名前は必須です。',
            'name.string' => '名前を文字列で入力してください',
            'name.max' => '名前を255文字以下で入力してください',
            'email.required' => 'メールアドレスは必須です。',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => 'メールアドレスの形式が正しくありません。',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'tel.required' => '電話番号は必須です。',
            'tel.numeric' => '電話番号は数字で入力してください。',
            'tel.digits_between' => '電話番号は10桁または11桁で入力してください。',
        ];
    }
}
