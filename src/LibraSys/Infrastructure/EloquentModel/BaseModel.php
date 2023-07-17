<?php

namespace LibraSys\Infrastructure\EloquentModel;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    protected $guarded = [];
}
