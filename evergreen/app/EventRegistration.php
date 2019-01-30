<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventRegistration extends Model
{
    protected $primaryKey = 'EventRegistrationId';
    protected $table = 'eventregistration';

    public function designate()
    {
        return $this->belongsTo(Designate::class, 'DesignateId');
    }
}
