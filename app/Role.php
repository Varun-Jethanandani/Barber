<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "roles";

    public $primaryKey = 'id';
    // TimeStamps
    public $timestamps = 'true';  
    // Owner of this post
}
