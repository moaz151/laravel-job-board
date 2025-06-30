<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments'; // specify the table name if it doesn't follow Laravel's naming convention
    protected $fillable = [ 'author','content', 'post_id' ];
    protected $guarded = ['id'];

    public function post()
    {
        return $this->belongsTo(Post::class); // this means this comment
    }
}
