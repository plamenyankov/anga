<?php

namespace MMA;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    protected $table = 'subscribers';
    protected $fillable = ['name', 'phone', 'email', 'subscribed_at'];
    protected $dates = ['subscribed_at'];
    public function setSubscribedAtAttribute(){
        $this->attributes['subscribed_at'] = Carbon::now();
    }

}
