<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servey extends Model
{
    protected $guarded =[];

    protected $fillable=[
        ''
    ];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);

    }
}
