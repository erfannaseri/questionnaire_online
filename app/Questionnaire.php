<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    protected $guarded=[];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function serveys()
    {
        return $this->hasMany(Servey::class);
    }

    public function getRouteKeyName()
    {
        return 'title';
    }
}
