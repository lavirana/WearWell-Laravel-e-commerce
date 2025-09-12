<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class zoho_user extends Model
{
    protected $fillable = ['email' , 'first_name', 'last_name' , 'tags'];
}
