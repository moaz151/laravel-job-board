<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids; 

class Post extends Model
{
    use HasFactory;
    
    use HasUuids;
    protected $primaryKey = 'id'; // specify the primary key if it's not 'id'
    protected $keyType = 'string'; // specify the key type if it's not 'int'
    public $incrementing = false; // specify if the primary key is auto-incrementing

    protected $table = 'post'; // specify the table name if it doesn't follow Laravel's naming convention
    protected $fillable = ['title', 'body', 'author','published'] ; // fields that can be updated
    protected $guarded = ['id']; // fields that cannot be updated/assigned (read only)

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
