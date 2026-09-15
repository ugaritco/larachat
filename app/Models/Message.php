<?php

namespace App\Models;

use Heritage\Database\Eloquent\Factories\HasFactory;
use Heritage\Database\Eloquent\Model;
use Heritage\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    /** @use HasFactory<\Database\Factories\MessageFactory> */
    use HasFactory;

    protected $fillable = [
        'chat_id',
        'type',
        'content',
    ];

    protected $casts = [
        'type' => 'string',
    ];

    protected $appends = ['saved'];

    public function getSavedAttribute()
    {
        return true;
    }

    public function chat(): BelongsTo
    {
        return $this->belongsTo(Chat::class);
    }
}
