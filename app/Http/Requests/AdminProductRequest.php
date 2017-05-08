<?php

namespace Delivery\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminProductRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(){
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(){
        return ['category_id' => 'required', 'name' => 'required|min:3', 'description' => 'required|min:10', 'price' => 'required|'];
    }
}
