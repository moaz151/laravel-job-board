<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids; 


class Tag extends Model
{
    use HasFactory;
    use HasUuids;
    protected $primaryKey = 'id'; // specify the primary key if it's not 'id'
    protected $keyType = 'string'; // specify the key type if it's not 'int'
    public $incrementing = false; // specify if the primary key is auto-incrementing

    protected $fillable = ['title'] ; // fields that can be updated
    protected $guarded = ['id']; // fields that cannot be updated/assigned (read only)

    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
