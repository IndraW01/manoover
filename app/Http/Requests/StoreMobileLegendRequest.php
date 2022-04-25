<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreMobileLegendRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_tim' => 'required',
            'email' => 'required|email',
            'nama_ketua_tim' => 'required|string',
            'no_hp' => 'required',
            'anggota1' => 'required|string',
            'anggota2' => 'required|string',
            'anggota3' => 'required|string',
            'anggota4' => 'required|string',
            'anggota5' => 'required|string',
            'cadangan1' => 'string|nullable',
            'kartu_identitas' => 'required|file|max:2000|mimes:pdf'
        ];
    }
}
