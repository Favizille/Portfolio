<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "category",
        "client",
        "date",
        "github",
        "url",
        "description",
        "image1",
        "image2",
        "image3",

    ];
}
