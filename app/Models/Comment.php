<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comment extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'user_id',
        'comment'
    ];

    public function searchableAs()
    {
        return 'comments';
    }
}
