<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Intelijen extends FormRequest
{
    public function authorize(): bool
    {
        return false;
    }

    public function rules(): array
    {
        return [
            'no_nhi' => ['required', 'string', 'max:255', 'unique:intelijen,no_nhi'],
            'tanggal_nhi' => ['required', 'date'],
            'tempat' => ['required', 'string', 'max:255'],
            'jenis_barang' => ['required', 'string', 'max:255'],
            'jumlah_barang' => ['required', 'integer', 'min:1'],
            'kemasan' => ['nullable', 'string', 'in:liter,batang'],
            'intelijen_keterangan' => ['nullable', 'string']
        ];
    }
}