<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //katere lahko vnasamo v bazo
    protected $fillable = [
        "title","content","published"
    ];

    //nastavimo mutator za cas s pomocjo carbona v bistuv set metoda
    public function setPublishedAttribute($date) {
        $this->attributes["published"] = Carbon::parse($date);
    }


    // set SQL cardinality .... Post has many commencts
    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
