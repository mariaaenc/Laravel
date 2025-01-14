<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;
    /* protected $fillable = ["title", "body"]; */
    protected $guarded = [];

    public function path(){
        return route("services.show", $this);
    }

    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }

    public function tags(){
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
