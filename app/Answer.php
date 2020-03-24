<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $guarded=[];

    public function Questions()
    {
        return $this->belongsTo(Question::class);
    }

    public function responses()
    {
        return $this->hasMany(SurveyResponse::class);
    }
}
