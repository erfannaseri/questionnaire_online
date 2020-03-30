<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Questionnaire extends Model
{
    protected $guarded=[];

    public function urlQuestionnaire()
    {
        return url('surveys/'.$this->title);
    }

    public function publicPath()
    {
        return url('surveys/'.$this->id.'-'.Str::slug($this->title));
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }

    public function getRouteKeyName()
    {
        return 'title';
    }

    public function setDateExamAttribute($value)
    {
        return $this->attributes['date-exam']=jDate($value);
    }
    public function setStartExamAttribute($value)
    {
        return $this->attributes['start-exam']=jDate($value);
    }
    public function setEndExamAttribute($value)
    {
        return $this->attributes['end-exam']=jDate($value);
    }
}
