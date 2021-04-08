<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Container extends Model
{
    protected $bindings = [];

    public function bind($key, $value){
        $this->bindings[$key] = $value;
    }
}

