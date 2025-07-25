<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids; 


class Comment extends Model
{
    use HasFactory;

    use HasUuids;
    protected $primaryKey = 'id'; // specify the primary key if it's not 'id'
    protected $keyType = 'string'; // specify the key type if it's not 'int'
    public $incrementing = false; // specify if the primary key is auto-incrementing
    protected $table = 'comments'; // specify the table name if it doesn't follow Laravel's naming convention
    protected $fillable = [ 'author','content', 'post_id' ];
    protected $guarded = ['id'];

    public function post()
    {
        return $this->belongsTo(Post::class); // this means this comment
    }
}
