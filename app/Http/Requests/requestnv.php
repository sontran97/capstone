<?php

namespace App\Http\Requests;
use Illuminate\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class requestnv extends FormRequest
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
            'ten' => 'require|min:6',
            'email'=> 'require|email'
        ];
    }
    public function message(){
      return [
          'ten.require' => 'please write ten',
          'email.require' => 'please write email',
          'ten.min:6'=> 'please input more 6 word ',
          'email.email'=> 'please input email have @gmail.com'
      ];
    }
}
