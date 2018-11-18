<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'question_text',
    ];
    public function option(){
        return $this->hasMany('App\Option');
    }
}
