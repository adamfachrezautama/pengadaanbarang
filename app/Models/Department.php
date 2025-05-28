<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //

    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'Departments';
    protected $primaryKey = 'id';

    protected $fillable = [
        'keterangan'
    ];

}
