<?php

namespace Samkaveh\Subject\Models;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['title','slug','description'];

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

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getDaysOfCreatedAt()
    {
      return \Morilog\Jalali\Jalalian::fromCarbon(Carbon::parse($this->create_at));
    }

}