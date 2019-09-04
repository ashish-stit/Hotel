<?php

namespace App\Models;

use Cohensive\Embed\Facades\Embed;
use Illuminate\Database\Eloquent\Model;

class profile_model extends Model
{
      protected $fillable = [
        'objective',
        'client_id', 
        'client_document_id',
        'name',
        'email',
        'skills',
        'experience_year',
        'experience_hotel',
        'education',
        'resume',

      ];
   

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'client_profile';
}
