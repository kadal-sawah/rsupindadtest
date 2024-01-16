<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farmasi extends Model
{
    use HasFactory;
    protected $table = 'farmasi';

    protected $fillable = [
        'id_survey',
        'feedback'
    ];

    public function survey(){
        return $this->belongsTo(Survey::class, 'id_survey');
    }
}
