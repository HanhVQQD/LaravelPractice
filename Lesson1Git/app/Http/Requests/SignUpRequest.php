<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
            'name' => 'required | max: 255 | string',
            'age' => 'numeric',
            'date' => 'string',
            'phone' => 'numeric',
            'web' => 'string',
            'address' => 'string'
        ];
    }

    public function messages () {
        return [
            'name.string' => 'Vui lòng điền tên cho đúng',
            'name.required' => 'Vui lòng điền tên',
            'date.string' => 'Vui lòng điền lại ngày tháng',
            'phone.numeric' => 'Vui lòng kiểm tra lại số điện thoại',
            'web.string' => 'Vui lòng nhập và kiểm tra lại ký tự',
            'address.string' => 'Vui lòng nhập lại địa chỉ'
        ];
    }
}





