<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;


    protected $guarded = [];


    public function students()
    {

        return $this->hasMany(Student::class, 'faculty_id');

    }

    public function modules()
    {

        return $this->hasMany(Modules::class);
    }

    public function getRouteKeyName()
    {
        return "slug";
    }


}
