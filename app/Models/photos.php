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
    public function gallery(){
        return $this->belongsTo(Gallery::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function tags(){
        return $this->belongsToMany(tag::class,'photo_tag','photo_id','tag_id');
    }
}
