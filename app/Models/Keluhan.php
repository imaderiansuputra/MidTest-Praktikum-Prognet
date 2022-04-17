<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Keluhan extends Model
{
    use HasFactory;

    protected $table = 'keluhans';

    protected $fillable = [
        'user_id', 'judul', 'keluhan'
    ];

    public function respon() {
        return $this->hasMany(Respon::class, 'keluhan_id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
