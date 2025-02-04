<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PenindakanRequest extends FormRequest
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
        return [
            'no_sbp' => ['required', 'string', 'max:255', 'unique:penindakan,no_sbp'],
            'tanggal_sbp' => ['required', 'date'],
            'lokasi_penindakan' => ['required', 'string'],
            'pelaku' => ['required', 'string', 'max:255'],
            'uraian_bhp' => ['required', 'string'],
            'jumlah' => ['required', 'integer', 'min:1'],
            'kemasan' => ['nullable', 'string', 'in:liter,batang'],
            'perkiraan_nilai_barang' => ['required', 'numeric', 'min:0'],
            'potensi_kurang_bayar' => ['required', 'numeric', 'min:0'],
        ];
    }

    public function attributes(): array
    {
        return [
            'no_sbp' => 'No SBP',
            'tanggal_sbp' => 'Tanggal SBP',
            'lokasi_penindakan' => 'Lokasi Penindakan',
            'uraian_bhp' => 'Uraian BHP',
            'perkiraan_nilai_barang' => 'Perkiraan Nilai Barang',
            'potensi_kurang_bayar' => 'Potensi Kurang Bayar',
        ];
    }
}
