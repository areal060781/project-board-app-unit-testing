<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 *
 * @package App
 * @property int $id
 * @property int $owner_id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereOwnerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Project whereUpdatedAt($value)
 */
class Project extends Model
{
    protected $guarded = [];

    /**
     * @return string
     */
    public function path()
    {
        return "/projects/{$this->id}";
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask($body)
    {
        return $this->tasks()->create(compact('body'));
    }

    public function activity()
    {
        return $this->hasMany(Activity::class)->latest();
    }

    /**
     * Record activity for a project
     *
     * @param string $description
     */
    public function recordActivity(string $description): void
    {
        $this->activity()->create(compact('description'));
    }
}
