<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vids extends Model
{
    use HasFactory;

    protected $table = 'Vids';
    protected $fillables = [
        "Youtube_link",
        "Description",
        "Release Date",
        "Channel name",
    ];
}
