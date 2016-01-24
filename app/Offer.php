<?php

namespace MMA;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = ['title', 'body', 'filename','active'];

}
