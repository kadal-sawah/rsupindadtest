<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perawat extends Model
{
    use HasFactory;
    protected $table = 'perawat';

    protected $fillable = [
        'id_survey',
        'feedback'
    ];

    public function survey(){
        return $this->belongsTo(Survey::class, 'id_survey');
    }
}
