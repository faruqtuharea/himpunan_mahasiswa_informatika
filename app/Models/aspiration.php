<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspiration extends Model
{
    use HasFactory;

    /**
     * Kolom yang dapat diisi.
     */
    protected $fillable = [
        'subjek',
        'pesan',
        'is_anonymous',
        'nama_pengirim',
    ];

    /**
     * Casting kolom is_anonymous menjadi boolean.
     * Ini memudahkan saat pengecekan di Blade template.
     */
    protected $casts = [
        'is_anonymous' => 'boolean',
    ];

    /**
     * Aksesor untuk mendapatkan nama pengirim secara aman.
     */
    public function getDisplayNameAttribute()
    {
        return $this->is_anonymous ? 'Rahasia (Anonim)' : ($this->nama_pengirim ?? 'Umum');
    }
}