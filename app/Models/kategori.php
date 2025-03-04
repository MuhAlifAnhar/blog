<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kategori extends Model
{
    use HasFactory;

    protected $fillable = ['title','kategori','slug','excerpt','body'];

    public function posts(){
        return $this->hasMany(Post::class);
    }
}
