<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UsersRequest extends FormRequest
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
        $ignore = !empty($request['user_id']) ? ',' . $request['user_id'] : '';
        return [
            'name'=>'required|min:2|max:70',
            'email'=>'required|email|unique:users,email' .$ignore,
            'category_title'=>'required|min:2|max:100',
            'password'=>'required|min:6|max:20|confirmed',
        ]; 
    }

    
    
    
}