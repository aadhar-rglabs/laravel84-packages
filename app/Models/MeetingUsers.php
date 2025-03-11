<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MeetingUsers extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meeting_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['meeting_id', 'user_id', 'status', 'created_at', 'updated_at'];

    /**
     * Get the meeting that owns the meeting users.
     */
    public function meetings(): BelongsTo
    {
        return $this->belongsTo(Meeting::class);
    }
}
