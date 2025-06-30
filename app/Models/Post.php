<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post'; // specify the table name if it doesn't follow Laravel's naming convention
    protected $fillable = ['title', 'body', 'author','published'] ; // fields that can be updated
    protected $guarded = ['id']; // fields that cannot be updated/assigned (read only)

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
