<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaritalStatus extends Model
{
    protected $primaryKey = 'MaritalStatusId';
    protected $table = 'maritalstatus';

    protected $fillable = ['Name'];
}
