<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class comment extends Model
{
    use HasFactory;
        protected $fillable =[
        'post_id', 'user_id','comments_content' 
    ];

    /**
     * Get the user that owns the comment
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commentator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
