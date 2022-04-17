<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Respon extends Model
{
    use HasFactory;

    protected $table = 'respons';

    protected $fillable = [
        'admin_id', 'keluhan_id', 'respon'
    ];

    public function admin() {
        return $this->belongsTo(Admin::class);
    }

    public function keluhan() {
        return $this->belongsTo(Keluhan::class);
    }
}
