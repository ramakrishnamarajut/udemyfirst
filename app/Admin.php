<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Admin extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
}
