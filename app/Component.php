<?php

namespace MMA;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    protected $fillable = ['title', 'body', 'type'];

}
