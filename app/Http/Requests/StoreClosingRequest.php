<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StoreClosingRequest extends FormRequest
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
        // dd($this->all());
        $data = [];
        for($i = 1; $i <= $this->input('counter'); $i++) {
            $data['nama-' . $i] = 'required';
            $data['email-' . $i] = 'required|email|unique:closings,email';
        };

        $data['no_identitas'] = 'required';
        $data['no_hp'] = 'required';
        $data['domisili'] = 'required';
        $data['kartu_identitas'] = 'required|file|max:2000|mimes:pdf';

        return $data;
    }
}
