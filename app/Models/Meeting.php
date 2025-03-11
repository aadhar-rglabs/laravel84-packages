<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Meeting extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'meetings';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['meeting_code', 'scheduled_by', 'image', 'file', 'date_time', 'project', 'reason', 'description', 'status'];


    /**
     * Get the users for the meeting.
     */
    public function users(): HasMany
    {
        return $this->hasMany(MeetingUsers::class);
    }
}
