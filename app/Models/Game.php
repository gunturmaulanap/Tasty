<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [

        'nama',
        'deskripsi',
        'image',
        'harga',
        'processor',
        'memory',
        'storage',
        'direct_x',
        'graphics',
        'os'
    ];

    use HasFactory;

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_game');
    }
}
