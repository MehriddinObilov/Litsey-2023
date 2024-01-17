<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class activeteacher extends Model
{
    use HasFactory;
    protected $fillable = ['text','title','image','tel','telegram','select'];
}
