<?php

namespace Itobuztech\Contact\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = ['username', 'useremail', 'usermessage'];
}
