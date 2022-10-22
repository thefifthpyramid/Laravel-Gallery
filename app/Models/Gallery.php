<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'title',
        'cover',
        'description'
    ];
    public function user(){
        return $this->belongsTo(User::class,'id','user_id');
    }
    public function photos(){
        return $this->hasMany(photos::class,'gallery_id','id');
    }
}
