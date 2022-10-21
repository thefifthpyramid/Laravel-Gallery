<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photos extends Model
{
    use HasFactory;
    protected $fillable = [
        'gallery_id',
        'title',
        'photo',
        'description',
    ];
    public function photo()
    {
        return $this->belongsTo(Gallery::class);
    }
}
