<?php

namespace App\Models;

use Cohensive\Embed\Facades\Embed;
use Illuminate\Database\Eloquent\Model;

class profile_model extends Model
{
      protected $fillable = [
        
        'category_name',

      ];
   

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'master_category';
}
