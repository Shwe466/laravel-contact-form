<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        // Allow all users to submit the contact form
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'subject' => 'required|min:3|max:255',
            'message' => 'required'
        ];
    }

    /**
     * Get custom attribute names.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'お名前',
            'email' => 'メールアドレス',
            'subject' => '件名',
            'message' => 'お問い合わせ内容',
        ];
    }

    /**
     * Get the custom messages for validation errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'お名前は必須です。',
            'name.min' => '3文字以上で入力してください。',
            'email.required' => 'メールアドレスは必須です。',
            'email.email' => '正しい形式で入力してください。',
            'subject.required' => 'ご用件は必須です。',
            'subject.min' => '3文字以上で入力してください。',
            'message.required' => 'お問い合わせ内容は必須です。',
        ];
    }
}
