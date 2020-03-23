<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    protected $guarded =[];

    protected $fillable=[
        ''
    ];

    public function questionnaire()
    {
        return $this->belongsTo(Questionnaire::class);
    }
    public function responses()
    {
        return $this->hasMany(SurveyResponse::class);
    }
}
