<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
       
            if(request()->isMethod('post')){
                return [
                    'name' => 'required|regex:/^[\pL\s\-]+$/u', 
                    'identificationdocument' => 'required|digits:10', 
                    'address' => 'nullable',
                    'phone' => 'nullable',
                    'email'=> 'nullable',
                    // 'registeredby'=>'required',
                    // 'status'=>'required',
                    //  'image'=>'nullable|mimes:jpg,jpeg,png|max:3000',
                ];
         }elseif(request()->isMethod('put')){
            return [
                'name' => 'required|regex:/^[\pL\s\-]+$/u', 
                    'identificationdocument' => 'required|digits:10', 
                    'address' => 'nullable',
                    'phone' => 'nullable',
                    'email'=> 'nullable',
                // 'registeredby'=>'required',
                //'status'=>'required',
                // 'image'=>'nullable|mimes:jpg,jpeg,png|max:3000',
            ];
        }

    }
        
}
