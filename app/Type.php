<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = 'types';
    protected $fillable = ['name'];
    protected $hidden = [
        'created_at', 'updated_at','is_active',
    ];
}
