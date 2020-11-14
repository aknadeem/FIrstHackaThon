<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    use HasFactory;

    public $table = 'companies';

    // protected $dates = [
    //     'created_at',
    //     'updated_at',
    // ];

    protected $guarded = [];
}
