<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designate extends Model
{
    protected $primaryKey = 'DesignateId';
    protected $table = 'designate';

    protected $fillable = ['Name'];
}
