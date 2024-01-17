<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Gallery;

class category extends Model
{
    use HasFactory;

    protected $fillable  = ['name'];

    public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }
}
