<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function addedBy()
    {
        return $this->belongsTo(User::class);
    }
}
