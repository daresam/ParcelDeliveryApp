<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'weight', 'sent_on', 'delivered_on', 'from_address', 'to_address'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
