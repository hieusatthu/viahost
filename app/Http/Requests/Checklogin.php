<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Checklogin extends FormRequest
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
            //
            'taikhoan'=>'required|unique:via|min:10|max:20',
            'matkhau' => 'required|min:4'
        ];
    }

    public function messages()
    {
        return [
            'taikhoan.required' => 'Vui lòng nhập tài khoản',
            'taikhoan.unique'   => 'Đã xảy ra lỗi!',
            'taikhoan.min'      => 'Vui lòng nhập tài khoản',
            'taikhoan.max'      => 'Vui lòng nhập tài khoản',
            'matkhau.required'  => 'Vui lòng nhập mật khẩu',
            'matkhau.min'       => 'Vui lòng nhập mật khẩu',
        ];
    }
}
