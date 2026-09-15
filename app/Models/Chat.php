<?php

namespace App\Models;

use Heritage\Database\Eloquent\Factories\HasFactory;
use Heritage\Database\Eloquent\Model;
use Heritage\Database\Eloquent\Relations\BelongsTo;
use Heritage\Database\Eloquent\Relations\HasMany;

class Chat extends Model
{
    /** @use HasFactory<\Database\Factories\ChatFactory> */
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
