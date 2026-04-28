<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    /**
     * Kolom yang dapat diisi secara massal.
     * Sesuai dengan form pendaftaran (nama, nim, email, angkatan).
     */
    protected $fillable = [
        'NAMA',
        'NIM',
        'EMAIL',
        'ANGKATAN',
        'STATUS', // Default: 'pending' (diatur di migration)
    ];

    /**
     * Opsional: Casting status jika ingin menggunakan label warna di view.
     */
    public function getStatusLabelAttribute()
    {
        return [
            'pending' => 'bg-orange-100 text-orange-600',
            'aktif'   => 'bg-green-100 text-green-600',
            'alumni'  => 'bg-gray-100 text-gray-600',
        ][$this->status] ?? 'bg-gray-100 text-gray-800';
    }
}