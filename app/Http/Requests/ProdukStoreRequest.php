<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdukStoreRequest extends FormRequest
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
            'nama_produk' => 'required|min:5|max:191',
            'id_kategori' => 'required',
            'harga' => 'required|integer',
            'deskripsi' => 'required|min:5|max:191',
            'gambar' => 'required|image|mimes:png,jpg,jpeg'
        ];
    }

    public function messages()
    {
        return [
            'nama_produk.required' => 'Nama produk wajib diisi!',
            'nama_produk.min' => 'Nama produk minimal 5 karakter!',
            'nama_produk.max' => 'Nama produk maksimal 191 karakter!',
            'id_kategori.required' => 'Kategori wajib diisi!',
            'harga.required' => 'Harga wajib diisi!',
            'harga.integer' => 'Harga wajib angka!',
            'deskripsi.required' => 'Deskripsi wajib diisi!',
            'deskripsi.min' => 'Deskripsi minimal 5 karakter',
            'deskripsi.max' => 'Deskripsi maksimal 191 karakter!',
            'gambar.required' => 'Gambar wajib diisi!',
            'gambar.image' => 'Gambar harus tipe gambar!',
            'gambar.mimes' => 'Gambar harus berekstensi png, jpg, jpeg'
        ];
    }
}
