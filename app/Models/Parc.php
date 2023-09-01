<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parc extends Model
{
    use HasFactory;
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function isMTD($maxDay = "23/06"){
        return substr($this->event_date,0,5) == $maxDay;
    }

    public function scopeWhere($query, $event_date, $value)
    {
        return $query->where(substr($event_date,0,5), $value);
    }

    public function scopeDateContains($query, $substring)
    {
        return $query->where('event_date', 'like', '%' . $substring . '%');
    }
}
