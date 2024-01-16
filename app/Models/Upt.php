<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upt extends Model
{
    use HasFactory;

    protected $table='upt';
    protected $fillable = [
        'nama_upt'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
