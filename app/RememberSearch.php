<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RememberSearch extends Model
{
    
    protected $table = 'remember_searches';
    protected $hidden = [ 'created_at', 'updated_at',];
}
