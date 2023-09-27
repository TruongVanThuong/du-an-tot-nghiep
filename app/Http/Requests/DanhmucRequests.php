<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DanhmucRequests extends FormRequest
{


    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'ten_danh_muc' => 'required',
        ];
    }

    public function message()
    {
        return [
            "ten_danh_muc.required" => "ten danh mục không được bỏ trống",
        ];
    }

}