<?php

namespace Samkaveh\Author\Models;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Samkaveh\Book\Models\Book;

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


    public function books()
    {
        return $this->belongsToMany(Book::class);
    }


}