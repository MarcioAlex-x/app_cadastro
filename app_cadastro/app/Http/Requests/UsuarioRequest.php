<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
                // 'nome'=>'required',
                // 'data_nasc'=>'required',
                // 'caf_cnpj'=>'required',
                // 'foto'=>'required',
                // 'nome_social'=>'required',
    
            
        ];
    }
}
