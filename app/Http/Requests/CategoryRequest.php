<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CategoryRequest extends FormRequest
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
    public function rules(Request $request)
    {
        $ignore = !empty($request['item_id']) ? ',' . $request['item_id'] : '';
        return [
            'description'=>'required|min:2|max:50',
            'url'=>'required|min:2|max:100|regex:/^[a-z\d-]+$/|unique:categories,category_url' .$ignore,
            'category_title'=>'required|min:2|max:100',
            'category_image' => 'image|max:5242880',
        ]; 
    }
}
