<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penunjang extends Model
{
    use HasFactory;
    protected $table = 'penunjang';

    protected $fillable = [
        'id_survey',
        'feedback'
    ];

    public function survey(){
        return $this->belongsTo(Survey::class, 'id_survey');
    }
}
