<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
    public function messages()
    {
       return [
            'name.required'=>'يجد ادخال الأسم من فضلك',
            'email.required'=>'يجد ادخال الايميل من فضلك',
            'password.required'=>'يجد ادخال كلمه المرور من فضلك',


        ];
    }
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',


        ];
    }


}
