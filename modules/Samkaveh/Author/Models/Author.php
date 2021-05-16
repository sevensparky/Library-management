<?php

namespace Samkaveh\Author\Models;

use App\Models\Test;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['name','slug','description'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
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


    public function tests()
    {
        return $this->belongsToMany(Test::class);
    }


}