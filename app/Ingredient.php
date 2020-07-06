<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}
