<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibroRequest extends FormRequest
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
            'imagen' => 'nullable|image|max:2048',
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
            'imagen.image' => 'El archivo debe ser una imagen.',
            'imagen.max' => 'La imagen no puede tener más de :max kilobytes.',
            // Define mensajes personalizados aquí
        ];
    }

}
