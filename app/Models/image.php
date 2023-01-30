<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    public $table="image";
    protected $fillable=[
        "file",
        "id",
        "name"
    ];
    protected $hidden=[
        "created_at",
        "updated_at"
    ];
}