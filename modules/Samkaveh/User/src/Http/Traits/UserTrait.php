<?php

namespace Samkaveh\User\Http\Traits;

use Carbon\Carbon;

trait UserTrait
{
  
    public function getDaysOfCreatedAt()
    {
        return \Morilog\Jalali\Jalalian::fromCarbon(Carbon::parse($this->created_at));
    }

    public function getImageUserProfile()
    {
        return '/storage/' . $this->img_profile;
    }

    public function getUserHasBook()
    {
       return !empty($this->books->all());
    }  

}