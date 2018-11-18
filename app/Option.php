<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'option_text','option_point_value',
    ];
    public function question(){
        return $this->belongsTo('App\question');
    }
}
