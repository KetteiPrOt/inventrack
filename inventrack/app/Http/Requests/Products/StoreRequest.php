<?php

namespace App\Http\Requests\Products;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255|unique:products,name',
            'image' => 'nullable|file|image|max:50',
            'min_stock' => 'required|integer|min:1|max:255',
            'units_numbers' => 'required|array|min:1|max:20',
            'units_numbers.*' => 'required|integer|min:1|max:255',
            'prices' => 'required|array|min:1|max:20',
            'prices.*' => 'decimal:0,6|min:0.000001|max:9999.999999|distinct:strict',
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => 'nombre',
            'image' => 'imagen',
            'min_stock' => 'stock mínimo',
            'units_numbers' => 'numeros de unidades',
            'units_numbers.*' => 'numero de unidad #:position',
            'prices' => 'precios',
            'prices.*' => 'precio #:position',
        ];
    }
}
