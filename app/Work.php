<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table = "works";

    public function author_fk(){
        return $this->belongsTo(User::class, 'author');
    }
}
