<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\AppModels;

class userModels extends AppModels
{
    protected $table      = 'userloginmodule.logintable';
	protected $primaryKey = 'intID';
}
