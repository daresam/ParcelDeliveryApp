<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MembershipForm extends Model
{
    protected $primaryKey = 'MembershipFormId';
    protected $table = 'membershipform';


    public function status()
    {
        return $this->belongsTo(Status::class, 'StatusId');
    }
    public function maritalStatus()
    {
        return $this->belongsTo(MaritalStatus::class, 'MaritalStatusId');
    }

}
