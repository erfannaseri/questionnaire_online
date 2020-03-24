<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SurveyResponse extends Model
{
    protected $guarded=[];

    protected $fillable =[
        'survey_id','answer_id','question_id'
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

}
