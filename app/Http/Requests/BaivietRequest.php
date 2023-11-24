<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BaivietRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'ten_bai_viet' => 'required|string|max:255',
            'mo_ta_ngan' => 'required|string|max:500',
            'ma_khach_hang' => 'required',
            'hinh_anh' => 'required',
            'noi_dung' => 'required',
            'rating' => 'required',
            'hien_thi' => 'required',

        ];
    }
    public function messages()
    {
        return[
            'ten_bai_viet.required'    => 'Tiêu đề không được bỏ trống',
            'mo_ta_ngan.email'       => 'Mô tả ngắn không đúng định dạng',
            'noi_dung.required' => 'Nội dung không được bỏ trống',
            
        ];
    }
}
