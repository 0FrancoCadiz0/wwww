<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NuevoLibroRequest extends FormRequest
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
            'titulo' => 'required',
            'precio' => 'required',
            'ISBN' => 'required',
            'edicion' => 'required',
            'stock' => 'required|numeric',
            'clasificacion' => 'required',
            'autor' => 'required',
            'idioma' => 'required',
            'editorial' => 'required',
            'genero' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'titulo.required' => 'El campo título es obligatorio.',
            'precio.required' => 'El campo precio es obligatorio.',
            'precio.numeric' => 'El precio debe ser un número.',
            'ISBN.required' => 'El campo ISBN es obligatorio.',
            'edicion.required' => 'El campo edición es obligatorio.',
            'stock.required' => 'El campo stock es obligatorio.',
            'stock.numeric' => 'El stock debe ser un número.',
            'clasificacion.required' => 'El campo clasificacion es obligatorio.',
            'autor.required' => 'El campo autor es obligatorio.',
            'editorial.required' => 'El campo editorial es obligatorio.',
            'idioma.required' => 'El campo idioma es obligatorio.',
            'genero.required' => 'El campo genero es obligatorio.',
            // Define mensajes personalizados aquí
        ];
    }
}
