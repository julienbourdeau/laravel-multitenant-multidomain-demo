<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Event extends Model
{
    protected $dates = ['start_date'];

    public function eventlist()
    {
        return $this->belongsTo(EventList::class, 'event_list_id');
    }

    public function getDescriptionAttribute()
    {
        return Str::limit($this->attributes['description']);
    }
}
