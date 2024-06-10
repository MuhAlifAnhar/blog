<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title','kategori','slug','excerpt','body'];
    protected $with = ['kategori','penulis'];

    public function kategori(){
        return $this->belongsTo(kategori::class);
    }

    public function penulis(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
