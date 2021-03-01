<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // MASS ASSIGNEMENT
    protected $fillable = [
        'name', 
        'lastname',
        'phone', 
        'email',
        'message', 
        'terms'
    ];

    protected $dates = ['created_at'];

    protected $appends = ['createdDateHumanReadable'];

    public function getcreatedDateHumanReadableAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
