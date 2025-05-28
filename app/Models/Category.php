<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'Categories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'keterangan'
    ];
}
