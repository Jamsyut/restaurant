<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;


    protected $fillable = [
        'nama_kategori',
    ];

    // Relasi ke tabel menu
    public function menus()
    {
        return $this->hasMany(Menu::class, 'id_category', 'id');
    }
}
