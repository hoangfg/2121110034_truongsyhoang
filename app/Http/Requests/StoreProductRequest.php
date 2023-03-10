<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name' => 'required|unique:brand|max:255|min:5|string',
            'category_id' => 'required',
            'brand_id' => 'required',
            'metakey' => 'required|min:5',
            'detail' => 'required|min:5',
            'metadesc' => 'required|min:5',
            'image' => 'image|mimes:png,jpg,jpeg|max:2048',
            'price' => 'required|numeric',
            'price_sale' => 'required|numeric|lte:price|gte:0',
            'qty' => 'required|numeric|between:1,1000',
        ];
    }
    public function messages()
    {
        $messages = [
            'required' => 'Bạn chưa điền vào đây'
        ];
        return [
            'name.required' => $messages['required'],
            'name.min' => 'Nhập ít nhất 5 ký tự',
            'name.string' => 'Tên phải là chuỗi chỉ chứa các ký tự chữ cái và số',
            'name.unique' => 'Tên đã được sử dụng, vui lòng sử dụng một tên khác',

            'category_id.required'=> 'Vui lòng chọn một giá trị trong danh sách.',
            'brand_id.required'=> 'Vui lòng chọn một giá trị trong danh sách.',

            'metakey.required' => $messages['required'],
            'metakey.min' => 'Nhập ít nhất 5 ký tự',

            'detail.required' => $messages['required'],
            'detail.min' => 'Nhập ít nhất 5 ký tự',

            'metadesc.required' => $messages['required'],
            'metadesc.min' => 'Nhập ít nhất 5 ký tự',

            'image.image' => 'Vui lòng tải lên một tệp hình ảnh.',
            'image.mimes' => 'Vui lòng tải lên một tệp hình ảnh có phần mở rộng hợp lệ (png,jpg,jpeg).',
            'image.max' => 'Kích thước tệp tải lên không được vượt quá 2048KB (2MB).',

            'price.required' => 'Vui lòng nhập giá',
            'price.numeric' => 'Vui lòng nhập giá hợp lệ',
            'price_sale.required' => 'Vui lòng nhập giá khuyến mãi',
            'price_sale.numeric' => 'Vui lòng nhập giá khuyến mãi hợp lệ',
            'price_sale.lte' => 'Giá khuyến mãi không được lớn hơn giá gốc',
            'price_sale.gte' => 'Giá khuyến mãi không được âm',
            'qty.required' => 'Vui lòng nhập số lượng sản phẩm',
            'qty.numeric' => 'Vui lòng nhập số lượng sản phẩm hợp lệ',
            'qty.between' => 'Số lượng sản phẩm phải nằm trong khoảng từ 1 đến 1000',
        ];
    }
}
