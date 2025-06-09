<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'poster',
        'content',
        'habilitated',
    ];

        public function votes(){
            return $this->hasMany(PostVote::class);
        }

        public function user(){
        return $this->belongsTo(User::class);
    }
}
