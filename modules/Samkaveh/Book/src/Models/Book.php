<?php

namespace Samkaveh\Book\Models;

use Samkaveh\User\Models\User;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Samkaveh\Author\Models\Author;
use Samkaveh\Subject\Models\Subject;

class Book extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = [];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class);
    }

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function getDaysOfCreatedAt()
    {
        return \Morilog\Jalali\Jalalian::fromCarbon(Carbon::parse($this->created_at));
    }

    public function authorName()
    {
        if ($this->authors) {
            $authorsName = $this->authors->pluck('name')->toArray();
            return implode(', ',$authorsName);
        }
    }

    public function getImage()
    {
        return '/storage/' . $this->image;
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
