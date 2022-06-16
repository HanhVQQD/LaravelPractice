<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Request_ControllerAct2_Request extends FormRequest
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
            'danhmuc' => 'required | max: 255 | string',
            'spnb' => 'required | max: 255 | string',
            'ten' => 'string',
            'gia' => 'numeric',
            'giacu' => 'numeric',
            'anh' => 'required | filled | image | mimes:jpeg,png,jpg,gif,svg'
        ];
    }

    public function messages () {
        return [
            'danhmuc.string' => 'Vui lòng điền danh mục cho đúng',
            'danhmuc.required' => 'Vui lòng điền danh mục',
            'spnb.string' => 'Vui lòng điền sản phẩm nổi bật cho đúng',
            'spnb.required' => 'Vui lòng điền sản phẩm nổi bật',
            'ten.string' => 'Vui lòng điền tên cho đúng',
            'gia.numeric' => 'Vui lòng kiểm tra lại giá',
            'giacu.numeric' => 'Vui lòng kiểm tra lại giá cũ',
            'anh.string' => 'Vui lòng nhập và kiểm tra lại tệp',
        ];
    }
}
