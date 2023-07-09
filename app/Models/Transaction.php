<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice',
        'total_pembayaran',
        'id_game',
    ];

    public function game()
    {
        return $this->belongsTo(Game::class, 'id_game');
    }

}
