<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //katere atribute lahko vnasamo v bazo
    protected  $fillable = [
        "content","published"
    ];

    //mutator for time
    public function setPublishedAttribute( $date) {
        $this->attributes["published"] = Carbon::parse($date);
    }


    public function posts() {
        return $this->belongsTo('App\Post');
    }
}
