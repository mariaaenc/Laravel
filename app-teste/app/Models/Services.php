<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    /* protected $fillable = ["title", "body"]; */
    protected $guarded = [];

    public function path(){
        return route("services.show", $this);
    }
}
