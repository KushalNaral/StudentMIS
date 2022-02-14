<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Student extends Model
{
    use HasFactory;


    protected $guarded = [];



    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }


    /*public function user()
    {
        return $this->hasOne(User::class);
    }*/


    public function path()
    {
        return "/{$this->faculty->slug}/{$this->slug}";
    }

    public function setSlugAttribute($value)
    {
        if (static::whereSlug($slug = Str::slug($value))->exists()) {
            $slug = "{$slug}-{$this->id}";
        }

        $this->attributes['slug'] = $slug;
    }




}
