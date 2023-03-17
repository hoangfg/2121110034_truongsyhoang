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
            'name' => 'required|max:255|min:5|string',
            'category_id' => 'required',
            'brand_id' => 'required',
            'metakey' => 'required|min:5',
            'detail' => 'required|min:5|max:10000',
            'metadesc' => 'required|min:5|max:10000',
            'image' => 'required|array|max:5',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'price_buy' => 'required|numeric|digits_between:1,10',
            'price_sale' => 'required|numeric|lte:price_buy|gte:0|digits_between:1,10',
            'price' => 'required|numeric|digits_between:1,10',
            'qty' => 'required|numeric|between:1,1000',
            "date_begin"=> "required|date|before:date_end",
            "date_end"=> "required|date|after:date_begin"
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
            

            'category_id.required'=> 'Vui lòng chọn một giá trị trong danh sách.',
            'brand_id.required'=> 'Vui lòng chọn một giá trị trong danh sách.',

            'metakey.required' => $messages['required'],
            'metakey.min' => 'Nhập ít nhất 5 ký tự',

            'detail.required' => $messages['required'],
            'detail.min' => 'Nhập ít nhất 5 ký tự',
            'detail.max' => 'Nhập nhiều nhất :max ký tự',

            'metadesc.required' => $messages['required'],
            'metadesc.min' => 'Nhập ít nhất 5 ký tự',
            'metadesc.min' => 'Nhập nhiều nhất :max ký tự',

            'image.required' => 'Vui lòng nhập thêm 1 hình ảnh.',
            'image.max' => 'Bạn chỉ được phép tải lên tối đa :max ảnh',
            'image.*.image' => 'Tập tin tải lên phải là hình ảnh',
            'image.*.mimes' => 'Các ảnh chỉ được phép có định dạng: :values',
            'image.*.max' => 'Tập tin tải lên phải có kích thước tối đa là 2MB',

            'price_buy.required' => 'Vui lòng nhập giá',
            'price_buy.numeric' => 'Vui lòng nhập giá hợp lệ',
            'price_buy.digits_between' => 'Giá sản phẩm phải có độ dài từ :min đến :max chữ số',

            'price.required' => 'Vui lòng nhập giá',
            'price.numeric' => 'Vui lòng nhập giá hợp lệ',
            'price.digits_between' => 'Giá sản phẩm phải có độ dài từ :min đến :max chữ số',


            'price_sale.required' => 'Vui lòng nhập giá',
            'price_sale.numeric' => 'Vui lòng nhập giá hợp lệ',
            'price_sale.lte' => 'Giá khuyến mãi không được lớn hơn giá gốc',
            'price_sale.gte' => 'Giá khuyến mãi không được âm',
            'price_sale.digits_between' => 'Giá sản phẩm phải có độ dài từ :min đến :max chữ số',


            'qty.required' => 'Vui lòng nhập số lượng sản phẩm',
            'qty.numeric' => 'Vui lòng nhập số lượng sản phẩm hợp lệ',
            'qty.between' => 'Số lượng sản phẩm phải nằm trong khoảng từ 1 đến 1000',

            'date_begin.required' => 'Vui lòng nhập ngày bắt đầu.',
            'date_begin.date' => 'Ngày bắt đầu không hợp lệ.',
            'date_begin.before' => 'Ngày bắt đầu phải trước ngày kết thúc.',
            'date_end.required' => 'Vui lòng nhập ngày kết thúc.',
            'date_end.date' => 'Ngày kết thúc không hợp lệ.',
            'date_end.after' => 'Ngày kết thúc phải sau ngày bắt đầu.',
        ];
    }
}
