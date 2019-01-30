<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $primaryKey = 'StatusId';
    protected $table = 'status';

    protected $fillable = ['Name'];
}
